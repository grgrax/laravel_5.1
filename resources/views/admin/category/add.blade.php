@extends('admin.layouts.layout')

@section('title', 'Category')

@section('content')
<h3 class="heading">New Category</h3><hr>



{!! Form::open(['route'=> 'dashboard::dashboard.category.store','method'=>'POST']) !!}
<div class="form-group">
	<label for="title">Title</label>
	<input type="text" name="title" class="form-control" id="" placeholder="Input field"
	value="">
</div>

<button type="submit" name="submit" class="btn btn-success">Submit</button>
<a href="{{ route('dashboard::dashboard.category.index') }}" class="btn btn-warning">Cancel</a>
{!! Form::close() !!}
@endsection



@endsection


