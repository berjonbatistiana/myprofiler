@extends('layouts.app')

@section('content')

<div class="container text-center">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
			<h2>Sign in to Continue</h2>
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

				{{Form::open(array('action'=>'LoginController@postLogin'))}}
					<input type="text" name='email' value="{{old('email')}}" class="form-control" placeholder="Email" required autofocus>
					<input type="password" name='password' class="form-control" placeholder="Password" required>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

					<div class="row login-add-details">
						<!-- <div class="col-md-6 col-xs-12">
							<label class="checkbox text-left">
		                    	<input type="checkbox" value="remember-me">Remember me
							</label>
						</div>

						<div class="col-md-6 col-xs-12">
							</label><a href="#" class="need-help pull-right sm-pull-left">Need help? </a>
						</div>
					</div> -->
				{{Form::close()}}

				

			</div>
			<a class="new-account" href="{{URL::to('/signup')}}">Create an account</a>
		</div>
	</div>
</div>

@stop