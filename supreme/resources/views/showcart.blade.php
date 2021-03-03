@extends('layouts.app')
@section('content') 
<script>
	var total=0;
	function Cal() {
		var prices = document.getElementsByName('price[]');		
		var cboxes = document.getElementsByName('item[]');    
		var len = cboxes.length;	    
		for (var i=0; i<len; i++) {        
			if(cboxes[i].checked){	//calculate if checked		
				subtotal=parseFloat(prices[i].value)+parseFloat(total);	
				total=subtotal;
			}else if(cboxes[i].checked == false){
				subtotal=parseFloat(prices[i].value)-parseFloat(prices[i].value);	
				// subtotal=parseFloat(total)-parseFloat(prices[i].value);	
				total=subtotal;
			}					
		}
		// total=total+subtotal;
		document.getElementById('amount').value=total.toFixed(2);
	}
</script>
<div class="container">
	    <div class="row">
			<div class="col-md-12">
				<form action="{{ route('create.order') }}" method="post">
                    {{ csrf_field() }} 
			<h3>Shopping Cart</h3><hr>
		    <table class="table table-hover table-striped" style="margin-top:5%;">
		        <thead>
					<tr class="thead-dark">
						<th>ID</th>
						<th>Image</th>
						<th>Name</th>
					
						<th>Quantity</th>
						<th>Unit Price</th>
						<th>Action</th>
					</tr>
		    	</thead>
		        <tbody>	
                @foreach($carts as $cart)
		            <tr>
		                <td><input type="checkbox" name="item[]" value="{{$cart->cid}}" onchange="Cal()" /></td>
                        <td><img src="{{ asset('images/') }}/{{$cart->image}}" alt="" width="50"></td>
		                <td style="max-width:300px">
		                    <h6>{{$cart->name}}</h6>
						</td>
						@php 
							$subtotal=$cart->qty*$cart->price;
						@endphp
						<input type="hidden" value="{{$subtotal}}" name="price[]" id="price[]"/>
		                <input type="hidden" name="id" id="id" value="{{$cart->id}}">
                        <td>{{$cart->qty}}</td>
						<td>RM {{$cart->price}}</td>
		                <td>
		                    <a href="{{ route('edit.cart', ['id' => $cart->cid])}}" class="btn btn-warning">Edit</a> | 
		                    <a href="{{ route('delete.cart', ['id' => $cart->cid])}}" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
						</td>
					</tr> 
				@endforeach
					<tr class="thead-dark">
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>                   
						<td>&nbsp;</td>
						<td><h5>Total: </h5></td>
						<td>RM <input type="text" name="amount" id="amount" value="0.00" readonly style="width:45%;font-size:1.0em"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td> 
						<td>&nbsp;</td>
						<td>&nbsp;</td> 
						<td><input type="submit" name="checkout" class="btn btn-danger btn-xs text-uppercase" value="Proceed to Checkout"></td>
					</tr>
		        </tbody>
			</table>		
		</div>
	</form>
	</div>
	
</div>
@endsection