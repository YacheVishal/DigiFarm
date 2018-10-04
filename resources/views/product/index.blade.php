@extends('layouts.pageLayout')
@extends('layouts.app')
 
@section('page_content')

<div class="row">
    <div class="col-lg-12">
    <!-- Prodcut list -->
    @if(!empty($products))
        
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                
                <div class="pull-left">
                    <h2>Product List </h2>
                </div>
             
                <br/> <br/>
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="5%">Sno</th>
                        <th width="20%">Category</th>
                        <th width="20%">Sub Category</th>
                        <th width="20%">Title</th>
                        <th width="">Description</th>
                        <th width="">Quantity</th>
                        <th width="">Price</th>
                        <th width="">City</th>
                        <th width="">State</th>
                        <th width="">Address</th>
                        <th width="30%">Action</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @php( $sno = 1 )
                    @foreach($products as $product)
                        <tr>
                            <td class="table-text">
                                <div>{{ $sno++ }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->category}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->subcategory}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->title}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->description}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->quantity}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->price}}</div>
                            </td>
                             <td class="table-text">
                                <div>{{$product->city}}</div>
                            </td>
                             <td class="table-text">
                                <div>{{$product->state}}</div>
                            </td>
                             <td class="table-text">
                                <div>{{$product->address}}</div>
                            </td>
                            <td>
                                <a href="{{ route('product.show', $product->id) }}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection