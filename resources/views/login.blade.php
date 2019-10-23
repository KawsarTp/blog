@extends('master')

@section('title','Login page')




@section('content') 
<div class="d-flex justify-content-center">
<div class="card">
	<div class="card-header">
		<h1 class="text-primary text-center">Login To Dashboard</h1>
	</div>
	<div class="card-content">
		<form action="{{route('task.login')}}" method="POST" class="needs-validation" novalidate>
			@csrf
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
				<div class="invalid-feedback">Please Fill this Field</div>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
				<div class="invalid-feedback">I Have to type Your Password</div>
			</div>
			<div class="form-group">
			<input type="submit" name="" value="login" class="btn btn-primary">
			</div>
		</form>	
	</div>

</div>
</div>

@endsection