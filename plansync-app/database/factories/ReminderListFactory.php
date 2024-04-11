<?php

namespace Database\Factories;

use App\Models\ReminderList;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReminderList>
 */
class ReminderListFactory extends Factory
{
    protected $model = ReminderList::class;

    public function definition()
    {
        return [
            'user_id' => rand(1, 3),
            'title_string' => $this->faker->sentence,
            'color_hex_string' => $this->faker->hexColor(),
        ];
    }
}