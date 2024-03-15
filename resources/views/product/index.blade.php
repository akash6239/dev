@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List product</h1>
        <a href="{{route('product.create')}}" class="btn btn-primary">Add Product</a>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (Session::has('update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('update')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (Session::has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{Session::get('delete')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-striped table-hover mt-4">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Product_code</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @if ($products->count()>0)
            @foreach ($products as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->product_code}}</td>
                <td>{{$item->description}}</td>
                <td class="d-flex">
                    <a href="{{route('product.show',$item->id)}}" class="btn btn-primary">View</a>
                    <a href="{{route('product.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('product.destroy',$item->id)}}" method="POST" type="button" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                
            </tr>
             @endforeach
             @else
             <tr class="text-center" colspan='5'>product not found</tr>
        @endif
    </table>

   
@endsection