<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Models\Event;
use App\Models\Member;
use App\Models\Register;
use App\Models\Speaker;
use App\Models\Sponser;
use App\Models\TemporaryFile;
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
        $events = Event::with('sponsers', 'speakers', 'volunteers', 'registers', 'members')->get();

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
        return view('admin.events.create', [
            'page' => 'Creating event',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventCreateRequest $request)
    {

        $event = Event::create($request->validated());

        //image to the event
        $temporaryFile = TemporaryFile::where('folder', request()->image)->first();
        if ($temporaryFile) {
            $event->addMedia(storage_path('app/pictures/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
                ->toMediaCollection('events');

            rmdir(storage_path('app/pictures/tmp/' . $temporaryFile->folder));
            $temporaryFile->delete();
        }
        
        return redirect()->route('admin.eventCreated', ['event'=>$event]);
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
    public function edit(Event $event)
    {
        $speakers = Speaker::all();
        $sponsers = Sponser::all();
        $members = Member::all();
        $volunteers = Volunteer::all();
        $registers = Register::all();

        return view('admin.events.edit', [
            'event'      => $event,
            'speakers'   => $speakers,
            'sponsers'   => $sponsers,
            'members'    => $members,
            'volunteers' => $volunteers,
            'registers'  => $registers,
            'page'       => 'Editing user',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventUpdateRequest $request, Event $event)
    {
        $event->update($request->validated());

        $assignedSpeakers = $request->input('assigned_speakers'); // <---------- the ids of the added speakers 
        if( $assignedSpeakers !=null && sizeof($assignedSpeakers)>0 ){
            $event->speakers()->detach();
            foreach ($assignedSpeakers as $assignedSpeaker) {
                $event->speakers()->attach($assignedSpeaker);
            }
        } else {
            $event->speakers()->detach();
        }


        $assignedSponsers = $request->input('assigned_sponsers'); // <---------- the ids of the added sponsers 
        if( $assignedSponsers !=null && sizeof($assignedSponsers)>0 ){
            $event->sponsers()->detach();
            foreach ($assignedSponsers as $assignedSponser) {
                $event->sponsers()->attach($assignedSponser);
            }
        } else {
            $event->sponsers()->detach();
        }


        $assignedMembers = $request->input('assigned_members'); // <---------- the ids of the added members 
        if( $assignedMembers !=null && sizeof($assignedMembers)>0 ){
            $event->members()->detach();
            foreach ($assignedMembers as $assignedMember) {
                $event->members()->attach($assignedMember);
            }
        } else {
            $event->members()->detach();
        }


        $assignedVolunteers = $request->input('assigned_volunteers'); // <---------- the ids of the added volunteers 
        if( $assignedVolunteers !=null && sizeof($assignedVolunteers)>0 ){
            $event->volunteers()->detach();
            foreach ($assignedVolunteers as $assignedVolunteer) {
                $event->volunteers()->attach($assignedVolunteer);
            }
        } else {
            $event->volunteers()->detach();
        }

        $assignedRegisters = $request->input('assigned_registers'); // <---------- the ids of the added registers 
        if( $assignedRegisters !=null && sizeof($assignedRegisters)>0 ){
            $event->registers()->detach();
            foreach ($assignedRegisters as $assignedRegister) {
                $event->registers()->attach($assignedRegister);
            }
        } else {
            $event->registers()->detach();
        }



        //updat image
        if(request()->image){
            $event->clearMediaCollection('events'); 
            $temporaryFile = TemporaryFile::where('folder', request()->image)->first();
            if ($temporaryFile) {
                $event->addMedia(storage_path('app/pictures/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
                    ->toMediaCollection('events');
    
                rmdir(storage_path('app/pictures/tmp/' . $temporaryFile->folder));
                $temporaryFile->delete();
            }
        }

        return redirect()->route('admin.eventUpdated', ['event'=>$event]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if($event->speakers()->count()>0){
            $event->speakers()->detach();
        }
        if($event->sponsers()->count()>0){
            $event->sponsers()->detach();
        }
        if($event->members()->count()>0){
            $event->members()->detach();
        }
        if($event->registers()->count()>0){
            $event->registers()->detach();
        }
        if($event->volunteers()->count()>0){
            $event->volunteers()->detach();
        }

        $oldEvent = $event->title; 
        $event->delete();
        return redirect()->route('admin.eventDeleted', ['event'=>$oldEvent]);
    }
}
