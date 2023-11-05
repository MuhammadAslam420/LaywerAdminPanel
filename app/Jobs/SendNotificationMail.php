<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\AutomaticMail;
use App\Models\User;
use App\Models\Petition;
use App\Models\Hiring;
use Carbon\Carbon;


class SendNotificationMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $details = [
            'title' => 'Advocate Associate Case Scheduler Notification',
            'body' => 'You will receive a newsletter every Fourth Friday of the month'

        ];
        $hirings=Hiring::where('next_hiring_date','==',today())->get();
        
        foreach($hirings as $hiring)
        {
            $petition=Petition::where('id',$hiring->petition_id)->first();
            $user=User::where('id',$petition->user_id)->get(); 
            Mail::to($user->email)->send(new AutomaticMail($details));
        }
       // Mail::to($user->email)->send(new AutomaticMail($details));
        
    }
}
