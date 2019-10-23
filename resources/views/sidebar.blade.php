<div class="card" style="margin-top: 50px;">

	<div class="card-header">
		<h3 class="text-center">Recent Post</h2>
	</div>

	<div class="card-body">
		@foreach($post as $post_title)
		<a href="{{route('projects.show',['project'=>$post_title->id])}}">{{$post_title->heading}}</a>
		<hr>
		@endforeach
	</div>

</div>

<div class="card" style="margin-top: 50px;">

	<div class="card-header">
		<h3 class="text-center">Popular Category</h2>
	</div>

	<div class="card-body">
		<li class="list-item">sdsdsd</li>
	</div>

</div>