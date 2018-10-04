@extends('layouts.app')
 
@section('page_content')

<div class="container">
    
    <div class="col-lg-offset-3 col-lg-6" >
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Update Product details
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => route('product.update', $product->id), 'method' => 'POST', 'name'=>'fk-input-form', 'id'=>'fs-forms')) }}
                    <div class="form-group">

                         <div class="form-group">
                        {{ Form::label('category', 'Product category',  ['class' => 'required']) }}
                        {{ Form::text('category',  $product->category, ['id'=>'product_category', 'class' => 'form-control', 'placeholder'=>'Product Category'] ) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('subcategory', 'Product subcategory',  ['class' => 'required']) }}
                        {{ Form::text('subcategory', $product->subcategory, ['id'=>'product_subcategory', 'class' => 'form-control', 'placeholder'=>'Product Subcategory'] ) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('title', 'Product title',  ['class' => 'required']) }}
                        {{ Form::text('title',  $product->title, ['id'=>'product_title', 'class' => 'form-control', 'placeholder'=>'Product Title'] ) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'Description',  ['class' => 'required']) }}
                        {{ Form::textarea('description', $product->description, ['id'=>'description', 'class' => 'form-control', 'placeholder'=>'Description'] ) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('quantity', 'Product quantity',  ['class' => 'required']) }}
                        {{ Form::text('quantity',  $product->quantity, ['id'=>'product_quantity', 'class' => 'form-control', 'placeholder'=>'Product quantity'] ) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('price', 'Product price',  ['class' => 'required']) }}
                        {{ Form::text('price',  $product->price, ['id'=>'product_price', 'class' => 'form-control', 'placeholder'=>'Product price'] ) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('city', 'City',  ['class' => 'required']) }}
                        {{ Form::text('city', $product->city, ['id'=>'city', 'class' => 'form-control', 'placeholder'=>'city'] ) }}
                    </div>
                     <div class="form-group">
                        {{ Form::label('state', 'State',  ['class' => 'required']) }}
                        {{ Form::text('state', $product->state, ['id'=>'state', 'class' => 'form-control', 'placeholder'=>'state'] ) }}
                    </div>
                     <div class="form-group">
                        {{ Form::label('address', 'Address',  ['class' => 'required']) }}
                        {{ Form::text('address', $product->address, ['id'=>'address', 'class' => 'form-control', 'placeholder'=>'address'] ) }}
                    </div>
              

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <input type="submit" class="btn btn-success" value="Update Product" />
                            <a href="{{ route('myprofile') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection