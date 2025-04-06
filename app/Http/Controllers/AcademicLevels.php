<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use Illuminate\Http\Request;
use Storage;

class AcademicLevels extends Controller
{
    public function index()
    {
        $academicLevels = AcademicLevel::all();
        return view('admin.academic-levels.index', ['academicLevels' => $academicLevels]);
    }

    public function show(AcademicLevel $academic_level)
    {
        return view('admin.academic-levels.show', ['academic_level' => $academic_level]);
    }

    public function edit(AcademicLevel $academic_level)
    {
        return view('admin.academic-levels.edit', ['academic_level' => $academic_level]);
    }

    public function update(Request $request, AcademicLevel $academic_level)
    {
        $updatedLevel = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'curriculum' => 'required',
            'primary_img' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:3072',
            'image_2' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:3072',
            'image_3' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        $imageFields = ['primary_img', 'image_2', 'image_3'];
        $path = 'images/academic-levels/';

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $image = $request->file($field);
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->storeAs($path, $imageName, 'public');

                // Remove existing image if it exists
                if (!empty($academic_level->$field) && Storage::disk('public')->exists($path . $academic_level->$field)) {
                    Storage::disk('public')->delete($path . $academic_level->$field);
                }

                $updatedLevel[$field] = $imageName;
            } else {
                $updatedLevel[$field] = $academic_level->$field;
            }
        }

        $academic_level->update($updatedLevel);

        return to_route('admin.academic-levels.show', ['academic_level' => $academic_level])->with('message', 'Academic Level updated successfully!');

    }
}
