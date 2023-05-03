<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maternitypregnants\MaternityPregnantController;
use App\Http\Controllers\maternitypatients\MaternityPatientController;
use App\Http\Controllers\pregnantreports\PregnantReportContoller;
use App\Http\Controllers\maternityattendances\MaternityAttendancesController;
use App\Http\Controllers\complications\ComplicationsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('all/patients',[MaternityPatientController::class,'allPatients']);
Route::get('patient/register',[MaternityPatientController::class,'registerPage']);
Route::post('patient/register',[MaternityPatientController::class,'storePatient']);

Route::get('maternitypregnant',[MaternityPregnantController::class,'getpage']);
Route::post('register/maternity/pregnant',[MaternityPregnantController::class,'store']);

Route::get('reports',[PregnantReportContoller::class,'getReports']);


// attendence
Route::post('maternity/attendence',[MaternityAttendancesController::class,'store']);

//complication
Route::get('add/complication',[ComplicationsController::class,'getAddComplication']);
Route::post('add/complication',[ComplicationsController::class,'store']);

Route::get('all/complication',[ComplicationsController::class,'getAllComplication']);
Route::post('add/sub',[ComplicationsController::class,'storeSubComplication']);
Route::post('add/pregnant/complication',[ComplicationsController::class,'storePregnantComplication']);





Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('home', function () {
    return view('pages.dashboard');
})->name('home');