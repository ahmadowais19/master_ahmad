<?php

// use App\Models\CourseVideo;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CourseController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\PaymentController;
// use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\CheckoutController;



// Route::get('/', function () {
//     return view('layouts.home');
// })->name('home');

// Route::get('/about', function () {
//     return view('layouts.aboutus');
// })->name('about');

// Route::get('/services', function () {
//     return view('layouts.service');
// })->name('services');

// Route::get('/projects', function () {
//     return view('layouts.projects');
// })->name('projects');

// Route::get('/contact', function () {
//     return view('layouts.contact');
// })->name('contact');

// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
// Route::post('/course', [CourseController::class, 'store'])->name('course.store');



// Route::get('/404_error', function () {
//     return view('layouts.404_page');
// })->name('404_error');

// Route::get('/categories/{category}/courses/create', [CourseController::class, 'create'])->name('categories.courses.create');

// ----------------- الكورسات للمستخدم -----------------
// Route::get('/courses', [CourseController::class, 'userCourse'])->name('courses.page');
// Route::get('/courses/{id}', [CourseController::class, 'userShow'])->name('course.userShow');

// ----------------- الكورسات للمشرف --------------------
// Route::resource('course', CourseController::class);
// Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');

// ----------------- الأقسام (Categories) ----------------
// Route::resource('category', CategoryController::class);
// Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
// Route::get('/added-course', [CategoryController::class, 'showCategoriesPage'])->name('Added_course');

// ----------------- ربط الكورسات بالأقسام ----------------
// Route::get('/categories/{category}/course/create', [CourseController::class, 'create'])->name('categories.courses.create');
// Route::post('/categories/{category}/course', [CourseController::class, 'store'])->name('categories.course.store');

// ----------------- الدفع ----------------
// Route::get('/checkout/{course}', [CheckoutController::class, 'show'])->name('checkout.show');
// Route::post('/stripe/charge', [PaymentController::class, 'charge'])->name('stripe.charge');

// Route::get('/dashboard', function () {
//     return view('layouts.dash');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';










use App\Models\Category;
use App\Models\CourseVideo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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

// Route::get('/Added_course', function () {
//     return view('layouts.Added_course');
// })->name('Added_course');

// Route::get('/Add_course', function () {
//     return view('layouts.Add_course');
// })->name('Add_course');



Route::get('/courses', [courseController::class, 'userCourse'])->name('courses.page');


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');






Route::post('/videos/store', [VideoController::class, 'store'])->name('courses.videos.store');


Route::get('/courses/{course}/videos/create', [VideoController::class, 'create'])->name('courses.videos.create');


Route::get('/courses/{category}/videos/create', [VideoController::class, 'create'])->name('courses.videos.create');

Route::get('/categories/{category}/courses/create', [CourseController::class, 'create'])->name('categories.courses.create');

Route::get('/Added_course', [CategoryController::class, 'showCategoriesPage'])->name('Added_course');

Route::resource('categories.course', CourseController::class);

Route::resource('course',  CourseController::class);
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');

Route::get('/course/{courseId}/videos', [VideoController::class, 'index'])->name('courses.videos.index');

Route::get('/courses/{id}', [CourseController::class, 'userShow'])->name('course.userShow');

// Route::get('/courses/{course}/videos/create', [VideoController::class, 'create'])->name('courses.videos.create');

// Route::get('/videos/{id}', [CourseVideosController::class, 'show'])->name('videos.show');

Route::resource('categories.course', courseController::class);

// Route::get('/categories/{category}/courses/create', [CourseController::class, 'create'])->name('courses.create');

// Route::get('/categories/{category}/courses/create', [CourseController::class, 'create'])->name('categories.courses.create');

Route::resource('category', CategoryController::class);

// Route::get('/categories/{category}/courses/create', [CourseController::class, 'create'])->name('courses.create');

Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');


Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');


// Route::get('/add-course', function () {
//     return view('Add_course');
// })->name('add.course');




// Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

// Route::get('/add-course', [CategoryController::class, 'index'])->name('add_course');

Route::get('/added-courses', [CategoryController::class, 'showCategoriesPage'])->name('Added_course');


Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');

// Route::delete('/category/{id}', [categoryController::class, 'destroy'])->name('category.destroy');







// Route::post('/stripe/charge', [PaymentController::class, 'charge']);

// Route::view('/stripe-form', 'layouts.stripe'); // لعرض الفورم

// Route::post('/stripe/charge', [PaymentController::class, 'charge'])->name('stripe.charge');

// Route::get('/checkout/{course}', [CheckoutController::class, 'show'])->name('checkout.show');


Route::get('/stripe-form', function () {
    return view('layouts.stripe', [
        'subtotal' => 10000, // مثال: 100.00$ (بالسنتات)
        'shipping' => 500,   // مثال: 5.00$ (بالسنتات)
        'couponCode' => 'DISCOUNT10',
        'couponValue' => 1000 // مثال: 10.00$ (بالسنتات)
    ]);
})->name('stripe.form');

Route::post('/stripe/charge', [PaymentController::class, 'charge'])
    ->name('stripe.charge');









Route::get('/dashboard', function () {
    return view('layouts.dash');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


