@extends('layouts.app')
@section('content')                
        @foreach($products as $product)
            <div class="container" style="margin-top:5%;">
                <form action="{{ route('add.to.cart') }}" method="post">
                    {{ csrf_field() }} 
                    <div class="col-md-6" style="float:left;"><img src="{{asset('images/')}}/{{$product->image}}" alt="" class="img-fluid" width="500"></div>
                    
                    <div class="col-md-6" style="float:right;">
                        <h2 class="card-title">{{$product->name}}</h2>
                            <p class="price-detail-wrap"> 
                                <span class="price h3 text-danger"> 
                                    <span class="currency">RM</span><span class="num">{{$product->price}}</span>
                                </span> 
                            </p>
                            <dl class="item-property">
                                <dt>Description</dt>
                                <dd><p>{{$product->description}}</p></dd>
                            </dl>
                            <dl class="item-property">
                                <dt>Available stock</dt>
                                <dd><p>{{$product->quantity}}</p></dd>
                            </dl>
                            <dl class="item-property">
                                <dt>Category ID</dt>
                                <dd><p>{{$product->categoryID}}</p></dd>
                            </dl>
                            <dl class="item-property">
                                <dt>Product ID</dt>
                                <dd><p>{{$product->id}}</p></dd>
                            </dl>
                            <hr>
                            <dl class="item-property">
                                <dt>Quantity <input type="number" name="quantity" id="qty" value="1" min="1" max="10"></dt>
                            </dl>
                            <input type="hidden" name="id" id="id" value="{{$product->id}}">
                            <input type="hidden" id="name" name="name" value="{{$product->name}}">
                            <input type="hidden" id="amount" name="amount" value="">
                            <hr>
                        <button type="submit" style="float:left" class="btn btn-danger btn-xs text-uppercase btn-lg">Buy Now</button>
                    </div>
                </form>
            </div>
        @endforeach
@endsection       