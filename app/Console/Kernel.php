<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\SendNotificationMail;
use Carbon\Carbon;
use App\Console\Commands\sendMailDaily;
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
        //  //$schedule->command('inspire')->daily();
        //  $now = Carbon::now();
        //  $month = $now->format('T');
        //  $year = $now->format('yy');
 
        //  $fourthFridayMonthly = new Carbon('Every Tuesday of ' . $month . ' ' . $year);
 
        // $schedule->job(new SendNotificationMail)->dailyAt('14:35');
        
       $schedule->command('daily:mail_send')->daily()->at('06:00');
    }

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
