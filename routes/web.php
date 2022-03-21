<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Teacher\HomeController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Teacher\LoginController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\TeacherRegistration;
use App\Http\Controllers\Admin\StudentProfileSchedule;
use App\Http\Controllers\Admin\TeachersDashController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\ForgotPasswordController;

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
    return view('welcome');
});
Route::get('/download/{id}', [App\Http\Controllers\HomeController::class, 'download'])->name('download');
Route::get('/download/student/{id}', [App\Http\Controllers\Admin\ScheduleController::class, 'downloadSched'])->name('admin.schedule.download');


Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes(['verify' => true]);
    /**
     *  Student Routes
     */
    Route::middleware('auth')->group(function(){
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    });
    /**
     *  Admin Routes
     */
    Route::namespace('admin')->prefix('admin')->group( function(){
        Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');

        Route::middleware('auth:admin')->group(function(){
            Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
            Route::post('/store/schedule/{id}', [App\Http\Controllers\Admin\HomeController::class, 'stores'])->name('admin.store');
            Route::post('/user/update/{id}', [App\Http\Controllers\Admin\HomeController::class, 'updateUser'])->name('admin.update');
            Route::post('/update/sched/{id}', [App\Http\Controllers\Admin\ScheduleController::class, 'update'])->name('admin.update');

            Route::get('/schedule/profile/{id}', [App\Http\Controllers\Admin\StudentProfileSchedule::class, 'index'])->name('admin.schedule.profile');
            Route::post('/schedule/update/{id}', [App\Http\Controllers\Admin\StudentProfileSchedule::class, 'update'])->name('admin.schedule.update.profile');

            Route::get('/schedule', [App\Http\Controllers\Admin\ScheduleController::class, 'index'])->name('admin.schedule');
            Route::get('/teacher/register', [App\Http\Controllers\Admin\TeacherRegistration::class, 'index'])->name('admin.schedule');
            Route::post('/teacher/store', [App\Http\Controllers\Admin\TeacherRegistration::class, 'store'])->name('admin.teacher.register');
            Route::get('/teachers/data', [App\Http\Controllers\Admin\TeachersDashController::class, 'index'])->name('admin.teacher');
            Route::get('/teachers/delete/{id}', [App\Http\Controllers\Admin\TeachersDashController::class, 'destroy'])->name('admin.teacher');
            Route::post('/teachers/update/{id}', [App\Http\Controllers\Admin\TeachersDashController::class, 'update'])->name('admin.teacher');
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\HomeController::class, 'destroy'])->name('admin.remove');
            Route::get('/register', [App\Http\Controllers\Admin\StudentController::class, 'index'])->name('admin.register');
            Route::post('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');
        });
    });
    /**
     *  Teacher Routes
     */
    Route::namespace('teacher')->prefix('teacher')->group( function(){
        Route::get('/login', [App\Http\Controllers\Teacher\LoginController::class, 'showLoginForm'])->name('teacher.login');
        Route::post('/login', [App\Http\Controllers\Teacher\LoginController::class, 'login'])->name('teacher.login');
        Route::middleware('auth:teacher')->group(function(){
            Route::get('/home', [App\Http\Controllers\Teacher\HomeController::class, 'index'])->name('teacher.home');
            Route::post('/schedule/store/{id}', [App\Http\Controllers\Teacher\DashboardController::class, 'store'])->name('teacher.schedule');
            Route::get('/dashboard', [App\Http\Controllers\Teacher\DashboardController::class, 'index'])->name('teacher.dashboard');
            Route::post('/dashboard/store/{id}', [App\Http\Controllers\Teacher\DashboardController::class, 'update'])->name('teacher.update.dashboard');
            Route::post('/logout', [App\Http\Controllers\Teacher\LoginController::class, 'logout'])->name('teacher.logout');
        });
    });
});
