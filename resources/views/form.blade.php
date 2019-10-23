@extends('master')

@section('title','Post Create page')




@section('content') 

<div class="d-flex justify-content-center mt-4">
	<div class="card col-lg-12">
		<div class="card-header">
			<h3>Create Your Post</h3>
		</div>
		<div class="card-body">
			<form action="{{route('projects.store')}}" method="POST">
				@csrf
				<!-- <input type="hidden" name="id" value="{{auth()->user()->id}}"> -->
				<div class="form-group">
					<input type="text" name="text"  placeholder="Create post Title" class="form-control">
					<!-- @if($errors->has('text')) -->
					<span style="color:red">{{$errors->first('text')}}</span>
					<!-- @endif -->
				</div>
				<div class="form-group">
					<textarea name="description" placeholder="Post description" class="form-control"></textarea> <span style="color:red">{{$errors->first('description')}}</span>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection