<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $volunteers = Volunteer::all();

        return view('admin.volunteers.index', [
            'volunteers' => $volunteers,
            'page' => 'Volunteers List'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $volunteers = Volunteer::all();
        $events = Event::all();

        return view('admin.volunteers.create', [
            'volunteers' => $volunteers,
            'events' => $events,
            'page' => 'Creating volunteer',
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
    public function show(Volunteer $volunteer)
    {
        return view('admin.volunteers.show', [
            'page' => 'Showing Volunteer',
            'volunteer' => $volunteer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteer $volunteer)
    {
        $events = Event::all();
        $currentEvent = $volunteer->events()->first();

        return view('admin.volunteers.edit', [
            'volunteer' => $volunteer,
            'events' => $events,
            'currentEvent' => $currentEvent,
            'page' => 'Edit volunteer'
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
