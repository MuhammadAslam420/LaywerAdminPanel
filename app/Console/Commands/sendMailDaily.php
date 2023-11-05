<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\AutomaticMail;
use App\Models\Petition;
use App\Models\User;
use App\Models\Hiring;
use Carbon\Carbon;

class sendMailDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:mail_send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an daily email to all the users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $details = [
            'title' => 'Advocate Associate Case Scheduler Notification',
            'body' => 'Please visit Your Advocate account. One of your legal case hiring today.'

        ];
        $hirings=Hiring::where('next_hiring_date',today())->get();
        
        foreach($hirings as $hiring)
        {
            $petition=Petition::where('id',$hiring->petition_id)->first();
            $user=User::where('id',$petition->user_id)->first(); 
            Mail::to($user->email)->send(new AutomaticMail($details));
        }
    }
}
