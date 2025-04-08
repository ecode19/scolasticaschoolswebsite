<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', ['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'position' => 'required|string',
            'description' => 'required',
        ]);

        $testimonial = Testimonial::create($testimonial);

        return to_route('admin.testimonials.index')->with('message', 'Testimonial added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', ['testimonial' => $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $updTestimonial = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'position' => 'required|string',
            'description' => 'required',
        ]);

        $testimonial->update($updTestimonial);

        return to_route('admin.testimonials.index')->with('message', 'Testimonial updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return to_route('admin.testimonials.index')->with('message', 'Testimonial deleted');
    }
}
