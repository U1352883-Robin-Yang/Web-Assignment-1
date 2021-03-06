@extends('layout')
@extends('layouts.app')
@section('content')


	<h1 align="center">Anime Information</h1> {{--show animem information--}}
  <h2 align="center">Anime: {{$anime->name}}<br>
                      Year: {{$anime->year}}</h2>

		@foreach ($anime->note as $notes) {{--show anime notes associated with the anime--}}
		  <ul>
				<a method="POST" href="/home/{{$notes->id}}/edit">{{$notes->body}}</a> {{--update notes--}}
				<p style="float:right; padding-right:50px;">Posted By: {{$notes->user->name}} On: {{$notes->created_at}}</p>
			</ul>
	  @endforeach

		@if (Auth::guest()){{--show this section below only if a user has been logged in othwe wise do nothing--}}
		@else
						<hr>
							<div align="center"> {{--Add note form--}}
							<h3>Add new content to forum</h3> {{--add a new post--}}
							<form method="POST" action="/home/{{$anime->id}}/note">
							{{csrf_field()}}
							<textarea name="body" rows="4" cols="40"></textarea>
									<br/>
							<button type="Add" class="btn btn-primary" style="width:120px;">Add</button>
								@if(count($errors))
									<ul>
										@foreach ($errors->all() as $error)
										 <p>{{$error}}</p> {{--display error messages if found --}}
										@endforeach
									</ul>
								@endif
							</div>
		@endif
@stop
