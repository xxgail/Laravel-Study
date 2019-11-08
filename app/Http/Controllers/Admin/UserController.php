<?php

namespace App\Http\Controllers\Admin;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function list(){
        $user = Users::query()->get();

        $user->toArray();

        return view('admin.user.index',compact('user'));
    }
    public function add(Request $request){

        return 'okk';
    }
}
