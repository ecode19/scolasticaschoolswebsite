<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use App\Models\Subject;
use App\Models\SubjectCategory;
use Illuminate\Http\Request;
use Storage;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::with('academicLevel')->get();

        return view('admin.subjects.index', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $academicLevels = AcademicLevel::all();
        $categories = SubjectCategory::all();
        return view('admin.subjects.create', ['academicLevels' => $academicLevels, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'academic_level_id' => 'required|string',
            'category_id' => 'required|string',
            'status' => 'required|string',
            'primary_img' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:2048',
        ]);

        if ($request->hasFile('primary_img')) {
            $image = $request->file('primary_img');
            $path = 'images/subjects/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');
            $subject['primary_img'] = $imagename;
        }

        $subject['academic_level_id'] = AcademicLevel::where('name', $request->academic_level_id)->first()->id;
        $subject['category_id'] = SubjectCategory::where('category', $request->category_id)->first()->id;

        $subject = Subject::create($subject);

        return to_route('admin.subjects.index')->with('message', 'subject added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return view('admin.subjects.show', ['subject' => $subject, 'academicLevel' => $subject->academicLevel]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Subject $subject)
    {
        $academicLevels = AcademicLevel::all();
        $categories = SubjectCategory::all();
        return view('admin.subjects.edit', ['subject' => $subject, 'subjectLevel' => $subject->academicLevel, 'academicLevels' => $academicLevels, 'categories' => $categories, 'subjectCategory' => $subject->category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $updatedSubject = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'academic_level_id' => 'required|string',
            'category_id' => 'required|string',
            'status' => 'required|string',
            'primary_img' => 'file|mimes:png,jpg,jpeg,avif,webp|max:2048',
        ]);

        $imagename = $subject->primary_img;
        if ($request->hasFile('primary_img')) {
            $image = $request->file('primary_img');
            $path = 'images/subjects/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');

            // removing the existing image
            $existingImage = $path .  $subject->primary_img;
            if ( $subject->primary_img && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }

        $updatedSubject['primary_img'] = $imagename;
        $updatedSubject['academic_level_id'] = AcademicLevel::where('name', $request->academic_level_id)->first()->id;
        $updatedSubject['category_id'] = SubjectCategory::where('category', $request->category_id)->first()->id;

        $subject->update($updatedSubject);

        return to_route('admin.subjects.show', ['subject' => $subject])->with('message', 'Subject updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $path = 'images/subjects/';

        // delete the existing image
        $existingImage = $path .  $subject->primary_img;
        if ( $subject->primary_img && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $subject->delete();

        return to_route('admin.subjects.index')->with('message', 'Subject deleted');
    }
}
