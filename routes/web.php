<?php

use App\Http\Controllers\DiagnosisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DateController;

use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\PatientController;



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
Route::get('/diagnosis', function () {
    return view('admin');
});
