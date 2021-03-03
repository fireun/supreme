@extends('layouts.app')
@section('content')

<div class="container">
    <div class="container col-md-5 shadow-lg p-3 mb-5 bg-white rounded">
        <h3>Edit Category</h3><hr>
        <form class="form-horizontal" method="post" action="{{ route('update.category') }}" enctype="multipart/form-data">
			{{ csrf_field() }}​
			@foreach($categories as $category) 
				<h5>Category: {{$category->name}}</h5>
				<div class="form-group">
					<label for="ID" class="label">Category ID: </label>
					<input type="text" name="ID" id="ID" value="{{$category->id}}" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="name" class="label">Title: </label>
					<input type="text" name="title" id="title" value="{{$category->name}}"  class="form-control">
				</div><br/>
				<div class="form-group">
					<label for="image" class="label">Select image to upload:</label>
					<input type="file" name="category-image" id="fileToUpload">
				</div>
				<br/>
                <input type="submit" name="insert" class="btn btn-danger col-md-12" value="Update">
                <input type="submit" href="{{ route('all.category')}}" name="insert" class="btn col-md-12" value="Back">
			@endforeach
        </form>
    </div>
</div>
@endsection