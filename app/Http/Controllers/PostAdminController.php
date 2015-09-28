<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostRequest;
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
		$posts= $this->post->paginate(10);
		//print_r($posts);
		return view('admin.posts.index',compact('posts'));
	}
	public function create()
	{
		return view('admin.posts.create');
	}
	public function store(PostRequest $request)
	{
		$this->post->create($request->all());
		return redirect()->route('admin.posts.index');
	}
	public function edit($id)
	{
		$post=$this->post->find($id);
	///	print_r($post);
		return view('admin.posts.edit',compact('post'));
	}

	public function update($id, PostRequest $request)
	{
		$this->post->find($id)->update($request->all());

		return redirect()->route('admin.posts.index');
	}
	public function destroy($id)
	{
		//var_dump($id);
		$this->post->find($id)->delete();
		return redirect()->route('admin.posts.index');
	}
}
