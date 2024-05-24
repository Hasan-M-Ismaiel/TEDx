<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpeakerCreateRequest;
use App\Http\Requests\SpeakerUpdateRequest;
use App\Models\Event;
use App\Models\Speaker;
use App\Models\TemporaryFile;
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
    public function store(SpeakerCreateRequest $request)
    {
        $speaker = Speaker::create($request->validated());

        $event = Event::findOrFail(request()->event_id);
        $event->speakers()->attach($speaker);

        //image to the event
        $temporaryFile = TemporaryFile::where('folder', request()->image)->first();
        if ($temporaryFile) {
            $speaker->addMedia(storage_path('app/pictures/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
                ->toMediaCollection('speakers');

            rmdir(storage_path('app/pictures/tmp/' . $temporaryFile->folder));
            $temporaryFile->delete();
        }
        
        return redirect()->route('admin.speakerCreated', ['speaker'=>$speaker]);
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
    public function update(SpeakerUpdateRequest $request, Speaker $speaker)
    {
        $speaker->update($request->validated());

        //updat image
        if(request()->image){
            $speaker->clearMediaCollection('speakers'); 
            $temporaryFile = TemporaryFile::where('folder', request()->image)->first();
            if ($temporaryFile) {
                $speaker->addMedia(storage_path('app/pictures/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
                    ->toMediaCollection('speakers');
    
                rmdir(storage_path('app/pictures/tmp/' . $temporaryFile->folder));
                $temporaryFile->delete();
            }
        }

        return redirect()->route('admin.speakerUpdated', ['speaker'=>$speaker]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speaker $speaker)
    {
        if($speaker->events()->count()>0){
            $speaker->events()->detach();
        }
        $oldSpeaker = $speaker->first_name;
        $speaker->delete();
        return redirect()->route('admin.speakerDeleted', ['speaker'=>$oldSpeaker]);
    }
}
