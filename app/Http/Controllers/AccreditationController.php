<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Accreditation;
use Illuminate\Http\Request;
use Storage;

class AccreditationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accreditations = Accreditation::all();
        return view('admin.accreditations.index', ['accreditations' => $accreditations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accreditations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $accreditation = $request->validate([
            'link' => 'required|string',
            'logo' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:3072',
        ]);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $path = 'images/accreditations/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');
            $accreditation['logo'] = $imagename;
        }

        $accreditation = Accreditation::create($accreditation);

        return to_route('admin.accreditations.index')->with('message', 'Accreditation added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accreditation $accreditation)
    {
        $path = 'images/accreditations/';

        // delete the existing image
        $existingImage = $path .  $accreditation->logo;
        if ( $accreditation->logo && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $accreditation->delete();

        return to_route('admin.accreditations.index')->with('message', 'Accreditation deleted');
    }
}
