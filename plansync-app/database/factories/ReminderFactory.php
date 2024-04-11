<?php

namespace Database\Factories;

use App\Models\Reminder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reminder>
 */
class ReminderFactory extends Factory
{
    protected $model = Reminder::class;

    public function definition()
    {
        return [
            'reminder_list_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 5),
            'title_string' => $this->faker->sentence,
            'description_string' => $this->faker->paragraph,
            'attachment_id' => null,
            'repeat_category' => $this->faker->randomElement(['Year', 'Month', 'Day']),
            'remind_year' => '2024',
            'remind_month' => '4',
            'remind_day' => strval(rand(15, 30)),
            'remind_hour' => strval(rand(0, 23)),
            'remind_min' => strval(rand(0, 59)),
            'priority_category' => $this->faker->randomElement(['Low', 'Medium', 'High']),
        ];
    }
}
