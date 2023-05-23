<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberrsController;
//use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\GraphController;

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
    //return redirect('about');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/user', function ($name) {
//     return view('user',['user'=>$name]);
// });


Route::view("contact", 'contact' );
//Route::view("user","user");
//controllers (part of user.blade //<!-- <h1> Hello {{$name}} </h1>  -->)
//Route::get("user/{name}",[UsersController::class,'loadView'] );

//if and for loop
//Route::get("user/{name}",[UsersController::class,'viewload'] ); 
//@if($user =="jonah")
//<h3> Hi {{$user}}</h3>

//Route::get("users","Users@index" );
//Route::get("users", [Users::class, 'index'] );
//Route::get("users/{user}", [Users::class,'index']);

Route::post("form", [FormController::class, 'getData']);
Route::view("login","form");

//Middleware up to the next comment
Route::view("home","home");
Route::view("noaccess","noaccess");

Route::group(['middleware' => ['protectedPage']],function(){
    Route::view('home','home');
    Route::get('/', function () {
        return view('welcome');
        //return redirect('about');
    });

});

//Database and laravel
Route::get('database',[DatabaseController::class ,'index']);

//Modeller. Model name should be the same as table name by mapping
Route::get('model', [UsersController::class ,'getData']);

Route::get("client", [ClientController::class, 'index']);

//Route::method_name('users',[FormController::class, " testRequest"]);

//report sums, averages
Route::get('report',[MemberController::class, 'operations']);

//list
//Route::get('chart',[ChartController::class, 'show']);
Route::get('list',[MemberrsController::class, 'show']);
Route::get('delete/{id}',[MemberrsController::class, 'delete']);
Route::get('edit/{id}',[MemberrsController::class, 'showData']);

//Queries
//Route::get('chart',[ChartsController::class, 'show']);
//Route::get('chart',[PatientsController::class, 'viewChart']);

Route::get('chart', [PatientController::class,'chart'])->name('patients.chart');


Route::get('range', [PatientController::class,'showDateRangeForm'])->name('patients.chart');

//Route::view("form","date-range");

Route::get('pie',[AdminController::class, 'pieChart']);

// routes/web.php

//Route::get('graphs', 'PatientGraphController@index')->name('patient.graphs');

// routes/web.php

//Route::post('graphs', 'PatientGraphController@show')->name('patient.graphs.show');

//Dates Form
//Route::view("dates","date-selection");

//Route::get('dates', [DateController::class,'graph']);
//Route::match(['GET','POST'],'dates', [DateController::class,'showPatientCount'])->name('fetch-graph-data');
//Route::post('graph', [DateController::class,'fetchGraphData'])->name('fetch-graph-data');
//->name('dates')

Route::get('dates', [DateController::class, 'graph'])->name('dates.form');
Route::post('dates/submit', [DateController::class, 'showPatientCount'])->name('dates.submit');
Route::get('dates/graph', [DateController::class, 'generateGraph'])->name('dates.graph');

