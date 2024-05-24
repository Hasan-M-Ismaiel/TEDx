<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerStatusMessageController extends Controller
{
    public function update ()
    {
        $volunteer = Volunteer::findOrFail(request()->volunteer);
        return  view('admin.success_messages.success_update_volunteer',['volunteer'=>$volunteer]);
    }

    public function create ()
    {
        $volunteer = Volunteer::findOrFail(request()->volunteer);
        return  view('admin.success_messages.success_create_volunteer',['volunteer'=>$volunteer]);
    }

    public function delete ()
    {
        $volunteer = request()->volunteer;
        return  view('admin.success_messages.success_delete_volunteer',['volunteer'=>$volunteer]);
    }
}
