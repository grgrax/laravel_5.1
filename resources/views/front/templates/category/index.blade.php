<div class="content mysection1" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="heading">Categories</h1>
				<ul>					
					@foreach($categories as $category)
					<li>{{$category['slug']}}</li>
					<a href="{{ $url = route('frontend::category', ['slug'=>$category['slug']])}}	">
						<p>{{ $category['desc']}}</p>						
					</a>
					@endforeach
				</ul>		

			</div>
		</div>
	</div>
</div>