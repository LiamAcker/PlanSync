<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Reminder;
use App\Models\ReminderList;
use GuzzleHttp\Promise\Create;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory(6)->create();
        // ReminderList::factory(3)->create();
        // Reminder::factory(30)->create();
    
        User::factory(3)->create()->each(function ($user) {
            $user->reminder_lists()->saveMany(
                ReminderList::factory(2)->create()->each(function ($reminderlist) use ($user) {
                    $reminderlist->reminders()->saveMany(
                        Reminder::factory(rand(1, 5))->create(['user_id' => $user->id])
                    );
                })
            );
        });
        

        
    }
}
