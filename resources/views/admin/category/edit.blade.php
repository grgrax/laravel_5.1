@extends('admin.layouts.layout')

@section('title', 'category')

@section('content')
<h3 class="heading">Edit category</h3><hr>

{!!
Form::open(array(
				'method' => 'PUT', 
				'route' => array(
							'dashboard::dashboard.category.update', 
							$category->slug,
							)
					)
			 )				
!!}
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control" id="" placeholder="Input field"
		value="{{ $category->title }}">
	</div>

	<button type="submit" name="submit" class="btn btn-success">Submit</button>
   <a href="{{ route('dashboard::dashboard.category.index') }}" class="btn btn-warning">Cancel</a>

	
{!! Form::close() !!}
@endsection

