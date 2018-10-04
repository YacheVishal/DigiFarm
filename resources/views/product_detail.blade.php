@extends('layouts.lay1')

@section('content')
<div class="bs-example">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li class="active">Products_details</li>
		</ul>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"><img class="img-responsive" src="/storage/upload/{{$products->file}}" alt="img not found"></div>
		<div class="col-md-8">
			<h2 style="padding-left: 100px;"><b>{{ $products->title }}</b></h2>
			<br><br>
			<p style="font-family: verdana;padding-left: 100px;"><b>Price :</b>{{ $products->price}}<i class="fas fa-rupee-sign"></i>/KG</p>
			<p style="font-family: verdana;padding-left: 100px;"><b>Farmer Name : </b>{{ $products->user->name}}</p>
			<p style="font-family: verdana;padding-left: 100px;"><b>Available Quantity :</b>{{ $products->quantity}}KG </p>
			<p style="font-family: verdana;padding-left: 100px;"><b>Contact No :</b> {{ $products->user->mobile_no}} </p>
		</div>
	</div>
	<hr>
	<div class="container">
		<h4><b style="color: #CC6600">Product Details</b></h4>
		<hr>
		{{ $products->description}}
	</div>
</div><hr>

<div class="container">
	<div class="comment-form container">
		<h3 style="font-family: verdana"><b> Comment Section</b></h3>
		<!--Comment display -->
		@foreach($products->comments as $comment)
            <div class="comment">
	            <p><strong>Name : </strong><span style="color: #0066C0; ">{{$comment->name}}</span></p>
	            <p><strong>Comment : </strong>{{$comment->comment}}</p>
	            <hr style="width: 80%;text-align: center;">	
            </div>
		@endforeach
		<br><br>

         <!--Comment Form -->
		{{ Form::open(['route' =>['comments.store',$products->id], 'method' => 'POST']) }}
		{{ csrf_field() }}
           <div class="container-fluid">
           	 <div class="container-fluid">
           	 	<div class="row">
           	 	   <div class="col-md-6">
		           	 	{{ Form::label('name',"Name:") }}
		           	 	{{ Form::text('name',null, ['class' => 'form-control']) }}
		           	</div>
		           	<div class="col-md-6">
		           	 	{{ Form::label('email',"Email:") }}
		           	 	{{ Form::text('email',null, ['class' => 'form-control']) }}
		           	</div>	
           	 	</div>	
           	 </div>
                <div class="col-md-12">
	           	 	{{ Form::label('comment',"Comment:") }}
	           	 	{{ Form::textarea('comment',null, ['class' => 'form-control', 'rows' => '5']) }}
	           	 	<br>

	           	 	{{ Form::submit('Add Comment',['class' => 'btn btn-success btn-block']) }}
	            </div>
           </div>
		{{ Form::close() }}
	</div>
</div>
@endsection