<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Details extends Controller
{

     public function detail($id){
     	$post = Post::where(['id'=>$id,'post_status'=>'Published'])->first();
     
    	return view('front-site.detail-page.detail',['post'=>$post]);
    }
  
    public function manage_details(){
      $posts = Post::all();
      return view('admin-panel.manage-post.manage-post',['posts'=>$posts]);
    }

    public function unpublished_status($id){
      $post = Post::find($id);
      $post->post_status = 'Unpublished';
      $post->save();
      return redirect('home/manage-details')->with('message','Post unpublished successfully');
    }

    public function published_status($id){
      $post = Post::find($id);
      $post->post_status = 'Published';
      $post->save();
      return redirect('home/manage-details')->with('message','Post published successfully');
    }

      public function delete_post($id){
      $post = Post::find($id);
      $post->delete();
      return redirect('home/manage-details')->with('message','Post deleted successfully');
    }



}
