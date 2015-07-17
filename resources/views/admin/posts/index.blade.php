@extends('template')
@section('title')
   Area Administrativa
@endsection
@section('content')
    <h1>Blog Admin</h1>
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
            <td></td>
        </tr>
      @endforeach
      </tbody>

  </table>
{!! $posts->render() !!}




@stop