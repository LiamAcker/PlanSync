<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // Primary key
    public $timestamps = true; // Disable timestamps (created_at and updated_at)

    // Define the fillable attributes
    protected $fillable = [
        'list_id',
        'user_id',
        'title_string',
        'description_string',
        'attachment_id',
        'repeat_category',
        'remind_datetime',
        'remind_year',
        'remind_month',
        'remind_day',
        'remind_hour',
        'remind_min',
        'priority_category',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }

    public function reminder_list()
    {
        return $this->belongsTo(ReminderList::class, 'reminder_list_id');

    }


}
