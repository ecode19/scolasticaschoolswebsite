<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use App\Models\LearningApproach;
use Illuminate\Http\Request;
use Storage;

class LearnigApproachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $approaches = LearningApproach::with('academicLevel')->get();
        return view('admin.learnig-approach.index', ['approaches' => $approaches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $academicLevels = AcademicLevel::all();
        return view('admin.learnig-approach.create', ['academicLevels' => $academicLevels]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $approach = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'academic_level_id' => 'required|string',
            'primary_img' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        if ($request->hasFile('primary_img')) {
            $image = $request->file('primary_img');
            $path = 'images/learning-approaches/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');
            $approach['primary_img'] = $imagename;
        }

        $approach['academic_level_id'] = AcademicLevel::where('name', $request->academic_level_id)->first()->id;

        $approach = LearningApproach::create($approach);

        return to_route('admin.learning-approach.index')->with('message', 'Learning Approach added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LearningApproach $learning_approach)
    {
        $academicLevels = AcademicLevel::all();
        return view('admin.learnig-approach.edit', ['approach' => $learning_approach, 'academicLevels' => $academicLevels, 'approachAcademicLevel' => $learning_approach->academicLevel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LearningApproach $learning_approach)
    {
        $updatedApproach = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'academic_level_id' => 'required|string',
            'primary_img' => 'file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        $imagename = $learning_approach->primary_img;
        if ($request->hasFile('primary_img')) {
            $image = $request->file('primary_img');
            $path = 'images/learning-approaches/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');

            // removing the existing image
            $existingImage = $path .  $learning_approach->primary_img;
            if ( $learning_approach->primary_img && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }

        $updatedApproach['primary_img'] = $imagename;
        $updatedApproach['academic_level_id'] = AcademicLevel::where('name', $request->academic_level_id)->first()->id;

        $learning_approach->update($updatedApproach);

        return to_route('admin.learning-approach.index')->with('message', 'Learning Approach updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LearningApproach $learning_approach)
    {
        $path = 'images/learning-approaches/';

        // delete the existing image
        $existingImage = $path .  $learning_approach->primary_img;
        if ( $learning_approach->primary_img && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $learning_approach->delete();

        return to_route('admin.learning-approach.index')->with('message', 'Learning Approach deleted');
    }
}
