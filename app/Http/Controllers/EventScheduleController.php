<?php

namespace App\Http\Controllers;

use App\Models\EventSchedule;
use App\Http\Requests\StoreEventScheduleRequest;
use App\Http\Requests\UpdateEventScheduleRequest;

class EventScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('couplespages.event-schedule.index');
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
    public function store(StoreEventScheduleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EventSchedule $eventSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventSchedule $eventSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventScheduleRequest $request, EventSchedule $eventSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventSchedule $eventSchedule)
    {
        //
    }
}
