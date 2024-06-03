<?php

namespace App\Console\Commands;

use App\Models\Reminder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
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
        $current_datetime = Carbon::now();
        
        $reminders = Reminder::find();
        //
        $data = [
            // Your email data here
        ];

        Mail::send('emails.view', $data, function($message) {
            $message->to('example@example.com', 'Recipient Name')
                    ->subject('Your Email Subject');
        });

        $this->info('Email has been sent!');
    }

        
    }
}
