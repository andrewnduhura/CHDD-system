<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\Reminder;

class ReminderController extends Controller
{
    public function scheduleReminder(Request $request)
{
    $phoneNumber = $request->input('phone');
    $message = $request->input('message');
    $scheduledTime = $request->input('time');

    $reminder = new Reminder();
    $reminder->phone_number = $phoneNumber;
    $reminder->message = $message;
    $reminder->scheduled_time = $scheduledTime;
    $reminder->save();

    return 'Reminder scheduled successfully!';
}

}
