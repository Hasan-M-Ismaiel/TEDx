<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterCreateRequest;
use App\Http\Requests\VolunteerCreateRequest;
use App\Models\Event;
use App\Models\Register;
use App\Models\User;
use App\Models\Volunteer;
use App\Notifications\NewRegister;
use App\Notifications\NewVolunteer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StoreFormInformationController extends Controller
{

    public function storeRegister (RegisterCreateRequest $request)
    {
        $register = Register::create($request->validated());

        $event = Event::findOrFail(request()->event_id);
        $event->registers()->attach($register);
        Alert::success('Success', 'Your request has been taken, Thank you!');
        
        //notify the admin
        $users = User::all();
        $user = $users->first();
        $user->notify(new NewRegister($register));
        
        return redirect()->back();

    }



    public function storeVolunteer (VolunteerCreateRequest $request)
    {
        $volunteer = Volunteer::create($request->validated());

        $event = Event::findOrFail(request()->event_id);
        $event->volunteers()->attach($volunteer);
        Alert::success('Success', 'Your request has been taken, Thank you!');

        //notify the admin
        $users = User::all();
        $user = $users->first();
        $user->notify(new NewVolunteer($volunteer));

        return redirect()->back();
    }
}
