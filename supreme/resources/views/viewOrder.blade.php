@extends('layouts.app')
@section('content') 


<div class="container">
	    <div class="row">
			<div class="col-md-12">
				<h3>Order</h3><hr>

					<table class="table table-hover table-striped">
						<thead>
						<tr class="thead-dark">
							<th>ID</th>
							<th>user ID</th>
							<th>Amount</th>
							<th>Order Date</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
						<tbody>	
						@foreach($orders as $order)
							<tr>
								<td>{{$order->id}}</td>
								<input type="hidden" name="orderId" value="{{$order->id}}">
								<td>{{$order->userID}}</td>
								<td>RM {{$order->amount}}</td>
								<td>{{$order->created_at}}</td>
								<td>
									{{ $order->status }}
								</td>
								<td><a href="{{ route('orderDetail.order', ['id' => $order->id])}}" class="btn btn-danger">View Order Detail</a></td>
							</tr> 
						@endforeach
						
						</tbody>
					</table>
				</form>
			</div>
		</div>
    </div>
@endsection