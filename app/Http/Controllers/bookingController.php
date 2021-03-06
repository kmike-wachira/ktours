<?php

namespace App\Http\Controllers;
use App\events,App\eventVenues,App\bookings;
use App\newBooking;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function me(){
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'no_attending'=>'required',
            'price'=>'required',
            'id'=>'required',
            'onarrival'=>'required'
        ]);
        $booking = new newBooking();
        $user = auth()->user();
        $booking->booked_by=$user->id;
        $booking->event_id=$request->id;
        $booking->price=$request->price;
        $booking->expected_people=$request->no_attending;
        $booking->payment=$request->onarrival;
        $booking->save();
        return redirect()->route('show',$request->id)->with('success',"event booked succcesfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=events::find($id);
        // create variable pos to hold the value of event event id
        $pos=$event->venue;
        // get data from events venues table where id  is equals $pos
        $eventid=eventVenues::find($pos);
        // get data from activities table where event id =$id  using DB
        $eventname=DB::table('activites')->select('name')
        ->join('event_activities','event_activities.activity_id', '=', 'activites.id')        
        ->where('event_activities.event_id',$id )->get();     

        return view('newbook',compact('event','eventid','eventname'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
