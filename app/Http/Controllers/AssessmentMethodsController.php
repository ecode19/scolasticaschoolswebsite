<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use App\Models\AssessmentMethod;
use Illuminate\Http\Request;

class AssessmentMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $methods = AssessmentMethod::with('academicLevel')->get();
        return view('admin.assessment-methods.index', ['methods' => $methods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $academicLevels = AcademicLevel::all();
        return view('admin.assessment-methods.create', ['academicLevels' => $academicLevels]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $method = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'academic_level_id' => 'required|string',
        ]);

        $method['academic_level_id'] = AcademicLevel::where('name', $request->academic_level_id)->first()->id;

        AssessmentMethod::create($method);

        return to_route('admin.assessment-method.index')->with('message', 'Assessment Method added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssessmentMethod $assessment_method)
    {
        $academicLevels = AcademicLevel::all();
        return view('admin.assessment-methods.edit', ['method' => $assessment_method, 'academicLevels' => $academicLevels, 'methodLevel' => $assessment_method->academicLevel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssessmentMethod $assessment_method)
    {
        $updatedMethod = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'academic_level_id' => 'required|string',
        ]);

        $updatedMethod['academic_level_id'] = AcademicLevel::where('name', $request->academic_level_id)->first()->id;

        $assessment_method->update($updatedMethod);

        return to_route('admin.assessment-method.index')->with('message', 'Assessment Method updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssessmentMethod $assessment_method)
    {
        $assessment_method->delete();

        return to_route('admin.assessment-method.index')->with('message', 'Assessment Method deleted');
    }
}
