<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Member;
use App\Models\Register;
use App\Models\Speaker;
use App\Models\Sponser;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with('sponsers','speakers', 'volunteers', 'registers', 'members')->get();

        return view('admin.events.index', [
            'events' => $events,
            'page' => 'events List'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $speakers = Speaker::all();
        $sponsers = Sponser::all();
        $volunteers = Volunteer::all();
        $members = Member::all();
        $registers = Register::all();

        return view('admin.events.create', [
            'speakers' => $speakers,
            'sponsers' => $sponsers,
            'volunteers' => $volunteers,
            'members' => $members,
            'registers' => $registers,
            'page' => 'Creating event',
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
    public function show(Event $event)
    {
        $speakers = Speaker::all();
        $sponsers = Sponser::all();
        $volunteers = Volunteer::all();
        $members = Member::all();
        $registers = Register::all();

        return view('admin.events.show', [
            'event' => $event,
            'speakers' => $speakers,
            'sponsers' => $sponsers,
            'volunteers' => $volunteers,
            'members' => $members,
            'registers' => $registers,
            'page' => 'Showing event',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
