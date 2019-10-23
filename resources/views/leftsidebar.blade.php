<div class="card" style="margin-top: 80px;">
	<div class="card-header">
		<h3 class="text-center">Popular Post</h3>

	</div>
		<div class="card-body">
			@foreach($popular as $popular_post)
			<a href="{{route('projects.show',['project'=>$popular_post->id])}}">{{$popular_post->heading}}</a>
			<hr>
			@endforeach
		
	</div>
</div>
<div class="card" style="margin-top: 80px">

	<div class="card-header">
		<h3>Archives</h3>
	</div>
		
		<div class="card-body">
			@foreach($time as $times)
			<a href="{{route('projects.index')}}/?month={{$times['month']}}&year={{$times['year']}}">{{$times['month'] . ' '. $times['year']}}</a>
			<hr>
			@endforeach
		</div>
</div>