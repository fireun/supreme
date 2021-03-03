@extends('layouts.app')
@section('content') 


<div class="container">
	    <div class="row">
			<div class="col-md-12">
				<h3>Order</h3><hr>
				<form method="post" action="{!! URL::to('paypal') !!}" >
				{{ csrf_field()}}
					<table class="table table-hover table-striped">
						<thead>
						<tr class="thead-dark">
							<th>ID</th>
							<th>Image</th>
							<th>Name</th>
						
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
								<td>{{$order->id}}</td>
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
								<td>
									{{ $order->paymentStatus }}
								</td>
							</tr> 
						@endforeach
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>                   
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><h5>Total: </h5></td>
							<td><h5>RM {{$total}}</h5></td>
						</tr>
						<tr class="thead-dark">
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>                   
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type="hidden" name="amount" value="{{ $total }}"></td>
							<td><input type="submit" name="paynow" value="Pay Now" class="btn btn-danger btn-xs text-uppercase" style="width:100%;"></td>
						</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
    </div>
@endsection