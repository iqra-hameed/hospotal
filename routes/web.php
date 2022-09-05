<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LabesController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\RefrelController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\RegisterationController;
use App\Model\Lead;
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

Route::get('/',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'create']);
Route::get('/create_account',[LoginController::class,'created']);
Route::get('dataTable',[LoginController::class,'dataTable']);
Route::get('BasiecForm',[LoginController::class,'BasiecForm']);
//LEAD RECORDS PATHS
Route::get('leads',[LeadController::class,'create'])->name('lead.leads');
Route::post('store',[LeadController::class,'store'])->name('store');
Route::get('lead_index',[LeadController::class,'index'])->name('lead.index');
Route::get('refrels/{id}',[LeadController::class,'refrel'])->name('refrels');
//Batch
Route::get('batchshow',[BatchController::class,'index'])->name('batch.index');
Route::get('batch',[BatchController::class,'create'])->name('batch.create');
Route::post('storing',[BatchController::class,'store'])->name('storing');
//ENROLLMENTS
Route::get('enrollments',[EnrollmentController::class,'index'])->name('enrollment.enrollments');
Route::get('enroll_create',[EnrollmentController::class,'create'])->name('enrollment.enroll_create');
Route::get('refrels/{id}',[EnrollmentController::class,'refrel'])->name('refrels');
Route::get('course/{id}',[EnrollmentController::class,'course'])->name('courses');
Route::get('batch/{id}',[EnrollmentController::class,'batch'])->name('batches');
Route::get('lead/{id}',[EnrollmentController::class,'lead'])->name('leads');
Route::post('sav',[EnrollmentController::class,'store'])->name('saving');
//COURSES CREATE
Route::get('courses',[CourseController::class,'create'])->name('course.courses');
Route::get('courses_index',[CourseController::class,'index'])->name('course.course_index');
Route::post('saved',[CourseController::class,'store'])->name('saved');
//REFREL ROUTE
Route::get('referal',[RefrelController::class,'index'])->name('refrel.referal');
Route::post('save',[RefrelController::class,'store'])->name('save');
Route::get('referal_index',[RefrelController::class,'create'])->name('refrel.refrel_create');


Route::get('/forget_password',[LoginController::class,'forget']);
//lab route
Route::get('add/Lab',[LabesController::class,'index']);
Route::post('add/Lab',[LabesController::class,'store']);
Route::get('Labes/show',[LabesController::class,'show']);
Route::get('Edit/Lab/{id}',[LabesController::class,'edit']);
Route::get('Delete/Lab/{id}',[LabesController::class,'destroy']);
Route::post('update/Lab/{id}',[LabesController::class,'update']);
//register
Route::get('registeration',[RegisterationController::class,'create'])->name('registeration');
Route::post('data-save',[RegisterationController::class,'store'])->name('data-save');
Route::get('lead/{id}',[RegisterationController::class,'lead'])->name('leads');
Route::post('data', [RegisterationController::class, 'date']);
Route::post('/checkrecord',[RegisterationController::class, 'checkLeaddata']);
Route::post('/checkingrecord',[RegisterationController::class, 'checkBatchdata']);
Route::post('/checkedrecord',[RegisterationController::class, 'checkRefreldata']);
