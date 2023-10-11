<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',[App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
Route::get('/add-patient',[App\Http\Controllers\DashboardController::class,'add_patient'])->name('patient.add');
Route::get('/list-patient',[App\Http\Controllers\DashboardController::class,'list_patient'])->name('patient.list');
Route::get('/add-appointment',[App\Http\Controllers\DashboardController::class,'add_appointment'])->name('appointment.add');
Route::get('/list-appointment',[App\Http\Controllers\DashboardController::class,'list_appointment'])->name('appointment.list');
Route::get('/list-doctors-by-schedule',[App\Http\Controllers\DashboardController::class,'list_doctors_by_schedule'])->name('doctor.ondute');
Route::get('/list-doctors',[App\Http\Controllers\DashboardController::class,'list_doctors'])->name('doctor.list');
Route::get('/list-departments',[App\Http\Controllers\DashboardController::class,'department_list'])->name('department.list');