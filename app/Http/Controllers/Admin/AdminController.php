<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function list(){
        $admins = Admin::query()->get();
//        return $admins;

        $admins->toArray();

        return view('admin.admin.index',compact('admins'));
    }
    public function add(Request $request){

        $roles = Roles::all();
//        return $roles;

        if($request->post()){

            $account = $request->get('name');

            $password = bcrypt($request->get('guard_name'));

            $email = $request->get('email');

            $role_ids = $request->get('role_ids');

//            $admin = Admin::query()->create([
//                'account' => $account,
//                'password' => $password,
//                'email' => $email,
//            ]);
            $admin = Admin::query()->find(2);

            foreach ($role_ids as $role_id) {
                $role = Roles::query()->firstOrFail($role_id);
//                return $role['name'];
                $admin->assignRole($role['name']);
            }
        }

        return view('admin.role.add',compact('roles'));
    }
}
