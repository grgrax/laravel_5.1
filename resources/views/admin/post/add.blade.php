@extends('admin.layouts.layout')

@section('title', 'Posts')

@section('content')
<h3 class="heading">New Post</h3><hr>
{!! Form::open(['route'=> 'dashboard::post_store','method'=>'POST']) !!}
<div class="form-group">
	<label for="title">Title</label>
	<input type="text" name="title" class="form-control" id="" placeholder="Input field"
	value="">
</div>

<button type="submit" name="submit" class="btn btn-success">Submit</button>
<a href="{{ route('dashboard::post') }}" class="btn btn-warning">Cancel</a>
{!! Form::close() !!}
@endsection

