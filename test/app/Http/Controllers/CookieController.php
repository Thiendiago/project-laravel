<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    //
    function set(){
        // $response = new Response();
        return Cookie::queue('unitop', 'hoc wed di lam',24*60);
    }
    function get(Request $request){
        return $request->cookie('unitop');
    }
}
