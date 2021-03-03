@extends('layouts.app')
@section('content') 


<div class="container">
	    <div class="row">
			<div class="col-md-12">
				<h3>Order History</h3><hr>
					<table class="table table-hover table-striped">
						<thead>
						<tr class="thead-dark">
                            <th>Product Image</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Unit Price</th>
							<th>Total Price</th>
							<th>Status</th>
						</tr>
					</thead>
						<tbody>	
						@php 
							$total=0;
						@endphp
						@foreach($orders as $order)
							<tr>
								<input type="hidden" name="orderId" value="{{$order->orderID}}">
								<td><img src="{{ asset('images/') }}/{{$order->image}}" alt="" width="50"></td>
								<td style="max-width:300px">
									<h6>{{$order->name}}</h6>
								
								</td>
								@php 
									$subtotal=$order->qty*$order->price;
									$total=$total+$subtotal;
								@endphp
								<td>{{$order->qty}}</td>
								<td>{{$order->price}}</td>
								<td>{{$subtotal}}</td>
								<td> <strong>{{ $order->status }}</strong></td>
							</tr> 
						@endforeach
						</tbody>
					</table>
				</form>
			</div>
		</div>
    </div>
@endsection