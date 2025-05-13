<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faqs::all();
        return view('admin.faqs.index', ['faqs' => $faqs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faq = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        Faqs::create($faq);

        return to_route('admin.faqs.index')->with('message', 'Faqs Published successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faqs $faq)
    {
        return view('admin.faqs.edit', ['faqs' => $faq]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faqs $faq)
    {
        $updatedFaq = $request->validate([
            'question' => 'required|string',
            'answer' => 'required',
        ]);

        $faq->update($updatedFaq);

        return to_route('admin.faqs.index')->with('message', 'Faqs updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faqs $faq)
    {
        $faq->delete();

        return to_route('admin.faqs.index')->with('message', 'Faqs deleted');
    }
}
