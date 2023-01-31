<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function add(Request $request){
    //    $request->session()->put('username', 'phan cuong') ;
    //    $request->session()->put('login', 'TRUE') ;
    session(['username'=>'phan cuong']);
    }
    function show(Request $request){
        // return $request->session()->all();
        // if($request->session()->has('username')){
        //     echo "cos session";
        // }
        // return $request->session()->get('username');
        return $request->session()->all();
    }
    function add_flash(Request $request){
        return $request->session()->flash('status', 'da them san pham oki');
    }
    function delete(Request $request){
        // $request->session()->forget('username');
        $request->session()->flush();
    }
}
