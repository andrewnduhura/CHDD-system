<?php
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\PatientController;


use App\Http\Controllers\ResultController;

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
// 1. Need to write descriptive urls
// 2. All URLs to be only accessed while logged in except Auth URLS
Route::get('/', function () {
    return view('welcome');
});

Route::get('/diagnose',[DiagnosisController::class, 'index4']);