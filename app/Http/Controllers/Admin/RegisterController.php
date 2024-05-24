<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCreateRequest;
use App\Http\Requests\RegisterUpdateRequest;
use App\Models\Event;
use App\Models\Register;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Register::all();

        return view('admin.registers.index', [
            'registers' => $registers,
            'page' => 'Registers List'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registers = Register::all();
        $events = Event::all();

        return view('admin.registers.create', [
            'registers' => $registers,
            'events' => $events,
            'page' => 'Creating register',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterCreateRequest $request)
    {
        $register = Register::create($request->validated());

        $event = Event::findOrFail(request()->event_id);
        $event->registers()->attach($register);

        return redirect()->route('admin.registerCreated', ['register'=>$register]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        return view('admin.registers.show', [
            'page' => 'Showing Register',
            'register' => $register,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        $events = Event::all();
        $currentEvent = $register->events()->first();

        return view('admin.registers.edit', [
            'register'      => $register,
            'events'        => $events,
            'currentEvent'  => $currentEvent,
            'page'          => 'Edit register'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegisterUpdateRequest $request, Register $register)
    {
        $register->update($request->validated());
        return redirect()->route('admin.registerUpdated', ['register'=>$register]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        if($register->events()->count()>0){
            $register->events()->detach();
        }
        
        $oldRegister = $register->first_name;
        $register->delete();
        return redirect()->route('admin.registerDeleted', ['register'=>$oldRegister]);
    }
}
