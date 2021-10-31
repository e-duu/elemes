<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SettingController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/catalog', function () {
    return view('pages.catalog');
});

Route::get('/class', function () {
    return view('pages.class');
});

Route::get('/course', function () {
    return view('pages.course');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/detail-class', function () {
    return view('pages.detail-class');
});

Route::get('/detail-course', function () {
    return view('pages.detail-course');
});

Route::get('/watch', function () {
    return view('pages.watch');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
});

Route::get('/dashboard-user', function () {
    return view('pages.user.dashboard');
});

Route::get('/my-class', function () {
    return view('pages.user.my-class');
});


Route::prefix('/users')->group(function () {
    Route::get('/all', [UserController::class, 'index'])->name('user.index');
    Route::post('/create', [UserController::class, 'store'])->name('user.store');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
});

Route::prefix('/categories')->group(function () {
    Route::get('/all', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
});

Route::prefix('/classes')->group(function () {
    Route::get('/all', [ClassController::class, 'index'])->name('class.index');
    Route::get('/show', [ClassController::class, 'show'])->name('class.show');
    Route::post('/create', [ClassController::class, 'store'])->name('class.store');
    Route::get('/create', [ClassController::class, 'create'])->name('class.create');
    Route::get('/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
    Route::put('/update/{id}', [ClassController::class, 'update'])->name('class.update');
    Route::get('/delete/{id}', [ClassController::class, 'destroy'])->name('class.delete');
});

Route::prefix('/courses')->group(function () {
    Route::get('/all', [CourseController::class, 'index'])->name('course.index');
    Route::post('/create', [CourseController::class, 'store'])->name('course.store');
    Route::get('/create', [CourseController::class, 'create'])->name('course.create');
    Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::put('/update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/delete/{id}', [CourseController::class, 'destroy'])->name('course.delete');
});

Route::prefix('/quizzes')->group(function () {
    Route::get('/all', [QuizzController::class, 'index'])->name('quiz.index');
    Route::post('/create', [QuizzController::class, 'store'])->name('quiz.store');
    Route::get('/create', [QuizzController::class, 'create'])->name('quiz.create');
    Route::get('/edit/{id}', [QuizzController::class, 'edit'])->name('quiz.edit');
    Route::put('/update/{id}', [QuizzController::class, 'update'])->name('quiz.update');
    Route::get('/delete/{id}', [QuizzController::class, 'destroy'])->name('quiz.delete');
});

Route::prefix('/goals')->group(function () {
    Route::get('/all', [GoalController::class, 'index'])->name('goal.index');
    Route::post('/create', [GoalController::class, 'store'])->name('goal.store');
    Route::get('/create', [GoalController::class, 'create'])->name('goal.create');
    Route::get('/edit/{id}', [GoalController::class, 'edit'])->name('goal.edit');
    Route::put('/update/{id}', [GoalController::class, 'update'])->name('goal.update');
    Route::get('/delete/{id}', [GoalController::class, 'destroy'])->name('goal.delete');
});

Route::prefix('/transactions')->group(function () {
    Route::get('/all', [TransactionController::class, 'index'])->name('transaction.index');
});

Route::prefix('/settings')->group(function () {
    Route::get('/all', [SettingController::class, 'index'])->name('setting.index');
});