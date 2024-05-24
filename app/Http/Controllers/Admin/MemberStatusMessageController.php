<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberStatusMessageController extends Controller
{
    public function update ()
    {
        $member = Member::findOrFail(request()->member);
        return  view('admin.success_messages.success_update_member',['member'=>$member]);
    }

    public function create ()
    {
        $member = Member::findOrFail(request()->member);
        return  view('admin.success_messages.success_create_member',['member'=>$member]);
    }

    public function delete ()
    {
        $member = request()->member;
        return  view('admin.success_messages.success_delete_member',['member'=>$member]);
    }
}
