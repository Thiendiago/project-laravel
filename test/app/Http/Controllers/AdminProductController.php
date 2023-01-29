<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    function add(){
        DB::table('products')
        ->insert(
            [
                'name' => 'iphone14',
                'content' => 'noi dung san pham iphne 14',
                'price' => 3000000,
                'user_id' => 1,
                'product_cat_id' => 1
            ]
            );

    }
    function update($id){
        DB::table('products')
        ->where('id', $id)
        ->update(
            [
                'price' => 300000000,

            ]
            );

    }
    function show(){
        $product= DB::table('products')->select('name')
        ->get();
        return $product;
    }
    function delete($id){
       DB::table('products')
       ->where('id', $id)
       ->delete();
        
    }
    
    //
}
