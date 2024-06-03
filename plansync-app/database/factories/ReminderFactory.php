<?php

namespace Database\Factories;

use App\Models\Reminder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reminder>
 */
class ReminderFactory extends Factory
{
    protected $model = Reminder::class;

    public function definition()
    {   
        $day = strval(rand(15, 30));
        $hour = strval(rand(0, 23));
        $minute = strval(rand(0, 59));
        $datetime = Carbon::create('2024', '6', $day, $hour, $minute);
        return [
            'reminder_list_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 5),
            'title_string' => $this->faker->randomElement(['Exam', 'Assignment Deadline', 'Birthday', 'Deadline']),
            'description_string' => $this->faker->paragraph,
            'attachment_id' => null,
            'repeat_category' => $this->faker->randomElement(['Yearly', 'Monthly', 'Daily', 'No Repeat']),
            'remind_datetime' => $datetime,
            'remind_year' => '2024',
            'remind_month' => '6',
            'remind_day' => $day,
            'remind_hour' => $hour,
            'remind_min' => $minute,
            'priority_category' => $this->faker->randomElement(['Low', 'Medium', 'High']),
        ];
    }
}
