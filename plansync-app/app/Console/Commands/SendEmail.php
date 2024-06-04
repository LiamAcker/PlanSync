<?php

namespace App\Console\Commands;

use App\Models\Reminder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder emails every minute';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $current_datetime = Carbon::now()->startOfMinute();
        $reminders = Reminder::where('remind_datetime', $current_datetime)
        ->get();

        echo("Number of reminders: ". count($reminders));
    
        // foreach($reminders as $reminder){

        //     Mail::send('emails.view', ['data' => $reminder], function($message) use ($reminder) {
        //         $message->to($reminder->email, $reminder->name)
        //                 ->subject('Your Reminder: ' , $reminder->title_string);
        //     });
        
        //     $this->info('Email has been sent!');
        // }

          
      

        $reminder = [
            'email' => "linggartn2@gmail.com",
            'name' => "Linggar Nusantara",
            'title_string' => "The title",
            'description_string' => "The description"
        ];
        
        
        $reminder = Reminder::find($id);
        Mail::to($user->email)->send(new OrderMail($reminder, $user));
    
        $this->info('Email has been sent!');
        
        
    }
        //


        
    }
