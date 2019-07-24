<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestController extends Controller
{
    public function test(){
        $images = url('img/avatar.jpg');
        $username = '盖';
        putenv('GDFONTPATH=' . realpath('.'));
        $shuiyin = url('img/strawberry.png');
        $shuiyin = Image::make($shuiyin)->resize(50,50)->opacity(80);
        $img = Image::make($images)
            ->resize(500,500)
            ->text($username , 75,30 ,function($draw){
                $draw->file('font/FZKTJW'); # 字体
                $draw->size(40); # 大小
                $draw->color('#FFFFFF'); # 颜色
                $draw->align('right'); # 位置
                $draw->valign('top'); # 位置
            })
//            ->filter(new DemoFilter(1)) # 加滤镜
            ->insert($shuiyin,'bottom-right',70,15);
        $img->save('../public/img/g.png');
        return 'success';
    }
}
