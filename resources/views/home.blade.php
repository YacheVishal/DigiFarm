@extends('layouts.app')

@section('content')
    <div class="container-fluid " style="background-image: url(image/image1.jpg);background-repeat: no-repeat; background-position: center; background-size:cover; height: 280px; ">
      <center><p ><h2 class="discription">This is the place where Farmer and Retailer directly Interact </h2></p></center>
      <br><br><br><br><br><br>
      <center>
          <div class="row">
            <div class="col-md-12">
                    <div class="input-group" id="adv-search">
                       <!-- <input type="text" class="form-control" placeholder="Search for Product" /> -->
                        <div class="input-group-btn">
                            <div class="row" role="group">
                              <form action="{{URL::to('/search')}}" method="POST" class="form-horizontal row" role="form">
                              {{ csrf_field() }}
                              <div class="row">
                              <input type="text" class="form-control" placeholder="Search for Product / name/ city / category" name="q"><span class="input-group-btn"></span><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span></button>  
                              </div>
                              </form>         
                            </div>
                        </div>
                    </div>
            </div>
          </div>    
      </center>
    </div>
    <div class="container" style="padding-top: 10px;">
      <center><h3  style="color: black;">Our Category<hr style="border-color:#F05F40; width: 20%; border-width: 2px;"></h3></center>
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 veg" style=" ">
          <a href="product_vegetable"><img class="img-responsive" src="image/vege.jpg" style="width:180px; height: 140px; float: center; margin: 0px;padding: 0px;" ></a>
          <center><h3>Vegetables</h3></center>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 fruit" style=" ">
          <a href="product_fruit"><img class="img-responsive" src="image/fruit1.jpg" style="width:180px; height: 140px; float: center; margin: 0px;padding: 0px;"></a>
          <center><h3>Fruits</h3></center>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 spice" style=" ">
          <a href="product_spicesandseeds"><img class="img-responsive" src="image/spices&seeds.jpg" style="width:180px; height: 140px; float: center; margin: 0px;padding: 0px;"></a>
          <h3>Spices & Seeds</h3>
        </div>
        <div class="col-lg-36 col-md-12 col-sm-12 col-xs-12 crop"  style=" ">
          <a href="product_crops"><img class="img-responsive" src="image/crops.jpg" style="width:180px; height: 140px; float: center; margin: 0px;padding: 0px;"></a>
          <center><h3>Crops</h3></center>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">  
        <div class="col-lg-3 nursery"  style=" ">
          <a href="product_nursery"><img class="img-responsive" src="image/nursery.jpg" style="width:180px; height: 140px; float: center; margin: 0px;padding: 0px;"></a>
          <center><h3>Nursery</h3></center>
        </div>
        <div class="col-lg-3 fert"  style="">
          <a href="product_fertilizer"><img class="img-responsive" src="image/fertilizers.jpg" style="width:180px; height: 140px; float: center; margin: 0px;padding: 0px;"></a>
          <center><h3>Fertilizers</h3></center>
        </div>
        <div class="col-lg-3 agequip"  style="">
          <a href="product_equipment"><img class="img-responsive" src="image/agri-equipment.jpg" style="width:180px; height: 140px; float: center; margin: 0px;padding: 0px;"></a>
          <center><h3>Equipments</h3></center>
        </div>
        <div class="col-lg-3 cattle"  style="">
          <a href="product_cattels"><img class="img-responsive" src="image/cattels.jpg" style="width:180px; height: 140px; float: center; margin: 0px;padding: 0px;"></a>
          <center><h3>Cattels</h3></center>
        </div>
      </div>    
    </div> 
    <div class="container">
      <center><h3  style="color: black;">Our latest Products<hr style="border-color:#F05F40; width: 20%; border-width: 2px;"></h3></center>
      <div class="">
        <div class="">
            @if(isset($products))
            @foreach($products as $product)
              <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{ url('/product',$product->id) }}"><img src="/storage/upload/{{$product->file}}" alt="img not found" style="height: 200px;width: 200px;"></a>
              <a href="{{ url('/product',$product->id) }}"><center><div class="name">{{$product->title}}</div></center></a>
              <a href="{{ url('/product',$product->id) }}"><center><div>{{$product->subcategory}}</div></center></a>
              <a href="{{ url('/product',$product->id) }}"><center><div>₹{{$product->price}}</div></center></a>
              <a href="{{ url('/product',$product->id) }}"><center><div>{{$product->city}}</div></center></a>  
              </div>
            @endforeach
            @elseif(isset($message))
                <p> {{$message}} </p>
                @endif
        </div>        
      </div>      
    </div>
      
    </div>

@endsection
