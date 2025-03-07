<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function curriculum() {
        return view('curriculum');
    }

    public function subjectsOffered() {
        return view('subjects-offered');
    }

    public function studyLevels() {
        return view('study-levels');
    }

    public function studyLevel() {
        return view('study-level');
    }

    public function teachingMethods() {
        return view('teaching-methods');
    }

    public function contactUs() {
        return view('contact-us');
    }

    public function extracurricularActivities() {
        return view('extracurricular-activities');
    }
}
