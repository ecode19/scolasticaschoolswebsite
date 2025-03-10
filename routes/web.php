<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/curriculum', [HomeController::class, 'curriculum'])->name('curriculum');
Route::get('/subjects-offered', [HomeController::class, 'subjectsOffered'])->name('subjects-offered');
Route::get('/study-levels', [HomeController::class, 'studyLevels'])->name('study-levels');
Route::get('/study-levels/level', [HomeController::class, 'studyLevel'])->name('study-level');
Route::get('/teaching-methods', [HomeController::class, 'teachingMethods'])->name('teaching-methods');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/extracurricular-activities', [HomeController::class, 'extracurricularActivities'])->name('extracurricular-activities');

Route::controller(HomeController::class)->group(function () {
    Route::get('our-history', 'ourHistory')->name('our-history');
    Route::get('our-mission-and-vision', 'missionVision')->name('mission-vision');
    Route::get('administration-staff', 'administration')->name('administration');

    Route::get('admission-process', 'admissionProcess')->name('admission-process');
    Route::get('admission-requirements', 'admissionRequirements')->name('admission-requirements');
    Route::get('tuitions-and-fees', 'tuitionsFees')->name('tuitions-fees');
    Route::get('scholarship/aids', 'scholarshipAids')->name('scholarship-aids');
    Route::get('student-achievements', 'studentAchievements')->name('student-achievements');
    Route::get('school/events', 'schoolEvents')->name('school-events');



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
