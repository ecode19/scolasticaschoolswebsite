<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function ourHistory()
    {
        return view('our-history');
    }
    public function missionVision()
    {
        return view('mission-vision');
    }
    public function administration()
    {
        return view('administration');
    }
    public function admissionProcess()
    {
        return view('admission-process');
    }
    public function admissionRequirements()
    {
        return view('admission-requirements');
    }
    public function tuitionsFees()
    {
        return view('tuition-fees');
    }
    public function scholarshipAids()
    {
        return view('scholarship-aids');
    }
    public function studentAchievements()
    {
        return view('student-achievements');
    }
    public function schoolEvents()
    {
        return view('school-events');
    }
}
