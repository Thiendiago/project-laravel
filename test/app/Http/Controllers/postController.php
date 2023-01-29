<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class postController extends Controller
{
    //
    function detail($id){
        echo $id;
    }
    function add(){
        // DB::table('post')->insert(
        //     ['title'=>'post3', 'content'=>'content3', 'user_id'=>'2']
        // );
        // $post=new post;
        // $post->title = "title 1";
        // $post->content="conten1";
        // $post->user_id= 1;
        // $post->save();
        // post::create([
        //     'title' => 'create',
        //     'content'=> 'content create',
        //     'user_id' => 1
        // ]);
        return view('post.create');
    }
    function store(Request $request){
        $request->validate([
            'title' =>'required',
            'content' =>'required'],
            [
            'required'=>'truong :attribute ko dc de trong'
            ],
            [
            'title' =>'tieu de',
            'content' =>'noi dung'
            ]
        );
        if($request->hasFile('file')){
            // echo "cos file";
            $file= $request->file();
            //lấy tên file
            echo $file->getClientOriginalName();
            echo $file->getClientOriginalExtension();
            echo $file->getSize();
            // $file->move('public/uploads', $file->getClientOriginalName());

        }
        // return $request->input();
    }
    function update($id){
        post::where('id',$id)
        ->update([
            'title' => 'update',
            'content'=> 'content create',
            'user_id' => 1
        ]);
    }
    function delete($id){
        // return DB::table('post')->where('id', $id)
        // ->delete();
        $post = post::find(5);
        $post->delete();

    }
    
    function show(){
    //    $post = DB::table('post')->select('title', 'content')->get();
    //    foreach($post as $item){
    //     // echo $item -> title;
    //     // echo '<br>';
    //     // echo $item->content;
    //     // echo '<br>';

    //    }
    //    return $post;
    //    $post = DB::table('post')->where('id', 2)->select('title', 'content')->first();
    //    $post = DB::table('post')->find(1);
    //    print_r($post);
    //    echo $post->title;
    // $number_post = DB::table('post')->count();
    // echo $number_post;
    // $number_post = DB::table('post')->join('users', 'users.id','=','post.user_id')
    // ->select('users.name', 'post.title')->get();
    // echo $number_post;
    $post = DB::table('post')
    // ->where([
    //     ['title', 'like' , '%1%'],
    //     ['votes', '<>', '100']
    // ])->get();
    // ->selectRaw("COUNT('id') as number_post, user_id")
    // ->groupBy('user_id')->get();
    ->orderBy('votes','desc')->get();  
    echo $post;

    }
    function read(){
        // $post = post::all();
        // $post = post::where('title', 'like', '%p%')
        // ->get();
        // $post = post::where('user_id', 1)->first();
        // $post = post::find(2);

        // return $post->content;
        // $post= post::withTrashed()->get();
        // $post= post::onlyTrashed()->get();
        
        $img= post::find(1)
        ->FeaturedImages;
        return $img;
        
    }
    function restore($id){
        $post = post::onlyTrashed()
        ->where('id', $id)
        ->restore();
    }
}
