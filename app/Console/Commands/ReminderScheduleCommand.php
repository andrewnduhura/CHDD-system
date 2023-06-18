<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Twilio\Rest\Client;
use App\Models\Reminder;

class ReminderScheduleCommand extends Command
{
    protected $signature = 'reminder:schedule';
    protected $description = 'Send scheduled reminders';

    public function handle()
    {
        $twilioClient = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));

        // Fetch reminders scheduled for the current time or earlier
        //$reminders = Reminder::where('scheduled_time', '<=', now())->get();
        $reminders = \App\Models\Reminder::where('scheduled_time', '<=', now())->get();


        foreach ($reminders as $reminder) {
            $phoneNumber = $reminder->phone_number;
            $message = $reminder->message;

            // Send SMS reminder using Twilio
            $twilioClient->messages->create($phoneNumber, [
                'from' => env('TWILIO_PHONE_NUMBER'),
                'body' => $message
            ]);

            // Delete the reminder after sending it
            $reminder->delete();
        }
    }
}
