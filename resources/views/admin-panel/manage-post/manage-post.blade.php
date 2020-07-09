<!DOCTYPE html>
<html>
<head>
	<title>Laravel Test</title>
	<meta charset="utf-8">
	<meta name="author" content="Mohammad Sohan <php.sohan@gmail.com>">
	<meta name="description" content="Laravel task for interview purpose of readymart.com.bd">
	<link rel="stylesheet" href="{{ asset('/') }}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<h3 align="center" style="margin-top:35px;">Manage all posts</h3><br/>
		<h4 align="center" style="color:green;">{{ Session::get('message') }}</h4>
		<a href="{{ url('/home') }}" class="btn btn-success">Dashboard</a>
		<a href="{{ url('/') }}" class="btn btn-success">Home Page</a>
		<table class="table table-hover table-border table-stripped" style="margin-top: 40px;">
			<tr>
				<th>SL No</th>
				<th>Title</th>
				<th>Type</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			@php($i=1) 
			@foreach($posts as $post)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{ $post->post_title }}</td>
					<td>{{ $post->post_type }}</td>
					<td>{{ $post->post_status }}</td>
					<td>
					 @if($post->post_status == 'Published')	
						<a href="{{ route('unpublished_status',['id'=>$post->id]) }}"><i class="fa fa-arrow-down fa-2x"></i></a>
					 @else
					 	<a href="{{ route('published_status',['id'=>$post->id]) }}"><i class="fa fa-upload fa-2x"></i></a>
					 @endif		
						<a href="{{ route('delete_post',['id'=>$post->id]) }}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash fa-2x"></i></a>
					</td>
				</tr>
			@endforeach	
		</table>
	</div>
</body>
</html>
