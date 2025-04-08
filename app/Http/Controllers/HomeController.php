<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use App\Models\NewsEvent\NewsEvent;
use App\Models\BlogPost;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $academicLevels = AcademicLevel::all();
        $news = NewsEvent::where('type', 'news')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('index', compact('news', 'academicLevels'));
    }
    public function welcomeMessage()
    {
        return view('welcome-message');
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

    public function searchPost()
    {
        return view('blog.search-result');
    }

    public function blog()
    {
        $recentPosts = BlogPost::with('category')->orderBy('created_at', 'desc')->limit(4)->get();
        $featuredPosts = BlogPost::with('category')->where('featured', 1)->orderBy('created_at', 'desc')->limit(5)->get();
        $otherPosts = BlogPost::with('category')->paginate(10);

        $categories = PostCategory::all();

        return view('blog.blog', ['recentPosts' => $recentPosts, 'featuredPosts' => $featuredPosts, 'otherPosts' => $otherPosts, 'categories' => $categories]);
    }

    public function blogPost(BlogPost $post)
    {
        return view('blog.blog-post', ['post' => $post]);
    }

    public function searchPostStore(Request $request)
    {
        $search = $request->search;
        $posts = BlogPost::with('category')
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhereHas('category', function ($query) use ($search) {
                $query->where('category', 'LIKE', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $otherPosts = BlogPost::limit('10')->get();

        $categories = PostCategory::all();

        return view('blog.search-result', ['posts' => $posts, 'search' => $search, 'otherPosts' => $otherPosts, 'categories' => $categories]);
    }

    public function categoryPosts($category)
    {
        $categoryId = PostCategory::where('category', $category)->first()->id;
        $categoryPosts = BlogPost::where('category_id', $categoryId)->orderByDesc('created_at')->paginate(10);
        $otherCategories = PostCategory::whereNot('category', $category)->get();

        return view('blog.category-posts', ['categoryPosts' => $categoryPosts, 'category' => $category, 'otherCategories' => $otherCategories]);
    }
}
