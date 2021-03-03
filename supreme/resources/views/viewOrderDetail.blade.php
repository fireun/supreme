@extends('layouts.app')
@section('content') 


<div class="container">
	<form action="{{ route('updateStatus.order') }}" method="post">
		{{ csrf_field() }} 
	    <div class="row">
			<div class="col-md-12">
				<h3>User Information</h3><hr>

					<table class="table table-hover table-striped">
						<thead>
						<tr class="thead-dark">
							<th>Name</th>
							<th>Email</th>
							<th>Phone No</th>
							<th>Address</th>
							<th>City</th>
                            <th>Postal code</th>
                            <th>Country</th>
						</tr>
					</thead>
						<tbody>	
						@foreach($users as $user)
							<tr>
								<td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
								<td>{{$user->phoneNo}}</td>
								<td>{{$user->address}}</td>
								<td>{{$user->city}}</td>
                                <td>{{$user->postalCode}}</td>
                                <td>{{$user->country}}</td>
							</tr> 
						@endforeach
						
						</tbody>
					</table>
				
			</div>
        </div>
        {{-- End user Information --}}

        <div class="row">
			<div class="col-md-12">
				<h3>Order Information</h3><hr>

					<table class="table table-hover table-striped">
						<thead>
						<tr class="thead-dark">
							<th>Product</th>
							<th>Image</th>
                            <th>Quantity</th>
                            <th>category</th>
                            <th>Payment Status</th>
							<th>Order Date</th>
						</tr>
					</thead>
						<tbody>	
						@foreach($orders as $order)
							<tr>
                                <td>{{$order->name}}</td>
                                <td><img src="{{ asset('images/') }}/{{$order->image}}" alt="" width="50"></td>
								<td>{{$order->qty}}</td>
								<td>{{$order->categoryName}}</td>
                                <td>{{$order->paymentStatus}}</td>
                                <td>{{$order->orderDate}}</td>
							</tr> 
                        @endforeach
                        

                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td> 
                                
                                @foreach ($orders as $order)
                                    @php 
                                        $orderID = $order->orderID;
                                        $currentOrderStatus = $order->status;
                                    @endphp
                                @endforeach
                                <td>Order Status: {{$currentOrderStatus}}</td>
                                <td>
                                    <div class="form-group">
                                        <input type="hidden" name="orderID" value="{{$orderID}}">
                                        <select class="form-control" name="status">
                                            <option value="{{$currentOrderStatus}}">{{$currentOrderStatus}}</option>
                                            <option value="Packging">Packging</option>
                                            <option value="Shipping">Shipping</option>
                                        </select>
                                    </div>
                                </td>
                                <td><input type="submit" name="submit" class="btn btn-danger col-md-12" value="Submit" onclick="return confirm('Sure Want Update Status?')"></td>
                            </tr>

						</tbody>
					</table>
				
			</div>
		</div>
	</form>

    </div>
@endsection