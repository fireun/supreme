@extends('layouts.app')
@section('content')
    <div class="container"> 
        <h2 style="text-align: center;margin-top:3%;">Products</h2><br/>
        <form action="{{ route('search.product') }}" method="post">
            {{ csrf_field() }}
            <div class="active mb-4">
                <input class="form-control" type="text" name="searchProduct" id="searchProduct" placeholder="Search" aria-label="Search">
            </div>
        </form>
        <div class="row">
            @foreach($products as $product)     
                        <div class="col-sm-4" style="margin-top:3%;"> 
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <a href="{{ route('productdetail.product', ['id' => $product->id])}}"><img src="{{asset('images/')}}/{{$product->image}}" alt="" class="img-fluid" ></a>
                                    <div class="card-heading text-danger" style="margin-top:5%;"><h5>RM {{$product->price}}</h5></div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('productdetail.product', ['id' => $product->id])}}"><button style="float:right" class="btn btn-danger btn-xs">Add to Cart</button></a>
                                </div>
                            </div>
                        </div>
            @endforeach
        </div>     
    </div>      
@endsection             

