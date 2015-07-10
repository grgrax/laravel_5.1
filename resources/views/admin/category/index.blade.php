@extends('admin.layouts.layout')

@section('title', 'Categories')

@section('content')
<h2 class="heading">Categories 
	<span class="badge total">{!! $categories->total() !!}	</span> 
</h2>	
<a href="{{ route('dashboard::dashboard.category.create') }}" class="btn btn-info">New</a>

<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Created at</th>
			<th>Update at</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>

		@foreach($categories as $category)
		<tr>
			<td>{{$category['id']}}</td>
			<td>{{$category['title']}}</td>
			<td>{{$category['created_at']}}</td>
			<td>{{$category['updated_at']}}</td>
			<td>
				<a href="{{ route('dashboard::dashboard.category.edit',['slug'=>$category['slug']]) }}">Edit</a> / 							
				<a href="{{ route('dashboard::dashboard.category.destroy',['slug'=>$category['slug']]) }}">Delete</a>							
			</td>
		</tr>
		@endforeach

	</tbody>
</table>

{!! $categories->render() !!}


@endsection



