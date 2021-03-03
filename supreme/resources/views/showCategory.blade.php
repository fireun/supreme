@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <table class="table table-hover table-striped">
            <thead>
            
            <tr class="thead-dark">
                <th>ID</th>
                <th>Image</th>
                <th style="width:50%;">Name</th>
                <th>Action</th>
            </tr>
        </thead>
            <tbody>
            @foreach($categories as $category)    
                <tr>
                    <td>{{$category->id}}</td>
                    <td><img src="{{asset('images/')}}/{{$category->image}}" alt="" width="50"></td>
                    <td style="max-width:300px">
                        <h6>{{$category->name}}</h6>
                        <em class="text-muted">
                            {{-- {{$category->description}} --}}
                        </em>
                    </td>
                    <td>
                        {{-- action --}}
                        <a href="{{ route('edit.category', ['id' => $category->id])}}" class="btn btn-warning"><i class="fas fa-edit">Edit</i></a> 
                        <a href="{{ route('delete.category', ['id' => $category->id])}}" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash">Delete</i></a>
                    </td>
                </tr> 
            @endforeach      
            </tbody>
        </table>
    </div>
</div>
@endsection