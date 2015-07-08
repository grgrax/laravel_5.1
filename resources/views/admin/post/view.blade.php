@extends('layouts.layout')

@section('title','')


@section('content')
<div class="content mysection1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="heading">{{$post['slug']}}</h1>
				<p>{{ $post['desc']}}</p>						
			</div>
		</div>
	</div>
</div>
@endsection

