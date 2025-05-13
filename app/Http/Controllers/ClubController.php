<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Storage;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view('admin.clubs.index', ['clubs' => $clubs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $club = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'description' => 'required',
            'primary_img' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        if ($request->hasFile('primary_img')) {
            $image = $request->file('primary_img');
            $path = 'images/clubs/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');
            $club['primary_img'] = $imagename;
        }

        $club = Club::create($club);

        return to_route('admin.clubs.index')->with('message', 'club added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        return view('admin.clubs.edit', ['club' => $club]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        $updatedClub = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'description' => 'required',
            'primary_img' => 'file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        $imagename = $club->primary_img;
        if ($request->hasFile('primary_img')) {
            $image = $request->file('primary_img');
            $path = 'images/clubs/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, options: 'public');

            // removing the existing image
            $existingImage = $path .  $club->primary_img;
            if ( $club->primary_img && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }

        $updatedClub['primary_img'] = $imagename;

        $club->update($updatedClub);

        return to_route('admin.clubs.index')->with('message', 'Club updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(club $club)
    {
        $path = 'images/clubs/';

        // delete the existing image
        $existingImage = $path .  $club->primary_img;
        if ( $club->primary_img && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $club->delete();

        return to_route('admin.clubs.index')->with('message', 'Club deleted');
    }
}
