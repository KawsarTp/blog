@extends('master')

@section('title','Home page')


@section('content') 

	
	@foreach($projects as $project)
	<div class="card" style="margin-top: 50px;">
	<div class="card-header">
	<h2 class="text-primary">
		<a href="/projects/{{$project->id}}">{{$project->heading}}</a>
	</h2>
	</div>
	<!-- <hr> -->
	<div class="card-body">
	<p class="mt-4 text-justify">
		{{$project->description}}
	</p>

	<hr>
		<span class="text-success">Created By:

			{{$project->user->name}} || {{$project->created_at->diffForHumans()}} ||
			{{$project->created_at->isoFormat('MMM Do YY')}}
			
		</span>
	<hr>
	</div>
	</div>

	@endforeach

	{{$projects->links()}}


@endsection