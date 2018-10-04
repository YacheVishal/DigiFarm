<?php $__env->startSection('content'); ?>

<div class="container-fliud" style="background-image: url(image/bg2.png); background-position: bottom;background-repeat: no-repeat;padding-bottom: 120px;">
	<div class="row" >
		<div class="col-md-3" ></div>
		<div class="col-md-6">
			<div class="bs-example">
		          <ul class="breadcrumb">
		              <li><a href="#">Home</a></li>
		              <li class="active">Post</li>
		          </ul>
		    </div>
			<form action="/action_page.php">
				    <center><h3><STRONG> General Info</STRONG></h3></center>
				    <center><hr id="info_line"></center>
				    <div class="row">
				      <div class="col-25">
				        <label for="Categories">Categories</label>
				      </div>
				      <div class="col-75">
				        <select class="form-control">
                            <option value="0" selected>All Categories</option>
                            <option value="1">Vegetables</option>
                            <option value="2">Fruits</option>
                            <option value="3">Spices & Seeds</option>
                            <option value="4">Crops</option>
                            <option value="5">Nursery</option>
                            <option value="6">Fertilizers</option>
                        </select>
                        <select class="form-control select2">
                            <option value="0" selected>Sub Categories</option>
                            <option value="1">Vegetables</option>
                            <option value="2">Fruits</option>
                            <option value="3">Spices & Seeds</option>
                            <option value="4">Crops</option>
                            <option value="5">Nursery</option>
                            <option value="6">Fertilizers</option>
                        </select>
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="title">Title</label>
				      </div>
				      <div class="col-75">
				        <input type="text" id="" name="" placeholder="">
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="description">Description</label>
				      </div>
				      <div class="col-75">
				        <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="description">Price</label>
				      </div>
				      <div class="col-75 input-group">
				        <input type="text" class="form-control" name="" placeholder="In Rupees">
				        <span class="input-group-addon">Rs</span>
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="photo" id="">Photo </label>
				      </div>
				      <div class="col-75">
				        <input type="file" name="fileupload" value="fileupload" id="fileupload">
				        <a href="">Remove </a>  <a href="">Add more</a>
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="State">State</label>
				      </div>
				      <div class="col-75">
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
				    <div class="row">
				      <div class="col-25">
				        <label for="City">City</label>
				      </div>
				      <div class="col-75">
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
				    <div class="row">
				      <div class="col-25">
				        <label for="description">Address</label>
				      </div>
				      <div class="col-75">
				        <input type="text" name=""address>
				      </div>
				    </div>
				    <div class="row">
				      <center><input type="submit" value="Submit"></center>
				    </div>
				</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>