<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();

        return view('admin.members.index', [
            'members' => $members,
            'page' => 'members List'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = Member::all();
        $events = Event::all();

        return view('admin.members.create', [
            'members' => $members,
            'events' => $events,
            'page' => 'Creating member',
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
    public function show(Member $member)
    {
        return view('admin.members.show', [
            'page' => 'Showing Member',
            'member' => $member,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        $events = Event::all();
        $currentEvent = $member->events()->first();

        return view('admin.speakers.edit', [
            'member' => $member,
            'events' => $events,
            'currentEvent' => $currentEvent,
            'page' => 'Edit member'
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
