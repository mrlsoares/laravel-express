@extends('template')
@section('title')
    Create New Post
@endsection
@section('content')
    <h1>Create New Post</h1>
	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif
    {!!Form::open(['route'=>'admin.posts.store','method'=>'post'])!!}
        <div class="form-group">

            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
    <!---  Field --->
    <div class="form-group">
        {!! Form::label('Content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <!---  Field --->
    <div class="form-group">
        {!! Form::submit('create', ['class' => 'btn btn-primary']) !!}
    </div>
    {!!Form::close() !!}
@stop