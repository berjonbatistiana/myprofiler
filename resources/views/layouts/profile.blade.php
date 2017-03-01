@extends('layouts.app')

@section('content')
<div class="container">
	<div class="jumbotron header text-center">
		<h2 class="owner-name">{{$current_user->first_name}} {{$current_user->last_name}} </h2>
		<ol class="breadcrumb profile-info">
			<li>{{$current_user->contact_number}}</li>
			<li>{{$current_user->address}}</li>
			<li><a href="http://www.linkedin.com/in/bermond-jon-batistiana" target="_blank" class="btn btn-link">Linkedin</a></li>
			<li><a href="mailto:{{$current_user->email}}" class="btn btn-link">E-mail</a></li>
		</ol>
	</div>  

	<ul class="nav nav-tabs nav-justified">
			<li class="active"><a data-toggle="tab" href="#skills">Skills</a></li>
			<li><a data-toggle="tab" href="#experiences">Experiences</a></li>
			<li><a data-toggle="tab" href="#education">Education</a></li>
	</ul>

	<div class="tab-content">
		<div id="skills" class="tab-pane fade in active">
			<h3>Skills</h3>
			<ul>
				@foreach ($current_user->skills as $skill)
				<li>{{$skill->skill_name}}</li>
				@endforeach
			</ul>
		</div>
		<div id="experiences" class="tab-pane fade">
			<h3>Experiences</h3>
			<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div id="education" class="tab-pane fade">
			<h3>Education</h3>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		</div>
	</div>
</div>

@stop