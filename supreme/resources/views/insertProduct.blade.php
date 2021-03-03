@extends('layouts.app')
@section('content')

<div class="container">
    <div class="container col-md-5 shadow-lg p-3 mb-5 bg-white rounded">
        <h3>Add Product</h3><hr>
        <form class="form-horizontal" method="post" action="{{ route('addProduct.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}​
            <div class="form-group">
                <label for="id" class="label">Product ID: </label>
                <input type="text" name="ID" id="ID" placeholder="Product ID" class="form-control">
            </div>
            <div class="form-group">
                <label for="name" class="label">Title: </label>
                <input type="text" name="title" id="title" placeholder="Title"  class="form-control">
			</div><br/>
			<div class="form-group">
                <select style="text-align:center" name="category_id" id= " category_id" class="form-control">
					<option  value="">Select Category</option>
				@foreach($categories as $category)
					<option  value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach
			</select> 
			</div>
			<div class="form-group">
                <label for="Quantity" class="label">Quantity: </label>
                <input name="Quantity" id="Quantity" type="text" placeholder="Quantity" class="form-control">
			</div>
			<div class="form-group">
                <label for="price" class="label">Price: </label>
                <input name="price" id="price" type="text" placeholder="Price" class="form-control">
			</div>
			<div class="form-group">
                <label for="Description" class="label">Description: </label>
                <textarea name="Description" id="Description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="image" class="label">Select image to upload:</label>
                <input type="file" name="product-image" id="fileToUpload">
            </div>
            <br/>
            <input type="submit" name="insert" class="btn btn-danger col-md-12" value="Insert">
        </form>
    </div>
</div>
@endsection