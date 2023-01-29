<?php

use App\Models\post as ModelsPost;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Model\post;
use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function () {
//     return "la bai viet";
// });

Route::get('/admin/product', function () {
    return "la san pham";
});
// Route::get('/admin/product/add', function () {
//     return "them san pham";
// });
Route::get('/post/{cat_id}/page/{page}', function ($cat_id, $page) {
    return "la bai viet".$cat_id."page".$page;
});
Route::get('/admin/product/add', function () {
    return route('product');
}) -> name('product');
// định tuyến qua view
// Route::view('/post', 'post', ['id' => 20]);
// Route::get('/post/{id}', 'postController@detail');
// //
// Route::get('admin/post/add', function(){
//     return "Admin: them bai viet";
// });
// Route::get('admin/post/update/{id}', function($id){
//     return "Admin : cap nhat bai viet co id {$id}";
// });
// Route::get('admin/post/show', function($id){
//     return "Admin : hien thi bai viet ";
// });
// Route::get('admin/post/delete/{id}', function($id){
//     return "Admin : xoa bai viet co id {$id}";
// });
// Route::get('admin/post/show', 'AdminPostController@add');

Route::get('product/show/{id}', 'ProductController@show');
Route::get('product/create', 'ProductController@create');
Route::get('product/update/{id}', 'ProductController@update');

// 
Route::resource('test', 'TestController');
// bai tap controller
Route::get('admin/post/add', 'AdminPostController@add');
Route::get('admin/post/update/{id}', 'AdminPostController@update');
Route::get('admin/post/show', 'AdminPostController@show');
Route::get('admin/post/delete/{id}', 'AdminPostController@delete');
//bai tap produc
Route::get('admin/product/add', 'AdminProductController@add');
Route::get('admin/product/update/{id}', 'AdminProductController@update');
Route::get('admin/product/show', 'AdminProductController@show');
Route::get('admin/product/delete/{id}', 'AdminProductController@delete');


 Route::get('child', function(){
        return view('child', ['data' => 4]);
    });
    Route::get('users/insert', function(){
        DB::table('users')->insert(
            ['name'=>'thanh', 'email'=>'thanh@gmail.com', 'password' => bcrypt('thanh#')]
        );
    });
    // Route::get('post/add', 'postController@add') ;
    Route::get('post/show', 'postController@show') ;
    Route::get('post/update', 'postController@update') ;
    Route::get('post/delete/{id}', 'postController@delete') ;
    Route::get('post/restore/{id}', 'postController@restore') ;
    // Route::get('post/read', function(){
    //     $posts= ModelsPost::all();
    //     return $posts;
    // }) ;
    Route::get('post/read', 'postController@read') ;
    Route::get('images/read', 'FeaturedImagesController@read') ;
    Route::get('role/show', 'RoleController@show') ;
//form
    Route::get('post/add', 'postController@add') ;
    Route::post('post/store', 'postController@store') ;



    Route::get('user/reg', function(){
        return view('user.reg');
    }) ;

    
    
