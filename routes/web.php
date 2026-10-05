<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// --- Multi-Page Navigation Routes ---
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// --- Lab Exercise 1: Student Dashboard ---
Route::get('/dashboard', function () {
    $studentName = "Charish Britanico";
    $studentId = "24-9876";
    $gpa = 0.00;
    $subjects = ["Web Development 3", "Advanced Database Systems", "Human-Computer Interaction"];

    return view('student-dashboard', [
        'studentName' => $studentName,
        'studentId' => $studentId,
        'gpa' => $gpa,
        'subjects' => $subjects
    ]);
});

// --- Lab Exercise 2: Profile Card Generator ---
Route::get('/form', function () {
    return view('form');
});

Route::post('/display', function (Request $request) {
    $fullname = $request->input('fullname', 'N/A');
    $age      = $request->input('age', 'N/A');
    $course   = $request->input('course', 'N/A');
    $email    = $request->input('email', 'N/A');
    $motto    = $request->input('motto', 'No motto provided.');

    return view('display', [
        'fullname' => $fullname,
        'age'      => $age,
        'course'   => $course,
        'email'    => $email,
        'motto'    => $motto
    ]);
});
