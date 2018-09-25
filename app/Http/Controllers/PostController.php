<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index(Request $request)
    {
    	// cek get dari q
    	$q = $request->get('q');

    	// cek get category
    	$category = $request->get('category');

    	// select post
    	$posts = Post::where('status','PUBLISHED')->where('title', 'LIKE', '%'.$q.'%')->orderBy('created_at');

    	if (isset($category)) {
    		// cari id categori berdasarkan slug
 	   		$cat = Category::select('id')->where('slug',$category)->first();
    		
    		if (isset($cat->id)) {
    			$posts->where('category_id',$cat->id);
    		}
    	}

    	$posts = $posts->paginate(4);
    	
    	return view('posts.index')->with(compact('posts','category','q'));
    }

    public function show(Request $request, $slug)
    {
    	// select post berdasarkan slug
    	$post = Post::where('slug',$slug)->first();

    	// select previous post
    	$prev = Post::select('title','slug')->where('id', '<', $post->id)->orderBy('id', 'desc')->first();
    	
    	// select next post
    	$next = Post::select('title','slug')->where('id', '>', $post->id)->first();

    	return view('posts.show')->with(compact('post','prev','next'));
    }
}
