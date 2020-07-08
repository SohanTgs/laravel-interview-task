<!DOCTYPE html>
<html>
<head>
	<title>Laravel Test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/') }}/homepage/custom-css/homepage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
						<a href="{{ url('detail',['id'=>$video->id])}}">
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
							<a href="{{ url('detail',['id'=>$video->id])}}">
								<div class="icon2" style="position:absolute;right:0px;top:46px;color:red;"><i class="fa fa-play fa-2x"></i></div>
								<video height="80" width="137">
									<source src="{{ asset($video->post_file) }}">
								</video>
							</a>
						</div>
						<span>{{ $video->post_title }}</span>
					</div>		
					<!-- <div class="third-video">
						<div class="third-video-section-1"></div>
						<span>Title</span>
					</div>						
					<div class="fourth-video">
						<div class="fourth-video-section-1"></div>
						<span>Title</span>
					</div>						
					<div class="fifth-video">
						<div class="fifth-video-section-1"></div>
						<span>Title</span>
					</div> -->						
				@endif
				@endforeach	
				</div>

			<aside class="col-md-5" id="section-2">
				<label>Section 2</label>
					@foreach($post_image as $image)
						@if($loop->index == 0)
						<div class="first-img">	
							<div class="first-img-section-2" style="height:180px;width:340px;border:2px #EAEAEA solid;">
							<a href="{{ url('detail',['id'=>$image->id])}}">
								<img src="{{ asset($image->post_file) }}" style="height: 180px;width: 340px;">
							</a>	
							</div>
								<h5>{{ $image->post_title }}</h5>
								<p>{{ $image->post_content }}</p>
							</div>	
						@else
				<div class="second-img">
			   		<div class="second-img-section-2">
			   			<a href="{{ url('detail',['id'=>$image->id])}}">
							<img src="{{ asset($image->post_file) }}" style="height:115px;width:170px;">
						</a>
			   		</div>
			   		<span>{{ $image->post_title }}</span>
			   	</div>	
			  <!--<div class="third-img">
			   		<div class="third-img-section-2">
			   		</div>
			   		<span>Title</span>
			   	</div>	
			   	<div class="fourth-img">
			   		<div class="fourth-img-section-2">
			   		</div>
			   		<span>Title</span>
			   	</div>	
			 	<div class="fifth-img">
			   		<div class="fifth-img-section-2">
			   		</div>
			   		<span>Title</span>
			   	</div>  -->			
					@endif
					@endforeach
			</aside>
		</div>	
	</div>

</body>
</html>