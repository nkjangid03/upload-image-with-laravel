<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload image</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <h2>Upload image with laravel</h2>
	<div class="row mt-4">

		<div class="col-sm-4">

			<div class="card p-5">
				<form action="{{route('upload_image')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
					  <label for="image"> Name</label>
					  <input type="text" name="name" id="name" class="form-control">
                      @error('name')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
					</div>
					<div class="form-group">
					  <label for="image">Select Image</label>
					  <input type="file" name="image" id="image" class="form-control">
                      @error('image')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
					</div>
					<button type="submit"   class="btn btn-info">Upload</button>
				</form>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="row">
				<div class="col-sm-3">
                    @foreach($records as $record)
                        {{$record->name}}
                        <img src="{{asset('public/images/'.$record->image)}}" id="" height="150">
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
