<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff\Staff;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function StaffIndex()
    {
        $staff = Staff::all();
        $imagePath = "images/staff/profile/";
        return view('admin.staff.index', compact('staff', 'imagePath'));
    }
    public function StaffCreate()
    {
        return view('admin.staff.create');
    }

    public function StaffStore(Request $request)
    {

        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'gender' => ['required'],
            'bio' => ['nullable'],
            'profile_picture' => ['nullable', 'mimes:jpg,png,jpeg,avif', 'max:2048'],
        ], [
            'first_name.required' => 'Kindly fill in you firstname is required',
            'last_name.required' => 'Kindly fill in you lastnem is required',
            'gender.required' => 'kindlly select gender',
            'profile_picture.mimes' => 'Image must be jpg, png, jpeg',
        ]);

        $Staff = new Staff();

        // News event Image processing
        $imageName = '';
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageOriginalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageFileExtension = $image->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 7);

            $imageName = $imageOriginalName . '-' . $uniqueId . '.' . $imageFileExtension;

            // try catch error handling
            $imageStoragePath = "images/staff/profile/";
            try {
                $image->storeAs($imageStoragePath, $imageName, 'public');
                $Staff->profile_picture = $imageName;
            } catch (Exception $e) {
                Log::error('Profile picture upload failed: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Profile picture upload failed!')
                    ->with('Profile picture upload failed: ' . $e->getMessage());
            }
        }

        $Staff->first_name = $request->first_name;
        $Staff->last_name = $request->last_name;
        $Staff->gender = $request->gender;
        $Staff->bio = $request->bio;

        $Staff->save();

        return redirect()->route('admin.staff.index')->with('message', 'Successfully added!');
    }
    public function StaffEdit(Request $request, Staff $staff)
    {
        return view('admin.staff.edit', compact('staff'));
    }
    public function StaffUpdate(Request $request, Staff $Staff)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required'],
            'gender' => ['required', 'string', 'max:255'],
            'bio' => ['nullable', 'string', 'max:255'],
            'profile_picture' => ['nullable', 'mimes:jpg,png,jpeg,avif', 'max:2048'],
        ], [
            'first_name.required' => 'The firstname filled is required',
            'last_name.required' => 'The last name filled is required',
            'gender.required' => 'Kindly select gender',
        ]);

        // News event Image processing
        $imageName = $Staff->image;

        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageOriginalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageFileExtension = $image->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 7);

            $imageName = $imageOriginalName . '-' . $uniqueId . '.' . $imageFileExtension;

            // try catch error handling
            $imageStoragePath = "images/staff/profile/";
            $existingImagePath = $imageStoragePath . $Staff->image;

            try {
                // deleting existing news event image
                if (Storage::disk('public')->exists($existingImagePath)) {
                    Storage::disk('public')->delete($existingImagePath);
                }

                $image->storeAs($imageStoragePath, $imageName, 'public');
                $Staff->profile_picture = $imageName;
            } catch (Exception $e) {
                Log::error('profile picture upload failed!' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'profile picture upload failed!')
                    ->with('error_message', $e->getMessage());
            }
        }

        $Staff->first_name = $request->first_name;
        $Staff->last_name = $request->last_name;
        $Staff->gender = $request->gender;
        $Staff->bio = $request->bio;

        $Staff->update();

        return redirect()->route('admin.staff.index')->with('message', 'successfully updated!');

    }
    public function StaffDestroy(Request $request, Staff $Staff)
    {
        // delete existing image
        $imageStoragePath = "images/staff/profile/";
        $existingImagePath = $imageStoragePath . $Staff->image;

        try {
            if (Storage::disk('public')->exists($existingImagePath)) {
                Storage::disk('public')->delete($existingImagePath);
            }
        } catch (Exception $e) {
            Log::error('profile picture delete failed!' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'profile picture delete failed!')
                ->with('error_message', $e->getMessage());
        }

        $Staff->delete();

        return redirect()->route('admin.staff.index')->with('message', 'Successfully deleted!');
    }
}
