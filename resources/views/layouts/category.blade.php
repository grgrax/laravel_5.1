@extends('layouts.layout')

@section('title', 'Home Page')

@section('header')
@parent
@endsection

@section('content')
<div class="content mysection1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="heading">{{$category['slug']}}</h1>
				<p>{{ $category['desc']}}</p>						
			</div>
		</div>
	</div>
</div>
@endsection

@section('header')
@parent
@endsection
