@extends('layouts.app')

@section('content')
	<div class="container">
		
		<div class="row">
			<div class="signup-sheet col-lg-6 col-lg-offset-3">
			<h2>Sign-up form</h2>
				<div class="well">
					@if(count($errors) > 0)

					<div class="col-lg-12">
						
						<ul>
							@foreach($errors->all() as $error)

								<li>{{$error}}</li>

							@endforeach							
						</ul>

					</div>

					@endif
					{{Form::open(array('action'=>'SignupController@store'))}}
						<div class="signup-input-group input-group firstname-input-group">
							<span class="signup-input-addon input-group-addon" id="firstname-addon">First Name</span>
							<input name="first_name" type="text" class="form-control" placeholder="John" aria-describedby="firstname-addon" required autofocus>
						</div>

						<div class="signup-input-group input-group lastname-input-group">
							<span class="signup-input-addon input-group-addon" id="lastname=addon">Last Name</span>
							<input name="last_name" type="text" class="form-control" placeholder="Doe" aria-describedby="lastname-addon" required>
						</div>

						<div class="signup-input-group input-group email-input-group">
							<span class="signup-input-addon input-group-addon" id="email-addon">E-mail</span>
							<input name="email" type="text" class="form-control" placeholder="example@company.com" aria-describedby="email-addon" required>
						</div>

						<div class="signup-input-group input-group address-input-group">
							<span class="signup-input-addon input-group-addon" id="address-addon">Address</span>
							<input name="address" type="text" class="form-control" placeholder="San Fransisco, CA" aria-describedby="address-addon">
						</div>

						<div class="signup-input-group input-group contact-input-group">
							<span class="signup-input-addon input-group-addon" id="contact-addon">Contact No</span>
							<input name="contact_number" type="text" class="form-control" placeholder="(123) 456-7890" aria-describedby="contact-addon">
						</div>

						<div class="signup-input-group input-group password-input-group">
							<span class="signup-input-addon input-group-addon" id="password-addon" >Password</span>
							<input name="password" type="password" class="form-control" aria-describedby="password-addon" required>
						</div>

						<p class="col-lg-12 password hint">Must have at least 6 characters.</p>

						<div class="signup-input-group input-group signup-input-group">
							<span class="signup-input-addon input-group-addon" id="password-addon" >Confirm Password</span>
							<input name="password_confirmation" type="password" class="form-control" aria-describedby="password-addon" required>
						</div>

						<button class="btn btn-lg btn-primary btn-block" type="submit">Join</button>
					{{Form::close()}}
				</div>
			</div>
		</div>
	</div>
@stop