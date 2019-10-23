@extends('master')

@section('title','Home page')




@section('content') 
	
	<h1>{{$project->heading}}</h1>
	<p>{{$project->description}}
		@if($project->user_id == auth()->user()->id)
		<a href="{{route('projects.edit',['project'=>$project->id])}}" class="btn btn-danger">EDIT</a>
		@endif
	</p>

	

@if($project->tasks->count())
	<div>
		@foreach($project->tasks as $task)
			<ul class="list-group">
				<li class="list-group-item"><span class="text-danger">Commented By:{{$task->user->name}}</span> :- {{$task->description}} at <span style="font-weight: bold">{{$task->created_at->diffForHumans()}}</span></li>
			</ul>
		@endforeach
	</div>
	@endif

	<div class="card" style="margin-top: 20px;">
		<div class="card-header">Add Your Comment</div>
		<div class="card-body">
			<form method="post" action="{{route('addComment')}}">
				@csrf
				<input type="hidden" name="project_id" value="{{$project->id}}">
				<div class="form-group">
					<textarea name="comment" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Add Comment</button>
				</div>
			</form>
		</div>
	</div>

@endsection