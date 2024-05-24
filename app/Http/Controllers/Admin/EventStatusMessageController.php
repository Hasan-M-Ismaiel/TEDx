<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventStatusMessageController extends Controller
{

    public function update ()
    {
        $event = request()->event;
        return  view('admin.success_messages.success_update_event',['event'=>$event]);
    }

    public function create ()
    {
        $event = request()->event;
        return  view('admin.success_messages.success_create_event',['event'=>$event]);
    }

    public function delete ()
    {
        $event = request()->event;
        return  view('admin.success_messages.success_delete_event',['event'=>$event]);
    }
}
