<?php

namespace App\Http\Controllers;

use App\Models\Sponser;
use Illuminate\Http\Request;

class SponserStatusMessageController extends Controller
{
    public function update ()
    {
        $sponser = Sponser::findOrFail(request()->sponser);
        return  view('admin.success_messages.success_update_sponser',['sponser'=>$sponser]);
    }

    public function create ()
    {
        $sponser = Sponser::findOrFail(request()->sponser);
        return  view('admin.success_messages.success_create_sponser',['sponser'=>$sponser]);
    }

    public function delete ()
    {
        $sponser = request()->sponser;
        return  view('admin.success_messages.success_delete_sponser',['sponser'=>$sponser]);
    }
}
