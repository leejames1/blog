@extends('admin')

@section('content')

<div class="row">
	<div class="span4 offset4">
		<div class="well">
			<legend>Sign In</legend>

			{{ Form::open(array('url'=>'login')) }}

				<div class="input-prepend">
					 <span class="add-on"><i class="icon-envelope"></i></span>
					{{ Form::text('email', '', array('placeholder'=>'Email')) }}
				</div>
				<div class="input-prepend">
					 <span class="add-on"><i class="icon-lock"></i></span>
					{{ Form::password('password',array('placeholder'=>'Password')) }}
				</div>

					{{ Form::submit('Log In', array('class'=>'btn btn-success')) }}

					{{ HTML::link('register','Register', array('class'=>'btn btn-warning')) }}

			{{ Form::close() }}

		</div>
	</div>
</div>

@stop
