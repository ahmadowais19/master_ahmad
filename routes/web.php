<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('layouts.home');
})->name('home');



Route::get('/about', function () {
    return view('layouts.aboutus');
})->name('about');


Route::get('/services', function () {
    return view('layouts.service');
})->name('services');


Route::get('/projects', function () {
    return view('layouts.projects');
})->name('projects');

Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');


Route::get('/404_error', function () {
    return view('layouts.404_page');
})->name('404_error');
// 

Route::resource('course',  CourseController::class);





Route::get('/dashboard', function () {
    return view('layouts.dash');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
