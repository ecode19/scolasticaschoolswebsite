<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = Achievement::all();
        return view('admin.achievements.index', ['achievements' => $achievements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.achievements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $achievement = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        Achievement::create($achievement);

        return to_route('admin.achievement.index')->with('message', 'Achievement Published successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', ['achievement' => $achievement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achievement $achievement)
    {
        $updatedAchiev = $request->validate([
            'title' => 'required|string',
            'description' => 'required',
        ]);

        $achievement->update($updatedAchiev);

        return to_route('admin.achievement.index')->with('message', 'Achievement updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return to_route('admin.achievement.index')->with('message', 'Achievement deleted');
    }
}
