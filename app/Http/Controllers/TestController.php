<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;
use Intervention\Image\Filters\DemoFilter;

class TestController extends Controller
{
    public function test(){
        # ----------- 修改已经存在的图片
        # 获取到图片
        $images = url('img/avatar.jpg');
        $username = '一只小盖'; # 设置插入文本的内容
        putenv('GDFONTPATH=' . realpath('.')); # 可以省略字体路径的.ttf

        # 获取到要插入的图片
        $strawberry = url('img/strawberry.png');

        # 修改图片的大小及透明度
        $strawberry = Image::make($strawberry)->resize(50,50)->opacity(80);

        $img = Image::make($images)
            ->resize(500,500) # 重新设置大小
            ->text($username , 475,445 ,function($draw){ # 插入文本
                $draw->file('fonts/FZKTJW'); # 字体
                $draw->size(30); # 大小
                $draw->color('#46cdcf'); # 颜色
                $draw->align('right'); # 位置
                $draw->valign('top'); # 位置
            })
            ->filter(new DemoFilter(1)) # 加滤镜
            ->insert($strawberry,'bottom-right',150,15); # 插入图片
        $img->save('../public/img/new.png'); # 保存为一张新的图片


        # ----------- 新建图片
        Image::canvas('300','200','#FFFFFF')
            ->text('new Image','150','100',function ($draw){
                $draw->size(50);
                $draw->color('#46cdcf');
            })->save('../public/img/new1.jpg');
        return 'success';
    }

    public function test2(){
        return view('base');
    }

    /**
     * @Time: 2019/8/19 14:54
     * @DESC: 可以修改网页的语言
     * @param $locale
     */
    public function test3($locale = 'zh'){
//        return APP::getLocale();
        App::setLocale($locale);
//        echo trans('message.welcome',['name' => '11']);
        $name = 'someone';
        return view('test.test3',compact('name'));
    }


    public function student(){
        $data = Student::query()->first();

        return $data;
    }
}
