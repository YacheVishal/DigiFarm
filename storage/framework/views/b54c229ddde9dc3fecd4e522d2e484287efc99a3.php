 

<?php $__env->startSection('content'); ?>
<div class="container">
    
    <div class="bs-example">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Products</li>
		</ul>
    </div>
	<center><h2 style="margin: 20px;">Vegetables</h2></center>	
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 panel panel-default" style="margin: 0px;padding: 0px;">
			<h3 class="panel-heading" style="margin-top: 0px;max-height: 37px;padding: 5px;"><center>Filter By </center></h3>
			<form class="panel-body" action="post" style="padding: 0px;">
				<center><label>Price Range:</label></center>
				<div class="row">
				    <center><label>Min:</label><input type="text" name="" style="width: 33%;">
					       <label>Max:</label><input type="text" name="" style="width: 33%;">
				    </center>
				</div>
				<div class="">
					<center>
						<label style="padding-left: 2px;">City: </label>
						<input list="city" name="city" style="width: 79%;">
						  <datalist id="city">
						    <option value="a">
						    <option value="1">
		                    <option value="2">
		                    <option value="3">
		                    <option value="4">
		                    <option value="5">
		                    <option value="6">
						  </datalist>
					</center>	  
				</div><br>
				<div class="">
					<center>
						<label>State: </label>
						<input list="states" name="states" style="width: 77%;">
						  <datalist id="states">
						    <option value="All Location">
		                    <option value="Assam">
		                    <option value="Chennai">
		                    <option value="Gujrat">
		                    <option value="Haryana">
		                    <option value="Karnataka">
		                    <option value="Kerla">
		                    <option value="Maharashtra">
		                    <option value="Punjab">
						  </datalist>
					</center>	  
				</div><br>
				<center><button type="submit" class="btn btn-success" style="margin-bottom: 10px;">Submit</button></center>
			</form>
		</div>	 					
		<div class="col-md-10 panel panel-default">
			<div class="row panel-heading" style="max-height: 30px;max-height: 37px;">
				<label>Sort By :</label><span style="color:#2874F0;margin-left: 20px;cursor: pointer;"><b>Price--Low to High</b></span>   
				<span style="margin-left: 20px;cursor: pointer;"><b>Price--High to Low</b></span>
			</div>
			<?php echo e(csrf_field()); ?>

			<div class="row panel-body" style="cursor: pointer;">
				
                <table>
				<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<center> <img class="img-responsive" src="/storage/upload/<?php echo e($info->file); ?>"></center>
					<center><label><?php echo e($info->subcategory); ?></label></center>
					<center>Farmer Name: <?php echo e($info->name); ?></center>
					<center><i class="fas fa-rupee-sign"></i>:<?php echo e($info->price); ?>Rs</center>
					<center>Location:<?php echo e($info->city); ?></center><br>
					<center><button type="button" class="btn btn-warning"><a href="<?php echo e(url('/product',$info->id)); ?>" style="color: white;text-decoration: none;">Product Details</a></button>
					</center>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
            </div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.lay1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>