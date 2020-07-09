<!DOCTYPE html>
<html>
<head>
	<title>Laravel Test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/') }}/homepage/custom-css/detail-page.css">
</head>
<body>
@if($type == 'video')	
		<div class="container">
				<div class="heading">
				<h3>Detail Page:</h3>
					<div class="header-border"></div><br/>
				</div><a href="{{ url('/') }}" class="btn btn-success">Back</a>
				<div class="row">
					<div class="col-md-4"></div>				
					<div class="col-md-4">
						<h5 class="heading">{{ $video_post->post_title }}</h5>
						<div class="detail-item">
							<video height="200" width="400" controls="true" autoplay="true">
								<source src="{{ asset($video_post->post_file) }}">
							</video>
						</div>
							<p class="breif" style="height: 150px;">{{ $video_post->post_content }}</p>
							<p class="body-item" style="height: 450px;">{{ $video_post->post_description }}</p>
							<div class="share-option">Share option.......</div>
					</div>

					<div class="col-md-4"></div>
				</div>
		</div>
@else		
		<div class="container">
				<div class="heading">
				<h3>Detail Page:</h3>
					<div class="header-border"></div><br/>
				</div><a href="{{ url('/') }}" class="btn btn-success">Back</a>
				<div class="row">
					<div class="col-md-4">			
					</div>			
					<div class="col-md-4">
						<h5 class="heading">{{ $image_post->post_title }}</h5>
						<div class="detail-item">
							<img src="{{ asset($image_post->post_file) }}" height="200" width="400">
						</div>
							<p class="breif" style="height:150px;">{{ $image_post->post_content }}</p>
							<p class="body-item" style="height: 450px;">{{ $image_post->post_description }}</p>
							<div class="share-option">Share option.......</div>
					</div>

					<div class="col-md-4"></div>
				</div>
		</div>			
@endif
</body>
</html>