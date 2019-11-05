<?php

namespace App\Http\Controllers\Home;

use App\Models\Permissions;
use App\Models\Roles;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function add(Request $request){
//        $permissions = Permission::all();
//        return $permissions;

        $permission = Permission::create(['name' => 'add class','guard_name' => 'web']);
//        $user = Users::query()->where('name','admin1')->first();
//        $role = Roles::query()->where('name','adder')->first();
//        $permission = Permissions::query()->where('name','add student')->first();
//        return [$role,$permission];
        $role = Role::create(['name' => 'ad']);
//        $role->revokePermissionTo($permission);
        $role->givePermissionTo($permission);
//        $users = User::role('writer')->get();
        return 'okk';
    }
}
