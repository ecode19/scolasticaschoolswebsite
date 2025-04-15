<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.images.index', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newImage = $request->validate([
            'image' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = 'images/home-banners/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');
            $newImage['image'] = $imagename;
        }

        $image = Image::create($newImage);

        return to_route('admin.image.index')->with('message', 'Image added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        return view('admin.images.edit', ['image' => $image]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        $updatedImage = $request->validate([
            'image' => 'file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        $imagename = $image->image;
        if ($request->hasFile('image')) {
            $newImage = $request->file('image');
            $path = 'images/home-banners/';
            $imagename = $newImage->getClientOriginalName() . '-' . time() . '.' . $newImage->getClientOriginalExtension();
            $newImage->storeAs($path, $imagename, 'public');

            // removing the existing image
            $existingImage = $path .  $image->image;
            if ( $image->image && Storage::disk('public')->exists(path: $existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }

        $updatedImage['image'] = $imagename;

        $image->update(attributes: $updatedImage);

        return to_route('admin.image.index')->with('message', 'Image updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        $path = 'images/home-banners/';

        // delete the existing image
        $existingImage = $path .  $image->image;
        if ( $image->image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $image->delete();

        return to_route('admin.image.index')->with('message', 'Image deleted');
    }
}
