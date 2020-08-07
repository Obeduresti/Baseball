@extends('layouts.app')

@section('content')
    <div class="container">
    @if(session('mssg') !== null)
             <div class="alert alert-{{session('alerttype')}} alert-dismissible fade show" role="alert">
              {{ session('mssg')}}
              <strong>Product name</strong> Was created Successfuly.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
        <div class="row">
            <div class="col-md-12">
                <h1>Product details</h1>
                <div class="card">
                <input type="hidden" name="productid" id="productid">
                    <div class="card-body">
                        <h5 class="card-title">{{ $products->product_name }}</h5>
                        <p class="card-text"> 
                            <b>Description:</b>{{ $products->description }}
                            <br>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b>Price:</b>${{$products->price."".$products->currency}}
                        </li>
                        <li class="list-group-item">
                            <b>Category:</b>{{$products->category_id}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/product/edit/{{$product->_id}" class="card-link">Edit</a>
                        <a href="/admin/product/delete/{{$product->_id}" class="card-link">Delete</a>
                    </div>
                </div>
        </div>
    </div>
@endsection
