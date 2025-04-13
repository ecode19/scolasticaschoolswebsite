<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use App\Models\Accreditation;
use App\Models\BlogPost;
use App\Models\Club;
use App\Models\LearningApproach;
use App\Models\NewsEvent\NewsEvent;
use App\Models\Staff\Staff;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard() {
        $studyLevels = AcademicLevel::all();
        $subjects = Subject::all();
        $approaches = LearningApproach::all();
        $accreditations = Accreditation::all();
        $clubs = Club::all();
        $news = NewsEvent::all();
        $blog = BlogPost::all();
        $staff = Staff::all();

        return view('admin.dashboard', ['studyLevels' => $studyLevels->count(), 'subjects' => $subjects->count(), 'approaches' => $approaches->count(), 'accreditations' => $accreditations->count(), 'clubs' => $clubs->count(), 'news' => $news->count(), 'blog' => $blog->count(), 'staff' => $staff->count()]);
    }
}
