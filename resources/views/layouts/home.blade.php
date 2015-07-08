@extends('layouts.layout')

@section('title', 'Home Page')

@section('content')
<div id="myheader-intro">
	<div class="row">
		<div class="col-lg-12 intro1">
			<h1>Welcome to the World of Apps</h1>
			<h2>A Template by Bootstrap</h2>
			<hr class="divider" />
			<ul class="list-inline">
				<li><a href="" class="btn btn-default btn-lg">Mobile Application</a></li>
				<li><a href="" class="btn btn-default btn-lg">Web Application</a></li>
				<li><a href="" class="btn btn-default btn-lg">Desktop Application</a></li>
			</ul>
		</div>
	</div>
</div>


<div class="mysection1" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-center">
				<h1 class="heading">About Apps.</h1>
				<div class="col-lg-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nulla ipsam cum aliquam ratione aspernatur pariatur. Asperiores magnam cum perferendis soluta earum magni ratione, doloribus, dolore rem esse, blanditiis! Maxime?</p>

				</div>
				<div class="col-lg-6">
					<p>Consectetur adipisicing elit. Dignissimos, nulla ipsam cum aliquam ratione aspernatur pariatur. Asperiores magnam cum perferendis soluta earum magni ratione, doloribus, dolore rem esse, blanditiis! Maxime?</p>
				</div>
			</div>
		</div>		
		<div class="row">
			<div class="col-lg-12 col-center">
				<button class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-download-alt"></span>
					<a href="#">Download Apps.</a>
				</button>
			</div>
		</div>
	</div>
</div>


<div class="mysection1" id="mobile">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img class="img-responsive" src="img/c/s2.png" alt="">
			</div>
			<div class="col-lg-6">
				<h1 class="heading">Mobile Application</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nulla ipsam cum aliquam ratione aspernatur pariatur. Asperiores magnam cum perferendis soluta earum magni ratione, doloribus, dolore rem esse, blanditiis! Maxime?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nulla ipsam cum aliquam ratione aspernatur pariatur. Asperiores magnam cum perferendis soluta earum magni ratione, doloribus, dolore rem esse, blanditiis! Maxime?</p>
			</div>				
		</div>		
	</div>
</div>


<div class="mysection1" id="web">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="heading">Web App.</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nulla ipsam cum aliquam ratione aspernatur pariatur. Asperiores magnam cum perferendis soluta earum magni ratione, doloribus, dolore rem esse, blanditiis! Maxime?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nulla ipsam cum aliquam ratione aspernatur pariatur. Asperiores magnam cum perferendis soluta earum magni ratione, doloribus, dolore rem esse, blanditiis! Maxime?</p>
			</div>
			<div class="col-lg-6">
				<img class="img-responsive" src="img/c/s1.png" alt="">
			</div>
		</div>		
	</div>
</div>



<div class="mysection1" id="desktop">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="heading">Desktop Application</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nulla ipsam cum aliquam ratione aspernatur pariatur. Asperiores magnam cum perferendis soluta earum magni ratione, doloribus, dolore rem esse, blanditiis! Maxime?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nulla ipsam cum aliquam ratione aspernatur pariatur. Asperiores magnam cum perferendis soluta earum magni ratione, doloribus, dolore rem esse, blanditiis! Maxime?</p>
			</div>
			<div class="col-lg-6">
				<img class="img-responsive" src="img/c/s3.jpg" alt="">
			</div>
		</div>		
	</div>
</div>


<div class="mysection1" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-center">
				<h1 class="heading">Contact Us</h1>
				<form class="col-left">

					<div class="form-group"><label for="">Name</label><input type="text" class="form-control" placeholder="Enter your Name"></div>
					<div class="form-group"><label for="">Email Address</label><input type="email" class="form-control" placeholder="Enter your Email Address"></div>
					<div class="form-group"><label for="">Contact No</label><input type="tel" class="form-control" placeholder="Enter your Contact No."></div>
					<div class="form-group"><label for="">Address</label>
						<textarea class="form-control" id="textareaid" placeholder="Enter your Address"></textarea>
					</div>
					<input type="submit" class="col-center btn btn-info btn-lg" value="Send Message">
				</form>
			</div>
		</div>
	</div>
</div>



@endsection

