<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index', ['title' => 'Home Page']);
});

Route::get('/study', function () {
    return view('study.index', ['title' => 'Study Page']);
});

Route::get('/student', function () {
    return view('student.index', ['title' => 'Student Page']);
});
