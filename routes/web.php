<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsEvent\NewsEventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/curriculum', [HomeController::class, 'curriculum'])->name('curriculum');
    Route::get('/subjects-offered', [HomeController::class, 'subjectsOffered'])->name('subjects-offered');
    Route::get('/study-levels', [HomeController::class, 'studyLevels'])->name('study-levels');
    Route::get('/study-levels/level', [HomeController::class, 'studyLevel'])->name('study-level');
    Route::get('/teaching-methods', [HomeController::class, 'teachingMethods'])->name('teaching-methods');
    Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
    Route::get('/extracurricular-activities', [HomeController::class, 'extracurricularActivities'])->name('extracurricular-activities');
    Route::get('our-history', 'ourHistory')->name('our-history');
    Route::get('our-mission-and-vision', 'missionVision')->name('mission-vision');
    Route::get('administration-staff', 'administration')->name('administration');

    Route::get('admission-process', 'admissionProcess')->name('admission-process');
    Route::get('admission-requirements', 'admissionRequirements')->name('admission-requirements');
    Route::get('tuitions-and-fees', 'tuitionsFees')->name('tuitions-fees');
    Route::get('scholarship/aids', 'scholarshipAids')->name('scholarship-aids');
    Route::get('student-achievements', 'studentAchievements')->name('student-achievements');
    Route::get('school/events', 'schoolEvents')->name('school-events');
    Route::get('/{title}', 'aboutEvent')->name('about-event');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/post', 'blogPost')->name('blog-post');
    Route::get('/blog/category', 'categoryPosts')->name('blog-category-posts');
    Route::get('/blog/search', 'searchPost')->name('blog-post-search');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('4', 'Dashboard')->name('admin.dashboard');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/admin/blog/posts', 'index')->name('admin.blog.index');
    Route::get('/admin/blog/posts/post', 'show')->name('admin.blog.show');
    Route::get('/admin/blog/posts/create', 'create')->name('admin.blog.create');
});

// news event controller
Route::controller(NewsEventController::class)->prefix('admin/news/event')->name('admin.news.event.')->group(function () {
    Route::get('index', 'newsEventIndex')->name('index');
    Route::get('create', 'newsEventCreate')->name('create');
    Route::post('store', 'newsEventStore')->name('store');
    Route::get('edit/{newsEvent}', 'newsEventEdit')->name('edit');
    Route::put('update/{newsEvent}', 'newsEventUpdate')->name('update');
    Route::delete('destroy/{newsEvent}', 'newsEventDestroy')->name('destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
