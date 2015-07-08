@extends('layouts.layout')

@section('title', 'Posts')

@section('content')
<div class="content mysection1" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="heading">Posts</h1>
				<ul>					
					@foreach($posts as $post)
					<li>{{$post['slug']}}</li>
					<a href="{{ $url = route('dashboard::post', ['slug'=>$post['slug']])}}	">
						<p>{{ $post['desc']}}</p>						
					</a>
					<a href="{{ $url = route('dashboard::post_edit', ['slug'=>$post['slug']])}}	">
						<p>{{ $post['desc']}}</p>						
					</a>
					<a href="{{ $url = route('dashboard::post_add')}}	">
						<p>{{ $post['desc']}}</p>						
					</a>
					@endforeach
				</ul>		

			</div>
		</div>
	</div>
</div>
@endsection

