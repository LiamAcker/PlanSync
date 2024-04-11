<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReminderList extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // Primary key
    public $timestamps = true; // Disable timestamps (created_at and updated_at)

    // Define the fillable attributes
    protected $fillable = [
        'user_id',
        'title_string',
        'color_hex_string'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'reminder_list_id');
    }
    
    public function reminders() 
    {
        return $this->hasMany(Reminder::class, 'reminder_list_id');
    }

}
