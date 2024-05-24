<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SponserCreateRequest;
use App\Http\Requests\SponserUpdateRequest;
use App\Models\Event;
use App\Models\Sponser;
use App\Models\TemporaryFile;
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
    public function store(SponserCreateRequest $request)
    {
        $sponser = Sponser::create($request->validated());

        $event = Event::findOrFail(request()->event_id);
        $event->sponsers()->attach($sponser);

        //image to the event
        $temporaryFile = TemporaryFile::where('folder', request()->image)->first();
        if ($temporaryFile) {
            $sponser->addMedia(storage_path('app/pictures/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
                ->toMediaCollection('sponsers');

            rmdir(storage_path('app/pictures/tmp/' . $temporaryFile->folder));
            $temporaryFile->delete();
        }
        
        return redirect()->route('admin.sponserCreated', ['sponser'=>$sponser]);
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
    public function update(SponserUpdateRequest $request, Sponser $sponser)
    {
        $sponser->update($request->validated());

        //updat image
        if(request()->image){
            $sponser->clearMediaCollection('sponsers'); 
            $temporaryFile = TemporaryFile::where('folder', request()->image)->first();
            if ($temporaryFile) {
                $sponser->addMedia(storage_path('app/pictures/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
                    ->toMediaCollection('sponsers');
    
                rmdir(storage_path('app/pictures/tmp/' . $temporaryFile->folder));
                $temporaryFile->delete();
            }
        }

        return redirect()->route('admin.sponserUpdated', ['sponser'=>$sponser]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sponser $sponser)
    {
        if($sponser->events()->count()>0){
            $sponser->events()->detach();
        }
        $oldSponser = $sponser->first_name;
        $sponser->delete();
        return redirect()->route('admin.sponserDeleted', ['sponser'=>$oldSponser]);
    
    }
}
