@extends('master.master')

@section('body')
<div class="container">
		<div class="heading">
		<h3>Landing Page:</h3>
			<div class="header-border">
				<a href="{{ url('login') }}" class="btn btn-success">Login</a>
				<a href="{{ route('task_directions') }}" target="_blank" class="btn btn-success">Task-directions</a>
			</div>
		</div><i class="fa-fa-trash"></i>
		<div class="row">
				<div class="col-md-7" id="section-1">
					<label>Section 1</label><br/>
			@foreach($post_video as $video)
				@if($loop->index == 0)
					<div class="first-video" style="height: 420px;position: relative;">
					<div class="first-video-section-1" style="height:208px;">
						<a href="{{ route('detail',['id'=>$video->id])}}">
						<div class="icon" style="position:absolute;right:10px;top:157px;color:red;"><i class="fa fa-play fa-3x"></i></div>	
						<video height="181" width="320">
							<source src="{{ asset($video->post_file) }}">
						</video>
						</a>
					</div>
					<h5>{{ $video->post_title }}</h5>
					<p>{{ $video->post_content }}</p>
					</div>	
					@else 	
					<div class="second-video" style="height: 128px;position: relative;">
						<div class="second-video-section-1">
							<a href="{{ route('detail',['id'=>$video->id])}}">
								<div class="icon2" style="position:absolute;right:0px;top:46px;color:red;"><i class="fa fa-play fa-2x"></i></div>
								<video height="80" width="137">
									<source src="{{ asset($video->post_file) }}">
								</video>
							</a>
						</div>
						<span>{{ $video->post_title }}</span>
					</div>	
					@endif

				@endforeach							
					</div>
			<aside class="col-md-5" id="section-2">
				<label>Section 2</label>
					@foreach($post_image as $image)
						@if($loop->index == 0)
						<div class="first-img">	
							<div class="first-img-section-2" style="height:180px;width:340px;border:2px #EAEAEA solid;">
							<a href="{{ route('detail',['id'=>$image->id])}}">
								<img src="{{ asset($image->post_file) }}" style="height: 180px;width: 340px;">
							</a>	
							</div>
								<h5>{{ $image->post_title }}</h5>
								<p>{{ $image->post_content }}</p>
							</div>	
					@else
						<div class="second-img">
				   		<div class="second-img-section-2">
				   			<a href="{{ route('detail',['id'=>$image->id])}}">
								<img src="{{ asset($image->post_file) }}" style="height:115px;width:170px;">
							</a>
				   		</div>
				   		<span>{{ $image->post_title }}</span>
				   		</div>	
			   			@endif

					@endforeach		
			</aside>
		</div>	
	</div>
@endsection('body')