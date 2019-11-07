<?php

namespace App\Http\Controllers\Admin;

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
}
