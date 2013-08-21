@extends('admin')

@section('content')

<div class="row">
	<div class="span4 offset4">
		<div class="well">
			<legend>Register your Details</legend>

			{{ Form::open(array('url'=>'register')) }}

				{{ Form::text('first_name', '', array('placeholder'=>'First Name')) }}

				{{ Form::text('surname', '', array('placeholder'=>'Surname')) }}

				{{ Form::text('username', '', array('placeholder'=>'Email')) }}

				{{ Form::password('password',array('placeholder'=>'Password')) }}

				{{ Form::password('repeat-password',array('placeholder'=>'Repeat Password')) }}

				{{ Form::submit('Register', array('class'=>'btn btn-primary')) }}

			{{ Form::close() }}

		</div>
	</div>
</div>

@stop
