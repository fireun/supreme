@extends('layouts.app')
@section('content')

<div class="container">
    <div class="container col-md-5 shadow-lg p-3 mb-5 bg-white rounded">
        <h3>Shipping Information</h3><hr>
        <form class="form-horizontal" method="post" action="{{ route('updateShip.order') }}">
			{{ csrf_field() }}​
            @foreach($orders as $order)
                <input type="hidden" name="orderId" value="{{$orders->id}}">
            @endforeach
                {{-- <div class="row">
                    <div class="form-group pl-3">
                        <label for="id" class="label">First Name: </label>
                        <input type="text" name="firstName" value="" class="form-control" required>
                    </div>
                    <div class="form-group pl-2">
                        <label for="id" class="label">Last Name: </label>
                        <input type="text" name="LastName" value="" class="form-control" required>
                    </div>
                </div> --}}
                <div class="form-group">
					<label for="id" class="label">Phone No: </label>
					<input type="text" name="phoneNo" value="" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="id" class="label">Address: </label>
					<input type="text" name="address" value="" class="form-control" required>
                </div>
                <div class="row">
                    <div class="form-group pl-3">
                        <label for="id" class="label">State/City: </label>
                        <input type="text" name="city" value="" class="form-control" required>
                    </div>
                    <div class="form-group pl-2">
                        <label for="id" class="label">Postal Code: </label>
                        <input type="number" name="postalCode" value="" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
					<label for="id" class="label">Country: </label>
					<input type="text" name="country" value="" class="form-control" required>
				</div>

				<br/>
				<input type="submit" class="btn btn-danger col-md-12" value="Submit">
			
        </form>
    </div>
</div>
@endsection