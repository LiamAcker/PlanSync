<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ReminderList;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ReminderListController extends Controller
{
    //

    
    public function create()
    {
        return view('/'); # create reminder_list page
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
        $reminder_list = new ReminderList;
        $reminder_list->user_id = Auth::user()->user_id;
        $reminder_list->title_string = $request->title_string;
        $reminder_list->color_hex_string = $request->color_hex_string;

        $reminder_list->save();

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
        $reminder_list = ReminderList::find($id);

        return view('/edit', compact($reminder_list));
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

        $reminder_list = ReminderList::find($id);
        
        $reminder_list->user_id = Auth::user()->user_id;
        $reminder_list->title_string = $request->title_string;
        $reminder_list->color_hex_string = $request->color_hex_string;

        $reminder_list->save();

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
        $reminder_list = ReminderList::find($id);
        $reminder_list->delete();

        return redirect('/');
    }

    
}
