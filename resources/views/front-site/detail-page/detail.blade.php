@extends('master.master')

@section('body')
	<div class="container">
				<div class="heading">
					<h3>Detail Page:</h3>
					<div class="header-border"></div><br/>
					</div><a href="{{ url('/') }}" class="btn btn-success">Back</a>
					<div class="row">
					<div class="col-md-4"></div>				
					<div class="col-md-4">
						<h5 class="heading">{{ $post->post_title }}</h5>
						<div class="detail-item">	
						@if($post->post_type == 'video')	
							<video height="200" width="400" controls="true" autoplay="true">
								<source src="{{ asset($post->post_file) }}">
							</video>
						@else	
							<img src="{{ asset($post->post_file) }}" height="200" width="400">
						@endif	
						</div><br/>
						<div class="brief">{{ $post->post_content }}
						<br/>	
						<div class="description"><br/>{{ $post->post_description }}</div>
						<br/>
							<div class="share">
							<b>Share with....</b>	
							@php
								echo Share::currentPage()
									->facebook()
									->twitter()
									->reddit()
									->telegram()
									->linkedin()
									->whatsapp();
							@endphp
							</div>
						</div>										
					</div>
					<div class="col-md-4"></div>
				</div><br/><br/>
		</div>
	<script src="{{ asset('js/share.js') }}"></script>
@endsection('body')