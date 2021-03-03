@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container col-md-5 shadow-lg p-3 mb-5 bg-white rounded">
        <h3>Add Category</h3><hr>
        <form class="form-horizontal" method="post" action="{{ route('insertCategory.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}​
            <div class="form-group">
                <label for="id" class="label">Category ID: </label>
                <input type="text" name="id" id="id" placeholder="Category ID" class="form-control">
            </div>
            <div class="form-group">
                <label for="name" class="label">Name: </label>
                <input type="text" name="name" id="name" placeholder="Name"  class="form-control">
            </div>
            <div class="form-group">
                <label for="image" class="label">Select image to upload:</label>
                <input type="file" name="category-image" id="fileToUpload">
            </div>
            <br/>
            <input type="submit" name="insert" class="btn btn-danger col-md-12" value="Insert">
        </form>
    </div>
</div>
@endsection