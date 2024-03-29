@extends('layouts.app')
@section('body')
    <h1 class="mb-0">Detail product</h1>
    <hr>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{$products->title}}" readonly>
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{$products->price}}" readonly>
            </div>
            
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="type" name="product_code" class="form-control" placeholder="product_code" value="{{$products->product_code}}" readonly>
            </div>
            <div class="col">
                <textarea name="description" class="form-control" placeholder="Description" readonly>{{$products->description}}"</textarea>
            </div>
        </div>
        
    </form>
@endsection