<?php

namespace App\Http\Controllers\NewsEvent;

use App\Http\Controllers\Controller;
use App\Models\NewsEvent\NewsEvent;
use Exception;
use Illuminate\Http\Request;
use Log;
use Storage;

class NewsEventController extends Controller
{
    public function newsEventIndex()
    {
        $news_events = NewsEvent::all();
        $imagePath = "images/news_events/images/";
        return view('admin.news_event.index', compact('news_events', 'imagePath'));
    }
    public function newsEventCreate()
    {
        return view('admin.news_event.news_event_create');
    }

    public function newsEventStore(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'type' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'image' => ['required', 'mimes:jpg,png,jpeg', 'max:2048'],
        ], [
            'title.required' => 'Title is required',
            'content.required' => 'Content is required',
            'type.required' => 'Type is required',
            'location.required' => 'Location is required',
            'date.required' => 'Date is required',
            'image.required' => 'Image is required',
            'image.mimes' => 'Image must be jpg, png, jpeg',
        ]);

        $newsEvent = new NewsEvent();

        // News event Image processing
        $imageName = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageOriginalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageFileExtension = $image->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 7);

            $imageName = $imageOriginalName . '-' . $uniqueId . '.' . $imageFileExtension;

            // try catch error handling
            $imageStoragePath = "images/news_events/images/";
            try {
                $image->storeAs($imageStoragePath, $imageName, 'public');
                $newsEvent->image = $imageName;
            } catch (Exception $e) {
                Log::error('Image upload failed: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Image upload failed!')
                    ->with('Image upload failed: ' . $e->getMessage());
            }
        }

        $newsEvent->title = $request->title;
        $newsEvent->content = $request->content;
        $newsEvent->type = $request->type;
        $newsEvent->location = $request->location;
        $newsEvent->date = $request->date;

        $newsEvent->save();

        return redirect()->route('admin.news.event.index')->with('message', 'News event created successfully!');
    }
    public function newsEventEdit(Request $request, NewsEvent $newsEvent)
    {
        return view('admin.news_event.news_event_edit', compact('newsEvent'));
    }
    public function newsEventUpdate(Request $request, NewsEvent $newsEvent)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'date' => ['required', 'date'],
            'image' => ['mimes:jpg,png,jpeg', 'max:2048'],
        ], [
            'title.required' => 'Title is required',
            'content.required' => 'Content is required',
            'type.required' => 'Type is required',
            'location.required' => 'Location is required',
            'date.required' => 'Date is required',
            'image.mimes' => 'Image must be jpg, png, jpeg',
        ]);

        // News event Image processing
        $imageName = $newsEvent->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageOriginalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageFileExtension = $image->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 7);

            $imageName = $imageOriginalName . '-' . $uniqueId . '.' . $imageFileExtension;

            // try catch error handling
            $imageStoragePath = "images/news_events/images/";
            $existingImagePath = $imageStoragePath . $newsEvent->image;

            try {
                // deleting existing news event image
                if (Storage::disk('public')->exists($existingImagePath)) {
                    Storage::disk('public')->delete($existingImagePath);
                }

                $image->storeAs($imageStoragePath, $imageName, 'public');
                $newsEvent->image = $imageName;
            } catch (Exception $e) {
                Log::error('Image upload failed!' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Image upload failed!')
                    ->with('error_message', $e->getMessage());
            }
        }

        $newsEvent->title = $request->title;
        $newsEvent->content = $request->content;
        $newsEvent->type = $request->type;
        $newsEvent->location = $request->location;
        $newsEvent->date = $request->date;

        $newsEvent->update();

        return redirect()->route('admin.news.event.index')->with('message', 'News event updated successfully!');

    }
    public function newsEventDestroy(Request $request, NewsEvent $newsEvent)
    {
        // delete existing image
        $imageStoragePath = "images/news_events/images/";
        $existingImagePath = $imageStoragePath . $newsEvent->image;

        try {
            if (Storage::disk('public')->exists($existingImagePath)) {
                Storage::disk('public')->delete($existingImagePath);
            }
        } catch (Exception $e) {
            Log::error('Image delete failed!' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Image delete failed!')
                ->with('error_message', $e->getMessage());
        }

        $newsEvent->delete();

        return redirect()->route('admin.news.event.index')->with('message', 'News event deleted successfully!');
    }
}
