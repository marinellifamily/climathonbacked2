<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Activity::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->sponsors;
        $activity = Activity::create([
            'name' => $request->name,
            'cost' => $request->cost,
            'date' => $request->date,
            'description' => $request->description,
            'reason' => $request->reason,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'address' => $request->address,
            'hour' => $request->hour
        ]);
        // return $activity;
        // return $activity->id;
        foreach($request->sponsors as $sponsor) {
            Sponsor::create(['activity_id' => $activity->id, 'name'=> $sponsor['name']]);
        }
        $activity->sponsors;
        return $activity;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        $activity->sponsors;
        return $activity;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
