<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventCreateRequest;
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
    public function store(EventCreateRequest $request)
    {
        //----dataset 1
        //title
        //description
        //date
        //location

        //----dataset 2
        //facebook_account
        //linkedin_account
        //twitter_account
        //instagram_account
        //website
        $event = Event::create($request->validated());
        
        //-----dataset 3
        $assignedSpeakers   = $request->input('assigned_speakers');     // the ids of the added speakers from database 
        //first_names_speaker[]
        //last_names_speaker[]
        //emails_speaker[]
        //phones_speaker[]
        //abouts_speaker[]
        //facebook_accounts_speaker[]
        //linkedin_accounts_speaker[]
        //twitter_accounts_speaker[]
        //instagram_accounts_speaker[]
        //websites_speaker[]

        if( $assignedSpeakers !=null && sizeof($assignedSpeakers)>0 ){
            foreach ($assignedSpeakers as $assignedSpeaker) {
                $event->speakers()->attach($assignedSpeaker);
            }
        } 


        $first_names_speaker            = $request->input('first_names_speaker');
        $last_names_speaker             = $request->input('last_names_speaker');
        $emails_speaker                 = $request->input('emails_speaker');
        $phones_speaker                 = $request->input('phones_speaker');
        $abouts_speaker                 = $request->input('abouts_speaker');
        $facebook_accounts_speaker      = $request->input('facebook_accounts_speaker');
        $linkedin_accounts_speaker      = $request->input('linkedin_accounts_speaker');
        $twitter_accounts_speaker       = $request->input('twitter_accounts_speaker');
        $instagram_accounts_speaker     = $request->input('instagram_accounts_speaker');
        $websites_speaker               = $request->input('websites_speaker');

        if($first_names_speaker != null){
            for ($i = 0; $i < sizeof($first_names_speaker); $i++) {
                $first_name         = $first_names_speaker[$i];
                $last_name          = $last_names_speaker[$i];
                $email              = $emails_speaker[$i];
                $phone_number       = $phones_speaker[$i];
                $about              = $abouts_speaker[$i];
                $facebook_account   = $facebook_accounts_speaker[$i];
                $twitter_account    = $twitter_accounts_speaker[$i];
                $linkedin_account   = $linkedin_accounts_speaker[$i];
                $instagram_account  = $instagram_accounts_speaker[$i];
                $website            = $websites_speaker[$i];
    
                $validated = $request->validate([
                    $first_name        => 'required|max:255',
                    $last_name         => 'required',
                    $email             => 'required',
                    $phone_number      => 'required',
                    $about             => 'required',
                    $facebook_account  => 'required',
                    $twitter_account   => 'required',
                    $linkedin_account  => 'required',
                    $instagram_account => 'required',
                    $website           => 'required',
                ]);
    
                $speaker = Speaker::create($validated);
                $event->speakers()->attach($speaker);
            }
        }

        

        //-----dataset 4
        $assignedSponsers   = $request->input('assigned_sponsers');     // the ids of the added sponsers from database 
        //first_names_sponser[]
        //last_names_sponser[]
        //emails_sponser[]
        //phones_sponser[]
        //abouts_sponser[]
        //facebook_accounts_sponser[]
        //linkedin_accounts_sponser[]
        //twitter_accounts_sponser[]
        //instagram_accounts_sponser[]
        //websites_sponser[]

        if( $assignedSponsers !=null && sizeof($assignedSponsers)>0 ){
            foreach ($assignedSponsers as $assignedSponser) {
                $event->sponsers()->attach($assignedSponser);
            }
        } 


        $first_names_sponser            = $request->input('first_names_sponser');
        $last_names_sponser             = $request->input('last_names_sponser');
        $emails_sponser                 = $request->input('emails_sponser');
        $phones_sponser                 = $request->input('phones_sponser');
        $abouts_sponser                 = $request->input('abouts_sponser');
        $facebook_accounts_sponser      = $request->input('facebook_accounts_sponser');
        $linkedin_accounts_sponser      = $request->input('linkedin_accounts_sponser');
        $twitter_accounts_sponser       = $request->input('twitter_accounts_sponser');
        $instagram_accounts_sponser     = $request->input('instagram_accounts_sponser');
        $websites_sponser               = $request->input('websites_sponser');

        if($first_names_speaker != null){
            for ($i = 0; $i < sizeof($first_names_sponser); $i++) {
                $first_name         = $first_names_sponser[$i];
                $last_name          = $last_names_sponser[$i];
                $email              = $emails_sponser[$i];
                $phone_number       = $phones_sponser[$i];
                $about              = $abouts_sponser[$i];
                $facebook_account   = $facebook_accounts_sponser[$i];
                $twitter_account    = $twitter_accounts_sponser[$i];
                $linkedin_account   = $linkedin_accounts_sponser[$i];
                $instagram_account  = $instagram_accounts_sponser[$i];
                $website            = $websites_sponser[$i];

                $validated = $request->validate([
                    $first_name        => 'required|max:255',
                    $last_name         => 'required',
                    $email             => 'required',
                    $phone_number      => 'required',
                    $about             => 'required',
                    $facebook_account  => 'required',
                    $twitter_account   => 'required',
                    $linkedin_account  => 'required',
                    $instagram_account => 'required',
                    $website           => 'required',
                ]);

                $sponser = Sponser::create($validated);
                $event->sponsers()->attach($sponser);
            }
        }


        $assignedVolunteers = $request->input('assigned_volunteers');   // the ids of the added volunteers from database
        //first_names_volunteer[]
        //last_names_volunteer[]
        //emails_volunteer[]
        //phones_volunteer[]
        //abouts_volunteer[]
        //facebook_accounts_volunteer[]
        //linkedin_accounts_volunteer[]
        //twitter_accounts_volunteer[]
        //instagram_accounts_volunteer[]
        //websites_volunteer[]

        if( $assignedVolunteers !=null && sizeof($assignedVolunteers)>0 ){
            foreach ($assignedVolunteers as $assignedVolunteer) {
                $event->volunteers()->attach($assignedVolunteer);
            }
        } 


        $first_names_volunteer            = $request->input('first_names_volunteer');
        $last_names_volunteer             = $request->input('last_names_volunteer');
        $emails_volunteer                 = $request->input('emails_volunteer');
        $phones_volunteer                 = $request->input('phones_volunteer');
        $abouts_volunteer                 = $request->input('abouts_volunteer');
        $facebook_accounts_volunteer      = $request->input('facebook_accounts_volunteer');
        $linkedin_accounts_volunteer      = $request->input('linkedin_accounts_volunteer');
        $twitter_accounts_volunteer       = $request->input('twitter_accounts_volunteer');
        $instagram_accounts_volunteer     = $request->input('instagram_accounts_volunteer');
        $websites_volunteer               = $request->input('websites_volunteer');


        if($first_names_speaker != null){
            for ($i = 0; $i < sizeof($first_names_volunteer); $i++) {
                $first_name         = $first_names_volunteer[$i];
                $last_name          = $last_names_volunteer[$i];
                $email              = $emails_volunteer[$i];
                $phone_number       = $phones_volunteer[$i];
                $about              = $abouts_volunteer[$i];
                $facebook_account   = $facebook_accounts_volunteer[$i];
                $twitter_account    = $twitter_accounts_volunteer[$i];
                $linkedin_account   = $linkedin_accounts_volunteer[$i];
                $instagram_account  = $instagram_accounts_volunteer[$i];
                $website            = $websites_volunteer[$i];

                $validated = $request->validate([
                    $first_name        => 'required|max:255',
                    $last_name         => 'required',
                    $email             => 'required',
                    $phone_number      => 'required',
                    $about             => 'required',
                    $facebook_account  => 'required',
                    $twitter_account   => 'required',
                    $linkedin_account  => 'required',
                    $instagram_account => 'required',
                    $website           => 'required',
                ]);

                $volunteer = Volunteer::create($validated);
                $event->volunteers()->attach($volunteer);
            }
        }        

        
        $assignedRegisters  = $request->input('assigned_registers');    // the ids of the added registers from database 
        //first_names_register[]
        //last_names_register[]
        //emails_register[]
        //phones_register[]
        //abouts_register[]
        //facebook_accounts_register[]
        //linkedin_accounts_register[]
        //twitter_accounts_register[]
        //instagram_accounts_register[]
        //websites_register[]
        if( $assignedRegisters !=null && sizeof($assignedRegisters)>0 ){
            foreach ($assignedRegisters as $assignedRegister) {
                $event->registers()->attach($assignedRegister);
            }
        } 


        $first_names_register            = $request->input('first_names_register');
        $last_names_register             = $request->input('last_names_register');
        $emails_register                 = $request->input('emails_register');
        $phones_register                 = $request->input('phones_register');
        $abouts_register                 = $request->input('abouts_register');
        $facebook_accounts_register      = $request->input('facebook_accounts_register');
        $linkedin_accounts_register      = $request->input('linkedin_accounts_register');
        $twitter_accounts_register       = $request->input('twitter_accounts_register');
        $instagram_accounts_register     = $request->input('instagram_accounts_register');
        $websites_register               = $request->input('websites_register');

        
        if($first_names_speaker != null){
            for ($i = 0; $i < sizeof($first_names_register); $i++) {
                $first_name         = $first_names_register[$i];
                $last_name          = $last_names_register[$i];
                $email              = $emails_register[$i];
                $phone_number       = $phones_register[$i];
                $about              = $abouts_register[$i];
                $facebook_account   = $facebook_accounts_register[$i];
                $twitter_account    = $twitter_accounts_register[$i];
                $linkedin_account   = $linkedin_accounts_register[$i];
                $instagram_account  = $instagram_accounts_register[$i];
                $website            = $websites_register[$i];

                $validated = $request->validate([
                    $first_name        => 'required|max:255',
                    $last_name         => 'required',
                    $email             => 'required',
                    $phone_number      => 'required',
                    $about             => 'required',
                    $facebook_account  => 'required',
                    $twitter_account   => 'required',
                    $linkedin_account  => 'required',
                    $instagram_account => 'required',
                    $website           => 'required',
                ]);

                $register = Register::create($validated);
                $event->registers()->attach($register);
            }
        }

        $assignedMembers    = $request->input('assigned_members');      // the ids of the added members from database
        //first_names_member[]
        //last_names_member[]
        //emails_member[]
        //phones_member[]
        //abouts_member[]
        //facebook_accounts_member[]
        //linkedin_accounts_member[]
        //twitter_accounts_member[]
        //instagram_accounts_member[]
        //websites_member[]

        if( $assignedMembers !=null && sizeof($assignedMembers)>0 ){
            foreach ($assignedMembers as $assignedMember) {
                $event->members()->attach($assignedMember);
            }
        } 


        $first_names_member            = $request->input('first_names_member');
        $last_names_member             = $request->input('last_names_member');
        $emails_member                 = $request->input('emails_member');
        $phones_member                 = $request->input('phones_member');
        $abouts_member                 = $request->input('abouts_member');
        $facebook_accounts_member      = $request->input('facebook_accounts_member');
        $linkedin_accounts_member      = $request->input('linkedin_accounts_member');
        $twitter_accounts_member       = $request->input('twitter_accounts_member');
        $instagram_accounts_member     = $request->input('instagram_accounts_member');
        $websites_member               = $request->input('websites_member');

        if($first_names_speaker != null){
            for ($i = 0; $i < sizeof($first_names_member); $i++) {
                $first_name         = $first_names_member[$i];
                $last_name          = $last_names_member[$i];
                $email              = $emails_member[$i];
                $phone_number       = $phones_member[$i];
                $about              = $abouts_member[$i];
                $facebook_account   = $facebook_accounts_member[$i];
                $twitter_account    = $twitter_accounts_member[$i];
                $linkedin_account   = $linkedin_accounts_member[$i];
                $instagram_account  = $instagram_accounts_member[$i];
                $website            = $websites_member[$i];

                $validated = $request->validate([
                    $first_name        => 'required|max:255',
                    $last_name         => 'required',
                    $email             => 'required',
                    $phone_number      => 'required',
                    $about             => 'required',
                    $facebook_account  => 'required',
                    $twitter_account   => 'required',
                    $linkedin_account  => 'required',
                    $instagram_account => 'required',
                    $website           => 'required',
                ]);

                $member = Member::create($validated);
                $event->members()->attach($member);
            }
        }

        dd($event);
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
