<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubjectCategory;
use Illuminate\Http\Request;

class SubjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = SubjectCategory::all();
        return view('admin.subject-categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subject-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = $request->validate([
            'category' => 'required|string'
        ]);

        SubjectCategory::create($category);

        return to_route('admin.subject-categories.index')->with('message', 'subject category added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubjectCategory $subject_category)
    {
        $subject_category->delete();

        return to_route('admin.subject-categories.index')->with('message', 'Subject category deleted');
    }
}
