<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Sponser;
use Illuminate\Http\Request;

class SponserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsers = Sponser::all();

        return view('admin.sponsers.index', [
            'sponsers' => $sponsers,
            'page' => 'Sponsers List'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sponsers = Sponser::all();
        $events = Event::all();

        return view('admin.sponsers.create', [
            'sponsers' => $sponsers,
            'events' => $events,
            'page' => 'Creating sponser',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponser $sponser)
    {
        return view('admin.sponsers.show', [
            'page' => 'Showing Sponser',
            'sponser' => $sponser,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sponser $sponser)
    {
        $events = Event::all();
        $currentEvent = $sponser->events()->first();

        return view('admin.sponsers.edit', [
            'sponser' => $sponser,
            'events' => $events,
            'currentEvent' => $currentEvent,
            'page' => 'Edit sponser'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
