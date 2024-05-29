<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reminder;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ReminderController extends Controller
{



    public function create()
    {
        return view('/'); # create reminder page
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): Redirector
    {
        //
        $reminder = new Reminder;
        $reminder->list_id = $request->list_id;
        $reminder->user_id = Auth::user()->user_id;
        $reminder->title_string = $request->title_string;
        $reminder->description_string = $request->description_string;
        $reminder->attachment_id = $request->attachment_id;
        $reminder->repeat_category = $request->repeat_category;
        $reminder->remind_year = $request->remind_year;
        $reminder->remind_month = $request->remind_month;
        $reminder->remind_day = $request->repeat_day;
        $reminder->remind_hour = $request->remind_hour;
        $reminder->remind_min = $request->remind_min;
        $reminder->priority_category = $request->priority_category;

        $reminder->save();

        return redirect('/'); # calendar page
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

        return view('/edit', compact($reminder));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): Redirector
    {
        //
        $reminder = Reminder::find($id);
        
        $reminder->list_id = $request->list_id;
        $reminder->title_string = $request->title_string;
        $reminder->description_string = $request->description_string;
        $reminder->attachment_id = $request->attachment_id;
        $reminder->repeat_category = $request->repeat_category;
        $reminder->remind_year = $request->remind_year;
        $reminder->remind_month = $request->remind_month;
        $reminder->remind_day = $request->repeat_day;
        $reminder->remind_hour = $request->remind_hour;
        $reminder->remind_min = $request->remind_min;
        $reminder->priority_category = $request->priority_category;

        $reminder->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): Redirector
    {
        //
        $reminder = Reminder::find($id);
        $reminder->delete();

        return redirect('/');
    }

    
}
