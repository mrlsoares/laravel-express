@extends('template')
@section('title')
   Area Administrativa
@endsection
@section('content')
    <h1>Blog Admin</h1>
    <p><a href="{{route('admin.posts.create')}}" class="btn btn-success">Novo</a></p>


  <table class="table table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
      @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>
	            <a href="{{route('admin.posts.edit',['id'=>$post->id])}}" class="btn btn-info">Edit</a>
	            <a href="{{route('admin.posts.destroy',['id'=>$post->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
      @endforeach
      </tbody>

  </table>
{!! $posts->render() !!}




@stop