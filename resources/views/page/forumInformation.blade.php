@extends('layout')

@section('content')


	<h1>Anime Information</h1>

  <h2>{{$anime->name}} {{$anime->year}}</h2>


		{{-- @foreach ($car->informations as $information)

		    <li class="list-group-item">{{$information->body}}
				<a href="#" style="float:right"> Username: {{$information->user->username}} </a></li>

		  @endforeach
				</ul> --}}

				<hr>
					<h3>Add new content to forum</h3>
				{{--<form method="POST" action="/animes/{{$anime->id}}/notes">--}}
						{{csrf_field()}}
						<textarea name="body" rows="4" cols="40"></textarea>
						<br/>

						<button type="Add" class="btn btn-primary">Add</button>
							@if(count($errors))
								<ul>
									@foreach ($errors->all() as $error)
										{{$error}}
									@endforeach
								</ul>
									@endif
								</div>
						  @stop
