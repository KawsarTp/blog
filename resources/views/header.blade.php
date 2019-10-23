<nav class="navbar navbar-expand-lg navbar-dark bg-info">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="{{route('projects.index')}}" class="nav-link">Home</a>
		</li>
		<li class="nav-item">
			<a href="{{route('projects.create')}}" class="nav-link">Create Post</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				{{auth()->user()->name}}
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">
					@auth
					<form action="{{route('projects.logout',['id'=>auth()->user()->id])}}" method="POST">
						@csrf
						<button type="submit" class="btn btn-warning">Logout</button>
					</form>
					@endauth
				</a>
			</div>
		</li>
	</ul>
</nav>