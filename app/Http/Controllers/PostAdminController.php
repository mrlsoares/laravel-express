<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostAdminController extends Controller
{
	public function index()
	{
		$posts= \App\Post::all();
		//print_r($posts);

		return view('admin.posts.index',compact('posts'));
	}
}
