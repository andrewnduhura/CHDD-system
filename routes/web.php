<?php
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/app',[App\Http\controllers\appointcontroller::class,'one']);
Route::get('/admin',[App\Http\controllers\AdminController::class,'first']);
Route::get('/my',[App\Http\controllers\owncontroller::class,'second']); 
Route::get('/prof',[App\Http\controllers\profilecontroller::class,'third']); 
Route::get('/rep',[App\Http\controllers\reportscontroller::class,'fourth']);
Route::get('/sms-notification', function () {
    return view('sms-notification');
});
Route::post('/send-sms-notification', function () {
    // Get the input values from the form
    $notification_time = request('notification_time');
    $notification_content = request('notification_content');
    $recipient_number = request('phone_number');
    // Twilio account credentials
    $account_sid = 'AC9690e9133085e0ce6f6afedb23dbc971';
    $auth_token = '105ad21f833ebce273cd8fa01ad36b5f';
    $twilio_number = '+12706122921';
    //$recipient_number = '+256773520461';

    // Create a new Twilio client
    $twilio = new Client($account_sid, $auth_token);

    // Schedule the SMS notification to be sent at the specified time
    $notification_date = date('Y-m-d').' '.$notification_time;
    $notificationTimestamp = strtotime($notification_date);

     $response = $twilio->messages->create(
        $recipient_number,
        [
            'from' => $twilio_number,
            'body' => $notification_content
            
        ],
        [
            'sendAt' => $notificationTimestamp
            ]
            
    ); dd($response);

    // Redirect the user back to the form
    return redirect('/sms-notification')->with('success', 'SMS notification scheduled successfully');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/schedule-reminder', 'app\Http\Controllers\ReminderController@scheduleReminder');


Route::view('/', 'reminder');

Route::get('/results/send', [ResultController::class, 'create'])->name('send_results');
Route::post('/results/send', [ResultController::class, 'send'])->name('send_results.send');

