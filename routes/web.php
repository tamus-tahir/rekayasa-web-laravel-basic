<?php

use App\Models\Student;
use App\Models\Study;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index', ['title' => 'Home Page']);
});

Route::get('/study', function () {
    return view('study.index', [
        'title' => 'Study Page',
        'studies' => Study::all()
    ]);
});

Route::get('/student', function () {
    return view('student.index', [
        'title' => 'Student Page',
        'students' => Student::all()
    ]);
});
