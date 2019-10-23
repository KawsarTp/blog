@extends('master')

@section('title','Home page')




@section('content') 
	<form action="{{route('projects.update',['project'=>$project->id])}}" method="POST">
		@csrf
		@method('PATCH')
		<div>
		<input type="text" name="text"  placeholder="Create post Title" value="{{$project->heading}}">
		<!-- @if($errors->has('text')) -->
			<span style="color:red">{{$errors->first('text')}}</span>
			<!-- @endif -->
		</div>
		<textarea name="description" placeholder="Post description">{{$project->description}}</textarea> <span style="color:red">{{$errors->first('description')}}</span>
		<button type="submit">Submit</button>
	</form>

	<form action="{{route('projects.destroy',['project'=>$project->id])}}" method="POST">
		@csrf
		@method('DELETE')
		<button type="submit">DELETE</button>
	</form>

@endsection