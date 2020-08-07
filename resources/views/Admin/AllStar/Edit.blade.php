@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit product</h1>
                <form action="/admin/products/edit" method="POST"> 
                @csrf
                    <input type="hidden" name="productid" id="productid" value="{{$products->_id}}">
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{$products ->product_name}}">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category" id="category">
                            <option value="0">Select a category</option>  
                            @foreach  ($categories as @category) 
                            <option value="{{$category->_id}}"{{ $category ->_id} == $product ->category_id ? 'selected' : ''}>{{$category -> category}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$products->description}}</textarea>
                    </div>
                 
                    <button class="btn btn-primary"type="submit">edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
