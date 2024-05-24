<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberCreateRequest;
use App\Http\Requests\MemberUpdateRequest;
use App\Models\Event;
use App\Models\Member;
use App\Models\TemporaryFile;
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
    public function store(MemberCreateRequest $request)
    {
        $member = Member::create($request->validated());

        $event = Event::findOrFail(request()->event_id);
        $event->members()->attach($member);

        //image to the event
        $temporaryFile = TemporaryFile::where('folder', request()->image)->first();
        if ($temporaryFile) {
            $member->addMedia(storage_path('app/pictures/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
                ->toMediaCollection('members');

            rmdir(storage_path('app/pictures/tmp/' . $temporaryFile->folder));
            $temporaryFile->delete();
        }
        
        return redirect()->route('admin.memberCreated', ['member'=>$member]);
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

        return view('admin.members.edit', [
            'member' => $member,
            'events' => $events,
            'currentEvent' => $currentEvent,
            'page' => 'Edit member'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MemberUpdateRequest $request, Member $member)
    {
        $member->update($request->validated());

        //updat image
        if(request()->image){
            $member->clearMediaCollection('members'); 
            $temporaryFile = TemporaryFile::where('folder', request()->image)->first();
            if ($temporaryFile) {
                $member->addMedia(storage_path('app/pictures/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
                    ->toMediaCollection('members');
    
                rmdir(storage_path('app/pictures/tmp/' . $temporaryFile->folder));
                $temporaryFile->delete();
            }
        }

        return redirect()->route('admin.memberUpdated', ['member'=>$member]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        if($member->events()->count()>0){
            $member->events()->detach();
        }
        $oldMember = $member->first_name;
        $member->delete();
        return redirect()->route('admin.memberDeleted', ['member'=>$oldMember]);
    }
}
