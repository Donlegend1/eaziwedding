<?php

namespace App\Http\Controllers;

use App\Models\WeddingCard;
use App\Http\Requests\StoreWeddingCardRequest;
use App\Http\Requests\UpdateWeddingCardRequest;

class WeddingCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('couplespages.wedding-card.index');
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
    public function store(StoreWeddingCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WeddingCard $weddingCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WeddingCard $weddingCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWeddingCardRequest $request, WeddingCard $weddingCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WeddingCard $weddingCard)
    {
        //
    }
}
