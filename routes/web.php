<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maternitypregnants\MaternityPregnantController;
use App\Http\Controllers\maternitypatients\MaternityPatientController;
use App\Http\Controllers\pregnantreports\PregnantReportContoller;
use App\Http\Controllers\maternityattendances\MaternityAttendancesController;
use App\Http\Controllers\complications\ComplicationsController;
use App\Http\Controllers\users\UsersController;
use App\Http\Controllers\specializations\SpecializationsController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware("auth")->group(function(){
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

//users
Route::get('all/users',[UsersController::class,'getAllUsers']);
Route::post('delete',[UsersController::class,'delete']);
Route::post('all/users',[UsersController::class,'store']);

//users specialization
Route::post('add/user/specialization',[UsersController::class,'addUserSpecialization']);

Route::post('logout',[UsersController::class,'logout']);

Route::get('home', function () {
    return view('pages.dashboard');
})->name('home');

//reply-report
Route::post('reply/report',[PregnantReportContoller::class,'storeReply']);
Route::get('view/replay/{id}',[PregnantReportContoller::class,'viewReply']);

//Specialization
Route::post('add/specialization',[SpecializationsController::class,'store']);
Route::get('add/specialization',[SpecializationsController::class,'addSpecialization']);


});






//user login
Route::post('login',[UsersController::class,'login']);
Route::get('/', function () {
    return view('auth.login');
})->name('login');