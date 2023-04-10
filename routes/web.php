<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maternitypregnants\MaternityPregnantController;
use App\Http\Controllers\maternitypatients\MaternityPatientController;

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

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('home', function () {
    return view('pages.dashboard');
})->name('home');
