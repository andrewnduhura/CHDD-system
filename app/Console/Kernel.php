<?php

namespace App\Console;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Twilio\Rest\Client;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command('send:notification')->dailyAt('13:00');

        
        
    
        //$schedule->command('reminders:send')->everyMinute();
    
        
        
             /*   $schedule->call(function () {
                $currentTime = now();
                $scheduledTime = Carbon::parse('2023-05-12 10:00:00', 'Africa/Kampala'); // Replace with your desired scheduled time
        
                if ($currentTime->greaterThanOrEqualTo($scheduledTime)) {
                    // Your Twilio account SID, auth token, and Twilio phone number
                    $account_sid = env('AC9690e9133085e0ce6f6afedb23dbc971');
                    $auth_token = env('105ad21f833ebce273cd8fa01ad36b5f');
                    $twilio_number = env('+12706122921');
        
                    $twilio = new Client($account_sid, $auth_token);
        
                    $message = $twilio->messages->create(
                        '+1234567890', // recipient's phone number
                        [
                            'from' => $twilio_number,
                            'body' => 'Hello from Twilio!',
                        ]
                    );
        
                    // Log or perform any other actions after sending the notification
                    Log::info('Notification sent at '.$currentTime->toDateTimeString());
                }
            });*/
        
            
    

    $schedule->command('reminder:schedule')->everyMinute()->timezone('Africa/Kampala');


            
        
        



        // $schedule->command('inspire')->hourly();
    }

    protected $commands = [
        \App\Console\Commands\ReminderScheduleCommand::class,
    ];
    /*
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
