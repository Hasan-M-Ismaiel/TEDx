<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;

class RegisterStatusMessageController extends Controller
{
    public function update ()
    {
        $register = Register::findOrFail(request()->register);
        return  view('admin.success_messages.success_update_register',['register'=>$register]);
    }

    public function create ()
    {
        $register = Register::findOrFail(request()->register);
        return  view('admin.success_messages.success_create_register',['register'=>$register]);
    }

    public function delete ()
    {
        $register = request()->register;
        return  view('admin.success_messages.success_delete_register',['register'=>$register]);
    }
}
