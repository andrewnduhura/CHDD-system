<?php

namespace App\Http\Controllers;
use Twilio\Rest\Client;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SmsNotificationController extends Controller
{
    public function sendSmsNotification(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            'phone_number' => 'required',
            'notification_time' => 'required',
            'notification_content' => 'required',
        ]);

        // Get the form inputs
        $phoneNumber = $validatedData['phone_number'];
        $notificationTime = $validatedData['notification_time'];
        $notificationContent = $validatedData['notification_content'];

        // Convert the notification time to a DateTime object
        $scheduledDateTime = Carbon::createFromFormat('H:i', $notificationTime);

        // Calculate the difference between the current time and the notification time
        $timeDifference = now()->diffInSeconds($scheduledDateTime, false);

        // Initialize Twilio credentials
        $accountSid = env('AC9690e9133085e0ce6f6afedb23dbc971');
        $authToken = env('105ad21f833ebce273cd8fa01ad36b5f');
        $twilioNumber = env('+12706122921');

        // Create a new Twilio client
        $twilio = new Client($accountSid, $authToken);

        // Schedule the job to be executed after the time difference
        SendSmsNotificationJob::dispatch($twilio, $twilioNumber, $phoneNumber, $notificationContent)->delay($timeDifference);

        // Redirect back with a success message
        return back()->with('success', 'SMS notification has been scheduled successfully.');
    }
}
   



