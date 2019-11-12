<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request){
//        if(session('is_login')){
//            return redirect()->route('test2');
//        }
        $redirect = route('login.login');
        if($request->post()){
            $account = $request->get('account');

            $password = $request->get('password');

            $admin = Admin::query()->where('account',$account)->first();
            if(!$admin){
                return redirect($redirect)->withErrors(["账号错误"])->withInput();
            }

            if(!password_verify($password,$admin['password'])){
                return redirect($redirect)->withErrors(["密码错误"])->withInput();
            }

            session([
                'is_login' => true,
                'admin_id' => $admin['id'],
            ]);

            return redirect()->route('test2');
        }

        return view('admin.login');
    }
}
