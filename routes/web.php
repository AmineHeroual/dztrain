<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\MessageController;

use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\TrainerAdminController;
use App\Http\Controllers\Admin\CourseAdminController;
use App\Http\Controllers\Admin\StudentAdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('Front')->group(function(){
    Route::get('/', [HomeController::class,'index'])->name('front.homepage');
    Route::get('/category/{id}', [CourseController::class,'index'])->name('front.coursespage');
    Route::get('/category/{id}/course/{courseId}', [CourseController::class,'show'])->name('front.showpage');
    Route::get('/contact', [ContactController::class,'index'])->name('front.contact');
    Route::post('/message/newsletter', [MessageController::class,'newsletter'])->name('front.message.newsletter');
    Route::post('/message/contact', [MessageController::class,'contact'])->name('front.message.contact');
    Route::post('/message/enroll', [MessageController::class,'enroll'])->name('front.message.enroll');

});

Route::namespace('Admin')->group(function(){

    Route::get('/dashboard/login', [AuthAdminController::class,'login'])->name('admin.login');
    Route::post('/dashboard/do-login', [AuthAdminController::class,'doLogin'])->name('admin.doLogin');

    Route::middleware('adminAuth:admin')->group(function(){
        Route::get('/dashboard/logout', [AuthAdminController::class,'logout'])->name('admin.logout');
        Route::get('/dashboard', [HomeAdminController::class,'index'])->name('admin.index');

        Route::get('/dashboard/categories', [CategoryAdminController::class,'index'])->name('admin.categories.index');
        Route::get('/dashboard/categories/create', [CategoryAdminController::class,'create'])->name('admin.categories.create');
        Route::post('/dashboard/categories/store', [CategoryAdminController::class,'store'])->name('admin.categories.store');
        Route::get('/dashboard/categories/edit/{id}', [CategoryAdminController::class,'edit'])->name('admin.categories.edit');
        Route::post('/dashboard/categories/update', [CategoryAdminController::class,'update'])->name('admin.categories.update');
        Route::get('/dashboard/categories/delete/{id}', [CategoryAdminController::class,'delete'])->name('admin.categories.delete');



        Route::get('/dashboard/trainers', [TrainerAdminController::class,'index'])->name('admin.trainers.index');
        Route::get('/dashboard/trainers/create', [TrainerAdminController::class,'create'])->name('admin.trainers.create');
        Route::post('/dashboard/trainers/store', [TrainerAdminController::class,'store'])->name('admin.trainers.store');
        Route::get('/dashboard/trainers/edit/{id}', [TrainerAdminController::class,'edit'])->name('admin.trainers.edit');
        Route::post('/dashboard/trainers/update', [TrainerAdminController::class,'update'])->name('admin.trainers.update');
        Route::get('/dashboard/trainers/delete/{id}', [TrainerAdminController::class,'delete'])->name('admin.trainers.delete');


        Route::get('/dashboard/courses', [CourseAdminController::class,'index'])->name('admin.courses.index');
        Route::get('/dashboard/courses/create', [CourseAdminController::class,'create'])->name('admin.courses.create');
        Route::post('/dashboard/courses/store', [CourseAdminController::class,'store'])->name('admin.courses.store');
        Route::get('/dashboard/courses/edit/{id}', [CourseAdminController::class,'edit'])->name('admin.courses.edit');
        Route::post('/dashboard/courses/update', [CourseAdminController::class,'update'])->name('admin.courses.update');
        Route::get('/dashboard/courses/delete/{id}', [CourseAdminController::class,'delete'])->name('admin.courses.delete');


        Route::get('/dashboard/students', [StudentAdminController::class,'index'])->name('admin.students.index');
        Route::get('/dashboard/students/create', [StudentAdminController::class,'create'])->name('admin.students.create');
        Route::post('/dashboard/students/store', [StudentAdminController::class,'store'])->name('admin.students.store');
        Route::get('/dashboard/students/edit/{id}', [StudentAdminController::class,'edit'])->name('admin.students.edit');
        Route::post('/dashboard/students/update', [StudentAdminController::class,'update'])->name('admin.students.update');
        Route::get('/dashboard/students/delete/{id}', [StudentAdminController::class,'delete'])->name('admin.students.delete');
        Route::get('/dashboard/students/showCourses/{id}', [StudentAdminController::class,'showCourses'])->name('admin.students.showCourses');

        Route::get('/dashboard/students/{id}/courses/{course_id}/approve', [StudentAdminController::class,'approve'])->name('admin.students.approve');
        Route::get('/dashboard/students/{id}/courses/{course_id}/reject', [StudentAdminController::class,'reject'])->name('admin.students.reject');
        Route::get('/dashboard/students/{id}/add-to-course', [StudentAdminController::class,'addCourse'])->name('admin.students.addCourse');
        Route::post('/dashboard/students/{id}/store-course', [StudentAdminController::class,'storeCourse'])->name('admin.students.storeCourse');
    });
});
