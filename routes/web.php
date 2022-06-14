<?php

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminSubjectController;
use App\Http\Controllers\AdminTeacherController;
use App\Http\Controllers\LoginStudentController;
use App\Http\Controllers\LoginTeacherController;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\DashboardSubjectController;

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

//Route with no Controller
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/choose', function () {
    return view('auth.choose', [
        "title" => "Choose"
    ]);
});

//Route for Auth
    //Auth Student
    Route::get('/loginstudent', [LoginStudentController::class,'index']);
    Route::post('/loginstudent', [LoginStudentController::class,'authenticate']);
    Route::post('/logoutstudent', [LoginStudentController::class,'logout']); 
    Route::get('/registerstudent', [StudentController::class,'create']);
    Route::post('/registerstudent', [StudentController::class,'store']);
    //Auth Teacher
    Route::get('/loginteacher', [LoginTeacherController::class,'index']);
    Route::post('/loginteacher', [LoginTeacherController::class,'authenticate']);
    Route::post('/logoutteacher', [LoginTeacherController::class,'logout']); 
    Route::get('/registerteacher', [TeacherController::class,'create']) ;
    Route::post('/registerteacher', [TeacherController::class,'store']);
    //Auth Admin
    Route::get('/loginadmin', [LoginAdminController::class,'index']);
    Route::post('/loginadmin', [LoginAdminController::class,'authenticate']);
    Route::post('/logoutadmin', [LoginAdminController::class,'logout']); 
    Route::get('/registeradmin', [AdminController::class,'create']) ;
    Route::post('/registeradmin', [AdminController::class,'store']);

//Route for Subject
Route::get('/subject', [SubjectController::class,'index']);
Route::get('/subject/{subject:slug}', [SubjectController::class,'show']);

//Route for Teacher
Route::get('/teacher', [TeacherController::class,'index']);

//Route for Teacher Dashboard
Route::get('/dashboardteacher', [TeacherController::class,'dashboardteacher']);
Route::resource('/dashboard/subjects', DashboardSubjectController::class);

//Route for Admin Dashboard
Route::get('/admin', [AdminController::class,'index']);
Route::resource('/admin/subjects', AdminSubjectController::class);
Route::resource('/admin/categories', AdminCategoriesController::class);
Route::resource('/admin/students', AdminStudentController::class);
Route::resource('/admin/teachers', AdminTeacherController::class);


