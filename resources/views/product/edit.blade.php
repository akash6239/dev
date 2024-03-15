@extends('layouts.app')
@section('body')
    <h1 class="mb-0">Edit product</h1>
    <hr>
    <form action="{{route('product.update',$products->id)}}" method="POST">
        @csrf
        @method('PUT');
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{$products->title}}">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{$products->price}}">
            </div>
            
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="type" name="product_code" class="form-control" placeholder="product_code" value="{{$products->product_code}}">
            </div>
            <div class="col">
                <textarea name="description" class="form-control" placeholder="Description" >{{$products->description}}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <button class="btn btn-primary" type="submit">Update product</button>

        </div>
    </form>
@endsection