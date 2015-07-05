<div class="content mysection1" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-center">
				<h1 class="heading">Log in</h1>



				{!! Form::open(array('url'=>'/front/login','method'=>'post','class'=>'col-left')) !!}

				<div class="form-group">
					{!! Form::label('username','Username') !!}
					{!! Form::text('username','',array('class="form-control"','placeholder="Enter your username"')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password','Password') !!}
					{!! Form::text('password','',array('class="form-control"','placeholder="Enter your password"')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('rember_me','Remember me') !!}
					<br>
					{!! Form::label('rember_me','Yes') !!}
					{!! Form::radio('rember_me','1',false) !!}
					{!! Form::label('rember_me','No') !!}
					{!! Form::radio('rember_me','0',true) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Login',array('class="col-center btn btn-info btn-lg"')) !!}
				</div>
				{!! Form::close()  !!}

				<!-- <input type="submit" class="col-center btn btn-info btn-lg" value="Sign Up"> -->

			</div>
		</div>
	</div>
</div>