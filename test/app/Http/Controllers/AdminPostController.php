<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //
    function add(){
        return "Admin: them bai viet";
    }
    function update($id){
        return "Admin: update bai viet id {$id}";
    }
    function show(){
        return "Admin: show bai viet";
    }
    function delete($id){
        return "Admin: delete bai viet id {$id}";
    }
}
