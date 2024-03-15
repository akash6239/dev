@extends('layouts.app')
@section('body')
    <h1 class="mb-0">Add book</h1>
    <hr>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="type" name="product_code" class="form-control" placeholder="product_code">
            </div>
            <div class="col">
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
@endsection