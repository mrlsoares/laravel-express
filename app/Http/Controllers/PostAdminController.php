<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostAdminController extends Controller
{
	/**
	 * @var Post
	 */
	private $post;

	/**
	 * @param Post $post
	 */
	public function __construct(Post $post)
	{

		$this->post = $post;
	}
	public function index()
	{
		$posts= $this->post->paginate(5);
		//print_r($posts);

		return view('admin.posts.index',compact('posts'));
	}
}
