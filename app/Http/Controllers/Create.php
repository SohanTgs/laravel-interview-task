<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class Create extends Controller
{
    public function create_new_post(Request $request){
     $this->validate($request,[
      'post_title'=>'required|unique:posts|max:255',
      'post_content'=>'required',
      'post_description'=>'required',
      'post_type'=>'required',
      'post_file'=>'required|file|mimes:jpeg,jpg,png,mp4,mov,ogg|max:20000',
      'post_status'=>'required'
    ]);
      $file = $request->file('post_file');
      $File_Name = $file->getClientOriginalName();
      $directory = 'media/';
      $PostUrl = $directory.$File_Name;
      $file->move($directory,$File_Name);

    	$post = new Post;
    	$post->post_title = $request->post_title;
    	$post->post_content = $request->post_content;
    	$post->post_description = $request->post_description;
    	$post->post_type = $request->post_type;
    	$post->post_file = $PostUrl;
    	$post->post_status = $request->post_status;
    	$post->save();
        return redirect('/home')->with('message','Post added successfully');
    }

}

