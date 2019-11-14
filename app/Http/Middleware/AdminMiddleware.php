<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\ModelHasPermissions;
use App\Models\Permissions;
use App\Models\Users;
use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $admin_id = session('admin_id');
        $admin = Admin::query()->find($admin_id);

        if(in_array('管理员',json_decode($admin->getRoleNames()))){
            return $next($request);
        }else{
            $permission_ids = ModelHasPermissions::query()->where('admin_id',$admin_id)->pluck('permission_id')->toArray();
            $permissions = Permissions::query()->whereIn('id',$permission_ids)->pluck('name')->toArray();
            if($permissions){
                foreach ($permissions as $permission) {
                    if($request->is(implode('/',array_reverse(explode(' ',$permission))))){
                        return $next($request);
                    }
                }
            }
        }

        abort('401','No permission!');
        return redirect()->back();
    }
}
