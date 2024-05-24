<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class MainHomeController extends Controller
{
    public function main ()
    {
        $events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        $event = $events->first();
        $speakers = $event->speakers()->get();
        $sponsers = $event->sponsers()->get();
        $members = $event->members()->get();
        return view('main_home', [
            'event' => $event,
            'speakers' => $speakers,
            'sponsers' => $sponsers,
            'members' => $members,
        ]);
    }

    public function about ()
    {
        $events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        $event = $events->first();
        return view('main_aboutus', [
            'event' => $event,
        ]);
    }

    public function register ()
    {
        $events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        $event = $events->first();
        return view('main_register', [
            'event' => $event,
        ]);
    }

    public function volunteer ()
    {
        $events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        $event = $events->first();
        return view('main_volunteer', [
            'event' => $event, 
        ]);
    }


    public function sponsers ()
    {
        $events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        $event = $events->first();
        return view('main_sponser', [
            'event' => $event, 
        ]);
    }

    public function faq ()
    {
        $events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        $event = $events->first();
        return view('main_faq', [
            'event' => $event, 
        ]);  
    }


    public function aboutTed ()
    {
        $events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        $event = $events->first();
        return view('main_about_ted', [
            'event' => $event, 
        ]);  
    }

}
