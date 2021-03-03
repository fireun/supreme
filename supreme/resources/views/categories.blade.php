@extends('layouts.app')
@section('content')
    <div class="container"> 
        <h2 style="text-align: center;margin-top:3%;">Categories</h2><br/>
        <form action="{{ route('search.category') }}" method="post">
            {{ csrf_field() }}
            <div class="active mb-4">
                <input class="form-control" type="text" name="searchCategory" id="searchCategory" placeholder="Search" aria-label="Search">
            </div>
        </form>
        <div class="row">
            @foreach($categories as $category)  
                        <div class="col-sm-4" style="margin-top:3%;"> 
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title ">{{$category->name}}</h5>
                                    <a href="{{ route('categoryproduct.category', ['id' => $category->id])}}"><img src="{{asset('images/')}}/{{$category->image}}" alt="" class="img-fluid" ></a>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('categoryproduct.category', ['id' => $category->id])}}"><button style="float:right" class="btn btn-danger btn-xs">Learn More</button></a>
                                </div>
                            </div>
                        </div>
            @endforeach
        </div>     
    </div>      
@endsection             
