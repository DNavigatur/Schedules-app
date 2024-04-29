<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\GuardController;
use App\Http\Controllers\LocationController;

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
    return view('welcome');
});


// Schedule
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule-manage');
Route::post('/schedule', [ScheduleController::class, 'store'])->name('schedule-add');
Route::delete('/schedule', [ScheduleController::class, 'delete'])->name('schedule-delete');
Route::get('/schedule/{email}', [ScheduleController::class, 'show'])->name('schedule-show');
// Guard
Route::get('/guard', [GuardController::class, 'index'])->name('guard-manage');
Route::post('/guard', [GuardController::class, 'store'])->name('guard-add');
Route::delete('/guard', [GuardController::class, 'delete'])->name('guard-delete');
// Location
Route::get('/location', [LocationController::class,'index'])->name('location-manage');
Route::post('/location', [LocationController::class,'store'])->name('location-add');
Route::delete('/location', [LocationController::class,'delete'])->name('location-delete');
