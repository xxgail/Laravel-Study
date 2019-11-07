<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permissions;
use App\Models\Roles;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Spatie\Permission\Models\Permission;
//use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function add(Request $request){
//        $permissions = Roles::all();
//        return $permissions;

//        $permission = Permissions::create(['name' => 'add class','guard_name' => 'web']);
//        $user = Users::query()->where('name','admin1')->first();
//        $role = Roles::query()->where('name','adder')->first();
//        $permission = Permissions::query()->where('name','add student')->first();
//        return [$role,$permission];
//        $role = Roles::create(['name' => 'add']);
//        $role->revokePermissionTo($permission);
//        $role->givePermissionTo($permission);
//        $users = User::role('writer')->get();

        $role = Roles::query()->where('name','add')->first();
//        $permission = Permissions::query()->find(11);
//        return $permission;
//        $data = $permission->assignRole($role);
//        $data = $role->givePermissionTo($permission);
//        return $data;
        $permission = $role->getAllPermissions();
        return $permission;
        return 'okk';
    }
}
