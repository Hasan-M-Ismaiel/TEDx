<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerStatusMessageController extends Controller
{
    public function update ()
    {
        $speaker = Speaker::findOrFail(request()->speaker);
        return  view('admin.success_messages.success_update_speaker',['speaker'=>$speaker]);
    }

    public function create ()
    {
        $speaker = Speaker::findOrFail(request()->speaker);
        return  view('admin.success_messages.success_create_speaker',['speaker'=>$speaker]);
    }

    public function delete ()
    {
        $speaker = request()->speaker;
        return  view('admin.success_messages.success_delete_speaker',['speaker'=>$speaker]);
    }
}
