@extends('admin.layouts.layout')

@section('title', 'Posts')

@section('content')
<h3 class="heading">Posts</h3>
<a href="{{ route('dashboard::post_create') }}">New</a><hr>
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Content</th>
			<th>Author</th>
			<th>Created at</th>
			<th>Update at</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>

		@foreach($posts as $post)
		<tr>
			<td>{{$post['id']}}</td>
			<td>{{$post['title']}}</td>
			<td>{{$post['content']}}</td>
			<td>{{$post['user_id']}}</td>
			<td>{{$post['created_at']}}</td>
			<td>{{$post['updated_at']}}</td>
			<td>
				<a href="{{ route('dashboard::post_edit',['slug'=>$post['slug']]) }}">Edit</a> / 							
				<a href="{{ route('dashboard::post_destroy',['slug'=>$post['slug']]) }}">Delete</a>							
			</td>
		</tr>
		@endforeach

	</tbody>
</table>
@endsection

