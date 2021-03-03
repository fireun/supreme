@extends('layouts.app')
@section('content')

<div class="container">
    <div class="container col-md-5 shadow-lg p-3 mb-5 bg-white rounded">
        <h3>Edit Quantity</h3><hr>
        <form class="form-horizontal" method="post" action="{{ route('update.cart') }}" enctype="multipart/form-data">
			{{ csrf_field() }}​
            @foreach($carts as $cart) 
				<div class="form-group">
					<label for="id" class="label">Cart ID: </label>
					<input type="text" name="id" id="id" value="{{$cart->id}}" class="form-control" readonly>
				</div>
			
				<div class="form-group">
					<label for="quantity" class="label">Quantity: </label>
					<input name="quantity" id="quantity" type="text" value="{{$cart->quantity}}" class="form-control">
				</div>
				<br/>
				<input type="submit" name="insert" class="btn btn-danger col-md-12" value="Update">
			@endforeach
        </form>
    </div>
</div>
@endsection