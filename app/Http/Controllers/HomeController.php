<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NewsEvent\NewsEvent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = NewsEvent::where('type', 'news')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('index', compact('news'));
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
        $featuredEvents = NewsEvent::where('type', 'event')->where('status', 'featured')->orderBy('created_at', 'desc')->get();
        $pastEvents = NewsEvent::where('type', 'event')->where('status', 'past')->orderBy('created_at', 'desc')->get();
        $upcomingEvents = NewsEvent::where('type', 'event')->where('status', 'upcoming')->orderBy('created_at', 'desc')->get();

        return view('school-events', compact('featuredEvents', 'pastEvents', 'upcomingEvents'));
    }

    public function aboutEvent($title)
    {
        $event = NewsEvent::where('title', $title)->first();
        return view('about-event', compact('event'));
    }

    public function curriculum()
    {
        return view('curriculum');
    }

    public function subjectsOffered()
    {
        return view('subjects-offered');
    }

    public function studyLevels()
    {
        return view('study-levels');
    }

    public function studyLevel()
    {
        return view('study-level');
    }

    public function teachingMethods()
    {
        return view('teaching-methods');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function extracurricularActivities()
    {
        return view('extracurricular-activities');
    }

    public function blog()
    {
        return view('blog.blog');
    }

    public function blogPost()
    {
        return view('blog.blog-post');
    }

    public function searchPost()
    {
        return view('blog.search-result');
    }

    public function categoryPosts()
    {
        return view('blog.category-posts');
    }
}
