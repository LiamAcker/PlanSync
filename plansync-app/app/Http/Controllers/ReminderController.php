<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reminder;
use DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ReminderController extends Controller
{



    public function create()
    {
        return view('add-reminder'); # create reminder page
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $request->validate([
            'reminder_name' => 'required',
            'description' => 'required',
            'repeat_category' => 'required',
            'datetime' => 'required',
            'priority_category' => 'required',
        ]);
        
        

        $reminder = new Reminder;

        $datetime = new DateTime($request->datetime);

        $reminder->reminder_list_id = 1;
        $reminder->user_id = 7;
        $reminder->title_string = $request->reminder_name;
        $reminder->description_string = $request->description;
        $reminder->repeat_category = $request->repeat_category;
        $reminder->remind_datetime = $request->datetime;
        $reminder->remind_year = $datetime->format('Y');
        $reminder->remind_month = $datetime->format('m');
        $reminder->remind_day = $datetime->format('d');
        $reminder->remind_hour = $datetime->format('H');
        $reminder->remind_min = $datetime->format('i');
        $reminder->priority_category = $request->priority_category;

        $reminder->save();

        return redirect('calendar'); # calendar page
        return redirect()->route('reminders.index')->with('success', 'Reminder added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        //
        $reminder = Reminder::find($id);

        return view('edit-reminder', ['reminder' => $reminder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
        $reminder = Reminder::find($id);
        
        $datetime = new DateTime($request->datetime);
        
        $reminder->reminder_list_id = 1;
        $reminder->user_id = 7;
        $reminder->title_string = $request->reminder_name;
        $reminder->description_string = $request->description;
        $reminder->repeat_category = $request->repeat_category;
        $reminder->remind_datetime = $request->datetime;
        $reminder->remind_year = $datetime->format('Y');
        $reminder->remind_month = $datetime->format('m');
        $reminder->remind_day = $datetime->format('d');
        $reminder->remind_hour = $datetime->format('H');
        $reminder->remind_min = $datetime->format('i');
        $reminder->priority_category = $request->priority_category;


        $reminder->save();

        return redirect('calendar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        //
        $reminder = Reminder::find($id);
        $reminder->delete();

        return redirect('calendar');
    }

    
}
