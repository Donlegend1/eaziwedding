<?php

namespace App\Http\Controllers;

use App\Models\Customization;
use App\Http\Requests\StoreCustomizationRequest;
use App\Http\Requests\UpdateCustomizationRequest;

class CustomizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('couplespages.customization.index');
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
    public function store(StoreCustomizationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customization $customization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customization $customization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomizationRequest $request, Customization $customization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customization $customization)
    {
        //
    }
}
