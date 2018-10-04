@extends('layouts.app')
 
@section('page_content')

<style type="text/css">
    .cust-table td{ padding: 10px; }
</style>
<div class="container">
    <div class="col-lg-offset-3 col-lg-6">
 
        <div class="panel panel-default">
            <div class="panel-heading">
                View Product Details 
            </div>
            <div class="panel-body">
            <table class="cust-table">
                <tr>
                    <th width="30%">Category</th><td>:</td><td width="69%">{{ $product->category }}</td>
                </tr>
                <tr>
                    <th width="30%">Sub Category</th><td>:</td><td width="69%">{{ $product->subcategory}}</td>
                </tr>
                <tr>
                    <th width="30%">Title</th><td>:</td><td width="69%">{{ $product->title }}</td>
                </tr>
                <tr>
                    <th>Description</th><td>:</td><td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <th width="30%">Quantity</th><td>:</td><td width="69%">{{ $product->quantity}}</td>
                </tr>
                <tr>
                    <th width="30%">Price</th><td>:</td><td width="69%">{{ $product->price}}</td>
                </tr>
                <tr>
                    <th width="30%">City</th><td>:</td><td width="69%">{{ $product->city}}</td>
                </tr>
                <tr>
                    <th width="30%">State</th><td>:</td><td width="69%">{{ $product->state}}</td>
                </tr>
                <tr>
                    <th width="30%">Address</th><td>:</td><td width="69%">{{ $product->address}}</td>
                </tr>
                <tr>
                    <th>Created At</th><td>:</td><td>{{ $product->created_at }}</td>
                </tr>
            </table>
            </div>
 
        </div>
 
        
    </div>
</div>
@endsection