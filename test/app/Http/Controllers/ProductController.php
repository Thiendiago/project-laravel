<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id){
        // return "thong tin san pham id:".$id; `
        $price = 100000;
        $color = ['red', 'green'];
        return view('product.show', compact('id','price', 'color'));

    }
    function create(){
        return "them san pham moi";
    }
    function update($id){
        return "cap nhat san pham id:" .$id;
    }
}
