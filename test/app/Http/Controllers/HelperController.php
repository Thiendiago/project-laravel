<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HelperController extends Controller
{
    //
    function url(){
        //1.tao duong dan co ban
        // $url = url('login');
        // echo $url;
        // tao url qua route
        // $url = route('post.show');
        // echo $url;
        // 3. tao url qua action
        // $url = action('postController@store');
        // echo $url;
        //4. lay current url
        $url = url()->current();
        echo $url;
    }
    function string(){
        // $str = "unitop.vn";
        // echo Str::length($str);
        //in thuong 1 chuoi
        $str = "Unitop.VN";
        // echo Str::lower($str);
        echo Str::upper($str);
        //random string
        echo Str::random(5);
        echo "<br>";
        //loai bo ki tu du thua
        $str = Str::of('    unitop.vn    ')->trim();
        echo $str;
        //tao slug => lam link than thien
        $str = Str::slug('unitop.vn hoc lam wed di lam');
        echo $str;
        // lay chuoi con
        $str = "laravel pro";
        echo Str::of($str)->substr(8);
        echo Str::of($str)->substr(0,7);
        //noi chuoi vao duoi
        echo Str::of('phan van ')->append('cuong');
        //tim kiem thay the cho
        $str = "laravel 7x";
        echo str::of($str)->replace('7x', '6x');
        //cat chuoi vs so ki tu cho truoc
        $str = "Học bổng toàn phần Chính phủ New Zealand bắt đầu nhận hồ sơ";
        echo Str::of($str)->limit(15);
        //kiem tra co chua ki tu con 
        $str = 'unitop.vn hoc lam wed di lam';
        echo Str::contains($str, 'wed');
        

    }
}
