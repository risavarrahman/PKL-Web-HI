<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NetworksController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsAchController;
use App\Http\Controllers\LecturersActController;
use App\Http\Controllers\DashboardLecturersActController;
use App\Http\Controllers\DashboardNetworksController;
use App\Http\Controllers\DashboardStudentsAchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Home
Route::get('/', function () {
    return view('page.home', [
        "title" => "Home"
    ]);
});

// Dropdown About Us
Route::get('/departments', function () {
    return view('page.departments', [
        'title' => "Departments Profile"
    ]);
});

Route::get('/graduates', function () {
    return view('page.graduates', [
        'title' => "Graduates Profile"
    ]);
});

Route::get('/structure', function () {
    return view('page.structure', [
        "title" => "Organizational Structure"
    ]);
});

Route::get('/accreditation', function () {
    return view('page.accreditation', [
        "title" => "Accreditation"
    ]);
});


// Dropdown Academic
Route::get('/lecturers', function () {
    return view('page.lecturers', [
        'title' => "Lecturers"
    ]);
});

Route::get('/lecturer-activities', [LecturersActController::class, 'index']);

Route::get('/journals', function () {
    return view('page.journals', [
        'title' => "Our Journals"
    ]);
});

Route::get('/networks', [NetworksController::class, 'index']);


// Dropdown Student Activities
Route::get('/freshmen', function () {
    return view('page.freshmen', [
        'title' => 'Freshmen Program'
    ]);
});

Route::get('/debate', function () {
    return view('page.debate', [
        'title' => 'Debate Society'
    ]);
});

Route::get('/students-achievement', [StudentsAchController::class, 'index']);

// Dropdown Curriculum
Route::get('/units-study', function () {
    return view('page.units-study', [
        'title' => 'Units of Study'
    ]);
});

Route::get('/syllabus', function () {
    return view('page.syllabus', [
        'title' => 'Syllabus'
    ]);
});

// Facilities
Route::get('/facilities', function () {
    return view('page.facilities', [
        'title' => 'Facilities'
    ]);
});

// Gallery
Route::get('/gallery', function () {
    return view('page.gallery', [
        'title' => 'Gallery'
    ]);
});

Route::get('/login/admin', [LoginController::class, 'admin'])->name('login')->middleware('guest');
Route::post('/login/admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register/admin', [RegisterController::class, 'admin'])->middleware('guest');
Route::post('/register/admin', [RegisterController::class, 'store']);

Route::get('/home', function () {
    return view('page.home', [
        'title' => 'Home'
    ]);
})->middleware('auth');

Route::get('/dashboard', function() {
    return view('dashboard.admin');
})->middleware('auth');


Route::resource('/dashboard/lecturers_act', DashboardLecturersActController::class)
->except('show')->middleware('auth');

Route::resource('/dashboard/networks', DashboardNetworksController::class)
->except('show')->middleware('auth');

Route::resource('/dashboard/students_ach', DashboardStudentsAchController::class)->except('show')->middleware('auth');

