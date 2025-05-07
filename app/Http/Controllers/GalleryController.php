<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Gallery::all();
        return view('admin.gallery.index', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required|array|min:1|max:5',
            'images.*' => 'required|image|mimes:png,jpg,jpeg,avif,webp|max:2048',
        ]);

        $images = $request->file('images');
        $imageData = [];
        foreach ($images as $image) {
            $path = $image->store('gallery', 'public');
            $imageData[] = ['image' => $path];
        }

        $images = Gallery::insert($imageData);

        return to_route('admin.gallery.index')->with('message', 'Image added to the gallery successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        // delete the existing image
        $existingImage = $gallery->image;
        if ($gallery->image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $gallery->delete();

        return to_route('admin.gallery.index')->with('message', 'Gallery Image deleted');
    }
}
