<?php //die('header') ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel -- make it configurable</title>
	
	<!-- bootstrap	 -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
	<!-- bootstrap	 -->

	<!-- custom	 -->
	<link href="{{asset('css/my.css')}}" rel="stylesheet">
	<!-- custom	 -->

	<!-- Custom Fonts -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->
	
	<!-- bootstrap	 -->
	<script src="{{asset('js/bootstrap.min.js')}}" type="javascript"></script>
	<!-- bootstrap	 -->
	
</head>


<body data-spy="scroll" data-target=".mynavbar">
	<nav class="nav navbar-default navbar-fixed-top mynavbar">
		<div class="container">
			<div class="navbar-header">
				<a href="" class="navbar-brand">Welcome to Frontend </a>
				<!-- responsive mentu main button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mymenu" >
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="mymenu">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#myheader-intro">Home</a></li>
					<li><a href="#about">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Application Development
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#mobile">Mobile Application</a></li>
							<li><a href="#web">Web Application</a></li>
							<li><a href="#desktop">Desktop Application</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							@foreach($otherPages as $page)
							<li><a href="page/{{$page}}">{{$page}}</a></li>
							@endforeach
						</ul>
					</li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="{{ URL::to('/front/signup')}}">Sign Up</a></li>
					<li><a href="{{ URL::to('/front/login')}}">Log in</a></li>
				</ul>				
			</div>
		</div>
	</nav>
