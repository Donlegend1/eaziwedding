<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use App\Http\Requests\StoreWeddingRequest;
use App\Http\Requests\UpdateWeddingRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $weddings = Wedding::all();
        return view('couplespages.wedding.index', compact('weddings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('couplespages.wedding.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreWeddingRequest $request)
    {
        $data = $request->validated();

        // Handle file upload (cover photo)
        if ($request->hasFile('cover_photo')) {
            $coverPhoto = $request->file('cover_photo');
            $filename = Str::uuid() . '.' . $coverPhoto->getClientOriginalExtension();
            $coverPhoto->move(public_path('uploads/weddings'), $filename);
            $data['cover_photo'] = 'uploads/weddings/' . $filename;
        }

        // Ensure the current authenticated user is the owner
        $data['user_id'] = auth()->id();

        // Generate slug from couple's names and wedding date
        $groom = Str::slug($data['groom_name']);
        $bride = Str::slug($data['bride_name']);
        $date = \Carbon\Carbon::parse($data['wedding_date'])->format('Y-m-d');
        $data['slug'] = "{$groom}-and-{$bride}-{$date}";

        // Create the wedding
        $wedding = Wedding::create($data);

        return redirect("/user/weddings")
            ->with('success', 'Wedding created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wedding $wedding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wedding $wedding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWeddingRequest $request, Wedding $wedding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wedding $wedding)
    {
        //
    }
}
