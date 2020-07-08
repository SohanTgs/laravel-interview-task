<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Homepage extends Controller
{

    public function index(){

    	$post_video = Post::where('post_type', 'video')
    	->where('post_status','Published')
    	->get();
		$post_image = Post::where('post_type','image')
		->where('post_status','Published')
    	->get();
    	
    	return view('front-site.homepage.homepage',['post_video'=>$post_video,'post_image'=>$post_image]);
    }
    
}
