<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reminder;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reminders = Reminder::all();

        return view('calendar', ['reminders' => $reminders]);
    }

    /**
     * fetches reminders for calendar.
     */
    public function fetchReminders()
    {
        //
       // $userId = Auth::user()->user_id;
       
       //placeholder
       $userId = 1;

        $reminders = Reminder::select('title_string', 'remind_year', 
        'remind_month', 'remind_day', 'remind_hour', 'remind_min')
        ->where('user_id', $userId)
        ->get()
        ->map(function ($reminder) {
            $year = $reminder->remind_year;
            $month = $reminder->remind_month;
            $day = $reminder->remind_day;
            $hour = $reminder->remind_hour;
            $minute = $reminder->remind_min;
    
            $datetime = Carbon::create($year, $month, $day, $hour, $minute);

            return [
                'title' => $reminder->title_string,
                'start' => $datetime->toDateString(),
                // FullCalendar treats events without an end time as zero-duration
            ];
            });

        return response()->json($reminders);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
