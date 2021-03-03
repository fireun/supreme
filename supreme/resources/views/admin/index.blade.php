@extends('layouts.app')

@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Welcome Back Admin!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-2"></div>
        <div class="col-md-4 col-lg-4 col-sm-4">
            <label style="width:100%;">
                <a href="{{ route('product')}}" class="img-fluid" style="text-decoration:none;color:black;">
                <div class="panel panel-default card-input card card-body bg-light">
                <img src="{{asset('images/Product.jpg')}}" alt="CreditImage"><hr>
                  <div class="panel-heading"><h5>Insert Product</h5></div>
                </div>
                </a>
            </label>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4">
            <label style="width:100%;">
                <a href="{{ route('all.product')}}" class="img-fluid" style="text-decoration:none;color:black;">
                    <div class="panel panel-default card-input card card-body bg-light">
                        <img src="{{asset('images/AllProduct.jpg')}}" alt="CashImage"><hr>
                        <div class="panel-heading"><h5>All Product</h5></div>
                    </div>
                </a>
            </label>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-2"></div>
        <div class="col-md-2 col-lg-2 col-sm-2"></div>
        <div class="col-md-4 col-lg-4 col-sm-4">
            <label style="width:100%;">
                <a href="{{ route('category')}}" class="img-fluid" style="text-decoration:none;color:black;">
                    <div class="panel panel-default card-input card card-body bg-light">
                        <img src="{{asset('images/Category.jpg')}}" alt="CreditImage"><hr>
                        <div class="panel-heading"><h5>Insert Category</h5></div>
                  </div>
                </a>
            </label>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4">
            <label style="width:100%;">
                <a href="{{ route('all.category')}}" class="img-fluid" style="text-decoration:none;color:black;">
                    <div class="panel panel-default card-input card card-body bg-light">
                        <img src="{{asset('images/AllCategory.jpg')}}" alt="CreditImage"><hr>
                        <div class="panel-heading"><h5>All Category</h5></div>
                  </div>
                </a>
            </label>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-2"></div>
        <div class="col-md-2 col-lg-2 col-sm-2"></div>
        <div class="col-md-4 col-lg-4 col-sm-4">
            <label style="width:100%;">
                <a href="{{ route('all.order')}}" class="img-fluid" style="text-decoration:none;color:black;">
                    <div class="panel panel-default card-input card card-body bg-light">
                        <img src="{{asset('images/ViewOrder.jpg')}}" alt="CreditImage"><hr>
                        <div class="panel-heading"><h5>View Order</h5></div>
                  </div>
                </a>
            </label>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-2"></div>
    </div>
</div>
@endsection
