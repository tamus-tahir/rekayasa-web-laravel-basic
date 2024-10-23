<?php

use App\Http\Controllers\StudyController;
use App\Models\Student;
use App\Models\Study;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index', ['title' => 'Home Page']);
});

Route::get('/study', [StudyController::class, 'index'])->name('study.index');
Route::get('/study/create', [StudyController::class, 'create'])->name('study.create');
Route::post('/study', [StudyController::class, 'store'])->name('study.store');

Route::get('/student', function () {
    return view('student.index', [
        'title' => 'Student Page',
        'students' => Student::get()
    ]);
});
