	<div class="mysection1 footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-center">
					<div class="col-lg-4">
						<h2 class="heading">Location</h2>
						<address>
							<p>
								<strong>Twitter, Inc.</strong><br>
								795 Folsom Ave, Suite 600<br>
								<abbr title="Phone">P:</abbr> (123) 456-7890
							</p>
						</address>

						<address>
							<p>
								<strong>Full Name</strong><br>
								<a href="mailto:#">first.last@example.com</a>
							</p>
						</address>	
					</div>
					<div class="col-lg-4">
						<h2 class="heading">About Freelancing</h2>
						<p>Freelance is a free to use, <b>open source</b> Bootstrap theme created by Start Bootstrap.</p>
					</div>					
					<div class="col-lg-4">
						<h2 class="heading">Around the Web</h2>
						<p>
							<ul class="list-inline">
								<li >
									<a href="#" class="glyphicon glyphicon-cloud myglyphicon">
									</a>
								</li>
								<li >
									<a href="#" class="glyphicon glyphicon-music myglyphicon">
									</a>
								</li>
								<li >
									<a href="#" class="glyphicon glyphicon-road myglyphicon">
									</a>
								</li>							
								<li >
									<a href="#" class="glyphicon glyphicon-gift myglyphicon">
									</a>
								</li>							
							</ul>
							<ul class="list-inline">
								<li >
									<a href="#" class="glyphicon glyphicon-send myglyphicon">
									</a>
								</li>
								<li >
									<a href="#" class="glyphicon glyphicon-heart-empty myglyphicon">
									</a>
								</li>							
								<li >
									<a href="#" class="glyphicon glyphicon-globe myglyphicon">
									</a>
								</li>							
								<li >
									<a href="#" class="glyphicon glyphicon-shopping-cart myglyphicon">
									</a>
								</li>							
							</ul>
						</p>
					</div>
				</div>
			</div>			
		</div>
	</div>


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-center">
					<p>Copyright © Your Website 2014</p>
				</div>				
			</div>		
		</div>
	</footer>











</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
	$("#mymenu ul li a[href^='#']").on('click', function(e) {

		e.preventDefault();
		var hash = this.hash;

		$('html, body').animate({
			scrollTop: $(this.hash).offset().top
		}, 2000, function(){

			window.location.hash = hash;
		});

	});
</script>
</html>

