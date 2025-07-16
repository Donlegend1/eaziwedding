<?php

namespace App\Http\Controllers;

use App\Models\RSVPManager;
use App\Http\Requests\StoreRSVPManagerRequest;
use App\Http\Requests\UpdateRSVPManagerRequest;

class RSVPManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('couplespages.rsvp-manager.index');
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
    public function store(StoreRSVPManagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RSVPManager $rSVPManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RSVPManager $rSVPManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRSVPManagerRequest $request, RSVPManager $rSVPManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RSVPManager $rSVPManager)
    {
        //
    }
}
