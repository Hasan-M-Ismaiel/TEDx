<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speakers = Speaker::all();

        return view('admin.speakers.index', [
            'speakers' => $speakers,
            'page' => 'Speakers List'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $speakers = Speaker::all();
        $events = Event::all();

        return view('admin.speakers.create', [
            'speakers' => $speakers,
            'events' => $events,
            'page' => 'Creating speaker',
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
    public function show(Speaker $speaker)
    {
        return view('admin.speakers.show', [
            'page' => 'Showing Speaker',
            'speaker' => $speaker,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speaker $speaker)
    {
        $events = Event::all();
        $currentEvent = $speaker->events()->first();

        return view('admin.speakers.edit', [
            'speaker' => $speaker,
            'events' => $events,
            'currentEvent' => $currentEvent,
            'page' => 'Edit speaker'
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
