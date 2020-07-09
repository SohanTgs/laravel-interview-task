<!DOCTYPE html>
<html>
<head>
	<title>Laravel Test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}/admin-panel/admin.css">
</head>
<body>
<div class="container">
		<div class="heading">
		<h3>Admin Panel:</h3><b><i>{{ Auth::user()->name }}</i></b>
			<div class="header-border">
				<a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                 <h4 align="center" style="color:black;">Log Out...</h4>    
                </a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
            </form>

		</div><br/><a href="{{ route('manage_details') }}" class="btn btn-success">Go to manage</a>
				  <a href="{{ url('/') }}" class="btn btn-success">Home Page</a>
<div class="container" id="item-box">
		<div class="row">
			<div class="col-md-6" id="image-item">
				<h4>Post a new content here.......<span style="color:green;font-size:30px;font-style:italic;">{{ Session::get('message') }}</span></h4><br/>
		<form action="{{ route('save_new_post') }}" method="POST" enctype="multipart/form-data">
						 @csrf
					<label for="post_title">Post Title*</label>
					<span style="color: red;margin-left: 30px;">
					{{ $errors->has('post_title') ? $errors->first('post_title'):'' }}
					</span>
					<input type="text" placeholder="Not allow greater than 255 characters & same titles" id="post_title" name="post_title" class="form-control"><br/>
					<label for="post_content">Post Brief*</label>
					<span style="color: red;margin-left: 30px;">
					{{ $errors->has('post_content') ? $errors->first('post_content'):'' }}
					</span>
					<input type="text" id="post_content" name="post_content" class="form-control"><br/>
					<label for="post_description">Post Body(Long description)*</label>
					<span style="color: red;margin-left: 30px;">
					{{ $errors->has('post_description') ? $errors->first('post_description'):'' }}
					</span>
					<input type="text" id="post_description" name="post_description" class="form-control"><br/>
					<label for="post_type">Post Type*</label>
					<span style="color: red;margin-left: 30px;">
					{{ $errors->has('post_type') ? $errors->first('post_type'):'' }}
					</span>
					<select name="post_type" id="post_type" class="form-control">
						<option value="">---Select post type---</option>
						<option value="image">Image</option>
						<option value="video">Video</option>
					</select>
					<br/>
					<label for="post_file">Post File*</label>
					<span style="color: red;margin-left: 30px;">
					{{ $errors->has('post_file') ? $errors->first('post_file'):'' }}
					</span>
					<input type="file" id="post_file" accept="*" name="post_file" class="form-control">
					The file must be a file of type: jpeg, png, jpg, mp4, mov, ogg & less than 2 mega byte
					<br/>
					<label></label><br/>
			    	<label for="post_status">Published</label>
			    	<input type="radio" checked="" id="post_status" name="post_status" value="Published">|
			    	<label for="post_status">Unpublished</label>
			    	<input type="radio" name="post_status" id="post_status" value="Unpublished"><br/><br/>
					<input type="submit" name="btn" class="btn btn-success" value="Submit">
		</form>
				<br/><br/>
			</div>
		</div>
</div>

</div>		
</body>
</html>