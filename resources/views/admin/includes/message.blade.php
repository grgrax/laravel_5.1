@if (count($errors) > 0)
<div class="alert alert-danger">
	@foreach ($errors->all() as $error)
	<p>{{ $error }}</p>
	@endforeach
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">
	<p>{{ Session::get('success') }}</p>
</div>
@endif
