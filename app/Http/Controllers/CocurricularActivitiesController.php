<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use App\Models\CoCurricularActivity;
use Illuminate\Http\Request;
use Storage;

class CocurricularActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = CoCurricularActivity::with('academicLevel')->get();
        return view('admin.co-curricular.index', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $academicLevels = AcademicLevel::all();
        return view('admin.co-curricular.create', ['academicLevels' => $academicLevels]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $activity = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'academic_level_id' => 'required|string',
            'primary_img' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        if ($request->hasFile('primary_img')) {
            $image = $request->file('primary_img');
            $path = 'images/cocurricular-activities/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');
            $activity['primary_img'] = $imagename;
        }

        $activity['academic_level_id'] = AcademicLevel::where('name', $request->academic_level_id)->first()->id;

        $activity = CoCurricularActivity::create($activity);

        return to_route('admin.cocurricular.index')->with('message', 'Co-curricular Activity added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CoCurricularActivity $cocurricular)
    {
        $academicLevels = AcademicLevel::all();
        return view('admin.co-curricular.edit', ['activity' => $cocurricular, 'academicLevels' => $academicLevels, 'activityAcademicLevel' => $cocurricular->academicLevel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CoCurricularActivity $cocurricular)
    {
        $updatedActivity = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'academic_level_id' => 'required|string',
            'primary_img' => 'file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        $imagename = $cocurricular->primary_img;
        if ($request->hasFile('primary_img')) {
            $image = $request->file('primary_img');
            $path = 'images/cocurricular-activities/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');

            // removing the existing image
            $existingImage = $path .  $cocurricular->primary_img;
            if ( $cocurricular->primary_img && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }

        $updatedActivity['primary_img'] = $imagename;
        $updatedActivity['academic_level_id'] = AcademicLevel::where('name', $request->academic_level_id)->first()->id;

        $cocurricular->update($updatedActivity);

        return to_route('admin.cocurricular.index')->with('message', 'Co-curricular Activity updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoCurricularActivity $cocurricular)
    {
        $path = 'images/cocurricular-activities/';

        // delete the existing image
        $existingImage = $path .  $cocurricular->primary_img;
        if ( $cocurricular->primary_img && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $cocurricular->delete();

        return to_route('admin.cocurricular.index')->with('message', 'Co-curricular Activity deleted');
    }
}
