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

    public function blog() {
        return view('blog.blog');
    }

    public function blogPost() {
        return view('blog.blog-post');
    }

    public function searchPost() {
        return view('blog.search-result');
    }

    public function categoryPosts() {
        return view('blog.category-posts');
    }
}
