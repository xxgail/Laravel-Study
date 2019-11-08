<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permissions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function list(){
        $permission = Permissions::all();


        $permission->toArray();
        return view('admin.permission.index',compact('permission'));
    }

    public function add(Request $request){
        if($request->post()){
//            return $request->all();
            $name = $request->get('name');
            if(!$name){

            }

            $guard_name = $request->get('guard_name');

            $permission = Permissions::create([
                'name' => $name,
                'guard_name' => $guard_name
            ]);

            return 'success';
        }

        return view('admin.permission.add');
    }
}
