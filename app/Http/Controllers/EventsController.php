<?php

namespace App\Http\Controllers;

use App\activites;
use App\events;
use App\eventVenues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events= events::all();
        return view('index',compact('events'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get data from events table where id  is equals $id
        $event=events::find($id);
        // create variable pos to hold the value of event event id
        $pos=$event->venue;
        // get data from events venues table where id  is equals $pos
        $eventid=eventVenues::find($pos);
        // get data from activities table where event id =$id  using DB
        $eventname=DB::table('activites')->select('name')
        ->join('event_activities','event_activities.activity_id', '=', 'activites.id')        
        ->where('event_activities.event_id',$id )->get();
        //  return print_r($eventname);
        

        return view('events',compact('event','eventid','eventname'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
