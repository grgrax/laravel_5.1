@extends('admin.layouts.layout')

@section('title', 'Posts')

@section('content')
<h3 class="heading">Edit Post</h3><hr>
{!! Form::model($post,['route'=> 'dashboard::post_update','slug'=>$post->slug,'method'=>'POST']) !!}

<div class="form-group">
	{!! Form::label('title', 'Title') !!}
	{!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'Title here']) !!}
</div>
<div class="form-group">
	<label for="content">Content</label>
	{!! Form::text('content', null, ['class' => 'form-control','placeholder'=>'Content here']) !!}
</div>
<div class="form-group">
	<label for="title">Title</label>
	{!! Form::text('user_id', null, ['class' => 'form-control','placeholder'=>'user_id here']) !!}
</div>

<button type="submit" name="submit" class="btn btn-success">Submit</button>
<a href="{{ route('dashboard::post') }}" class="btn btn-warning">Cancel</a>
{!! Form::close() !!}
@endsection

