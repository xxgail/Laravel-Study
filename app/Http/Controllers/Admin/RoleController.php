<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permissions;
use App\Models\RoleHasPermissions;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function list(){
        $role = Roles::all();
//        dd($role);
        foreach ($role as $item) {
            $item['permission'] = $item->getAllPermissions();
        }

        $role->toArray();
        return view('admin.role.index',compact('role'));
    }

    public function add(Request $request){
        $permission = Permissions::all();

        if($request->post()){

            $name = $request->get('name');
            if(!$name){

            }

            $guard_name = $request->get('guard_name');

            $permission_ids = $request->get('permission_ids');

            $role = Roles::create([
                'name' => $name,
                'guard_name' => $guard_name
            ]);

            foreach ($permission_ids as $permission_id) {
                RoleHasPermissions::create([
                    'role_id' => $role->id,
                    'permission_id' => $permission_id,
                ]);
            }
        }

        return view('admin.role.add',compact('permission'));
    }
}
