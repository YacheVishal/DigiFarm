@extends('layouts.lay')

@section('content')

<div class="row">
	<div class="col-lg-2">
	  	<nav class="navbar navbar-inverse navbar-fixed-left" style="">
			<ul>
				<li class="list1"><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="myprofile">  My Profile</a></li>
			    <li class="list2 "><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="post">  Post Ads</a></li>
				<li class="list3 active"><i class="fas fa-info-circle" style="margin-right: 5px;"></i><a href="myinfo"> My Info</a></li>
				<!--<li class="list4"><i class="far fa-bell" style="margin-right: 5px;"></i><a href="#"> Alerts</a></li>-->
				<li class="list5"><i class="fas fa-eraser" style="margin-right: 5px;"></i><a href="" data-toggle="modal" data-target="#myModal"> Delete Account</a>
					<div id="myModal" class="modal fade" role="dialog">
					    <div class="modal-dialog">
					       <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
						           <button type="button" class="close" data-dismiss="modal">&times;</button>
						           <h4 class="modal-title" style="color: black;text-align: center;">Are you sure you want to delete account ?</h4>
						        </div>
							    <div class="modal-body">
							      	<center>
									    <button type="button" class="btn btn-danger byes">Yes</button>
									    <button type="button" class="btn btn-success bno" data-dismiss="modal">No</button>
									</center>        
							    </div>
						    </div>
					    </div>
					</div>
				</li>
			</ul>
		</nav>
	</div>  
	<div class="col-lg-10">
	  	<center><h3 style="color: #337AB7;">My Info</h3></center>
	  	<div class="container-fluid">
	  		<div class="row">
              <form class="form-horizontal">
	  			<div class="col-md-6">
	  				<br>
	  				
					  
					  <div class="form-group">
					    <label for="inputName3" class="col-sm-3 control-label">Name</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputName3" placeholder="Name">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputMobile3" class="col-sm-3 control-label">Mobile-No</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputEmail3" placeholder="Mobile-No">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputState3" class="col-sm-3 control-label">State</label>
					    <div class="col-sm-9">
					      <select class="form-control">
                            <option value="0" selected>All Location</option>
                            <option value="1">Assam</option>
                            <option value="2">Chennai</option>
                            <option value="3">Gujrat</option>
                            <option value="4">Haryana</option>
                            <option value="5">Karnataka</option>
                            <option value="6">Kerla</option>
                            <option value="7">Maharashtra</option>
                            <option value="8">Punjab</option>
                        </select>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputCity3" class="col-sm-3 control-label">City</label>
					    <div class="col-sm-9">
					      <select class="form-control">
                            <option value="0" selected>All</option>
                            <option value="1">A</option>
                            <option value="2">C</option>
                            <option value="3">G</option>
                            <option value="4">H</option>
                            <option value="5">K</option>
                            <option value="6">K</option>
                        </select>
					    </div>
					  </div>
				      <div class="form-group">
					    <label for="inputAddress3" class="col-sm-3 control-label">Address</label>
					    <div class="col-sm-9">
					      <textarea class="form-control" rows="3" id="Address"></textarea>
					    </div>
					  </div> 
					  
					  
					
	  			</div>
	  			<div class="col-md-6">
	  				<br>
	  				<center><img class="img-responsive" src="image/img.jpg" alt="imgnotfound" style="height: 150px;width: 150px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></center>
	  				<br>
	  				<center><a href="#">Update New</a></center>
	  			</div>
                <br>
                <div class="form-group">
					    <div class="col-sm-12">
					      <center><button type="submit" class="btn btn-success btnsub"  style="">Submit</button></center>
					    </div>
			    </div>

	  		  </form> 	
	  		</div>
	  	</div>
	</div>
</div>

@endsection