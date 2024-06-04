<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reminder;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DatePeriod;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\Auth;


class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('calendar');
    }

    /**
     * fetches reminders for calendar.
     */
    public function fetchReminders()
    {
        $userId = 7;

        $reminders = Reminder::select('id', 'title_string', 'description_string','repeat_category', 'remind_datetime','priority_category')
        ->where('user_id', $userId)
        ->get()
        ->flatMap(function ($reminder) {
            // $year = $reminder->remind_year;
            // $month = $reminder->remind_month;
            // $day = $reminder->remind_day;
            // $hour = $reminder->remind_hour;
            // $minute = $reminder->remind_min;
            $events = [];
            $startDate = Carbon::parse($reminder->remind_datetime); // Menggunakan Carbon untuk parsing tanggal
            $endDate = $startDate->copy()->addYears(2);

            // Set color based on priority
        //     $color = '';
        //     switch ($reminder->priority_category) {
        //         case 'Low':
        //             $color = 'green';
        //             break;
        //         case 'Medium':
        //             $color = 'yellow';
        //             break;
        //         case 'High':
        //             $color = 'red';
        //             break;
        //         default:
        //             $color = 'green';
        //             break;
        // }

        switch($reminder->repeat_category){
            case 'Daily':
                $interval = 'P1D'; // Interval harian
                break;
            case 'Monthly':
                $interval = 'P1M'; // Interval bulanan
                break;
            case 'Yearly':
                $interval = 'P1Y'; // Interval tahunan
                break;
            default:
                $interval = null;
                break;
        }

        // foreach (new DatePeriod($startDate, new DateInterval($interval), $endDate) as $date) {
        //     $events[] = [
        //         'id' => $reminder->id,
        //         'title' => $reminder->title_string,
        //         'description' => $reminder->description_string,
        //         'start' => $date->format('Y-m-d H:i:s'),
        //         'color' => $reminder->priority_category == 'High' ? 'red' : ($reminder->priority_category == 'Medium' ? 'yellow' : 'green')
        //     ];
        // }

        if ($interval) {
            foreach ($startDate->toPeriod($endDate, new DateInterval($interval)) as $date) {
                $events[] = [
                    'id' => $reminder->id,
                    'title' => $reminder->title_string,
                    'description' => $reminder->description_string,
                    'start' => $date->format('Y-m-d H:i:s'),
                    'color' => $reminder->priority_category == 'High' ? 'red' : ($reminder->priority_category == 'Medium' ? 'yellow' : 'green')
                ];
            }
        } else {
            $events[] = [
                'id' => $reminder->id,
                'title' => $reminder->title_string,
                'description' => $reminder->description_string,
                'start' => $startDate->format('Y-m-d H:i:s'),
                'color' => $reminder->priority_category == 'High' ? 'red' : ($reminder->priority_category == 'Medium' ? 'yellow' : 'green')
            ];
        }

        return $events;

       
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
