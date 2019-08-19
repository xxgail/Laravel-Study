<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function language(Request $request){
        if($request->ajax()){
            $lang = $request->all();
            $lang = $lang['lang'];
            App::setLocale($lang);
            $request->session()->put('language',$lang);
            return APP::getLocale();
        }
//        else{
//            if($request->session()->has('language')){
//                $res = $request->session()->get('language');
//                return $res;
//            }
//        }
        return view('home.lang');
    }
}
