<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\InquiryMail;
use App\Models\Image;
use App\Models\NewsEvent\NewsEvent;
use App\Models\AcademicLevel;
use App\Models\Accreditation;
use App\Models\Achievement;
use App\Models\BlogPost;
use App\Models\Club;
use App\Models\Faqs;
use App\Models\LearningApproach;
use App\Models\PostCategory;
use App\Models\Staff\Staff;
use App\Models\Testimonial;
use App\Services\SEO\AboutEventSeo;
use App\Services\SEO\AdministrationSeo;
use App\Services\SEO\AdmissionProcessSeo;
use App\Services\SEO\AdmissionRequirementsSeo;
use App\Services\SEO\HistorySeo;
use App\Services\SEO\MissionVisionSeo;
use App\Services\SEO\ScholarshipAndAidSeo;
use App\Services\SEO\SchoolEventsSeo;
use App\Services\SEO\StudentAchievementsSeo;
use App\Services\SEO\TuitionFeesSeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $academicLevels = AcademicLevel::all();
        $news = NewsEvent::orderBy('created_at', 'desc')->limit(3)->get();
        $academicLevels = AcademicLevel::all();
        $testimonials = Testimonial::all();
        $accreditations = Accreditation::all();
        $images = Image::all();
        return view('index', ['academicLevels' => $academicLevels, 'testimonials' => $testimonials, 'accreditations' => $accreditations, 'news' => $news, 'images' => $images]);
    }
    public function welcomeMessage()
    {
        return view('welcome-message');
    }
    public function ourHistory()
    {
        (new HistorySeo())->apply();
        return view('our-history');
    }
    public function missionVision()
    {
        (new MissionVisionSeo())->apply();
        return view('mission-vision');
    }
    public function administration()
    {
        (new AdministrationSeo())->apply();
        $staff = Staff::all();
        return view('administration', compact('staff'));
    }
    public function admissionProcess()
    {
        (new AdmissionProcessSeo())->apply();
        return view('admission-process');
    }
    public function admissionRequirements()
    {
        (new AdmissionRequirementsSeo())->apply();

        return view('admission-requirements');
    }
    public function tuitionsFees()
    {
        (new TuitionFeesSeo())->apply();

        return view('tuition-fees');
    }
    public function scholarshipAids()
    {
        (new ScholarshipAndAidSeo())->apply();

        return view('scholarship-aids');
    }
    public function studentAchievements()
    {
        (new StudentAchievementsSeo())->apply();

        $achievements = Achievement::orderBy('created_at', 'desc')->get();
        return view('student-achievements', ['achievements' => $achievements]);
    }
    public function schoolEvents()
    {
        (new SchoolEventsSeo())->apply();

        $events = NewsEvent::orderBy('created_at', 'desc')->get();

        return view('school-events', compact('events'));
    }

    public function aboutEvent($title)
    {
        $event = NewsEvent::where('title', $title)->first();
        (new AboutEventSeo())->apply($event);
        return view('about-event', compact('event'));
    }

    public function curriculum()
    {
        $academicLevels = AcademicLevel::all();
        return view('curriculum', ['academicLevels' => $academicLevels]);
    }

    public function subjectsOffered()
    {
        $academicLevels = AcademicLevel::with('subjects')->get();
        return view('subjects-offered', ['academicLevels' => $academicLevels]);
    }

    public function studyLevels()
    {
        $academicLevels = AcademicLevel::all();
        return view('study-levels', ['academicLevels' => $academicLevels]);
    }

    public function studyLevel(AcademicLevel $level)
    {
        return view('study-level', ['level' => $level]);
    }

    public function teachingMethods()
    {
        $methods = LearningApproach::all();
        return view('teaching-methods', ['methods' => $methods]);
    }

    public function contactUs()
    {
        $faqs = Faqs::limit(5)->get();
        return view('contact-us', ['faqs' => $faqs]);
    }

    public function faqs()
    {
        $faqs = Faqs::all();
        return view('faqs', ['faqs' => $faqs]);
    }

    public function extracurricularActivities()
    {
        $clubs = Club::all();
        $achievements = Achievement::all();
        return view('extracurricular-activities', ['clubs' => $clubs, 'achievements' => $achievements]);
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

    public function inquiries(Request $request) {
        $contact = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // send email to admin
        Mail::to('seniorsuleiman2901@gmail.com')->send(new InquiryMail($contact));

        return back()->with(['message' => 'Inquiry sent successfully!']);
    }
}
