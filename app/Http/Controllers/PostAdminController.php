<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;

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
	public function create()
	{
		return view('admin.posts.create');
	}
	public function store(Requests\PostRequest $request)
	{
		$this->post->create($request->all());
		return redirect()->route('admin.posts.index');
	}

}
