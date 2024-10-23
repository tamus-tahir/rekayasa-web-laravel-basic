<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudyController;
use App\Models\Student;
use App\Models\Study;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index', ['title' => 'Home Page']);
});

Route::resource('/study', StudyController::class);
Route::resource('/student', StudentController::class);

// Route::get('/study', [StudyController::class, 'index'])->name('study.index');
// Route::get('/study/create', [StudyController::class, 'create'])->name('study.create');
// Route::post('/study', [StudyController::class, 'store'])->name('study.store');
// Route::get('/study/{study}/edit', [StudyController::class, 'edit'])->name('study.edit');
// Route::put('/study/{study}', [StudyController::class, 'update'])->name('study.update');
// Route::delete('/study/{study}', [StudyController::class, 'destroy'])->name('study.destroy');
