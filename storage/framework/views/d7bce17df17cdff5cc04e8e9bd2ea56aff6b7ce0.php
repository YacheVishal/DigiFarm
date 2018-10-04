<?php $__env->startSection('content'); ?>
<div class="bs-example">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li class="active">Products_details</li>
		</ul>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"><img class="img-responsive" src="/storage/upload/<?php echo e($products->file); ?>" alt="img not found"></div>
		<div class="col-md-8">
			<h2 style="padding-left: 100px;"><b><?php echo e($products->title); ?></b></h2>
			<br><br>
			<p style="font-family: verdana;padding-left: 100px;"><b>Price :</b><?php echo e($products->price); ?><i class="fas fa-rupee-sign"></i>/KG</p>
			<p style="font-family: verdana;padding-left: 100px;"><b>Farmer Name : </b><?php echo e($products->user->name); ?></p>
			<p style="font-family: verdana;padding-left: 100px;"><b>Available Quantity :</b><?php echo e($products->quantity); ?>KG </p>
			<p style="font-family: verdana;padding-left: 100px;"><b>Contact No :</b> <?php echo e($products->user->mobile_no); ?> </p>
		</div>
	</div>
	<hr>
	<div class="container">
		<h4><b style="color: #CC6600">Product Details</b></h4>
		<hr>
		<?php echo e($products->description); ?>

	</div>
</div><hr>

<div class="container">
	<div class="comment-form container">
		<h3 style="font-family: verdana"><b> Comment Section</b></h3>
		<!--Comment display -->
		<?php $__currentLoopData = $products->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="comment">
	            <p><strong>Name : </strong><span style="color: #0066C0; "><?php echo e($comment->name); ?></span></p>
	            <p><strong>Comment : </strong><?php echo e($comment->comment); ?></p>
	            <hr style="width: 80%;text-align: center;">	
            </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<br><br>

         <!--Comment Form -->
		<?php echo e(Form::open(['route' =>['comments.store',$products->id], 'method' => 'POST'])); ?>

		<?php echo e(csrf_field()); ?>

           <div class="container-fluid">
           	 <div class="container-fluid">
           	 	<div class="row">
           	 	   <div class="col-md-6">
		           	 	<?php echo e(Form::label('name',"Name:")); ?>

		           	 	<?php echo e(Form::text('name',null, ['class' => 'form-control'])); ?>

		           	</div>
		           	<div class="col-md-6">
		           	 	<?php echo e(Form::label('email',"Email:")); ?>

		           	 	<?php echo e(Form::text('email',null, ['class' => 'form-control'])); ?>

		           	</div>	
           	 	</div>	
           	 </div>
                <div class="col-md-12">
	           	 	<?php echo e(Form::label('comment',"Comment:")); ?>

	           	 	<?php echo e(Form::textarea('comment',null, ['class' => 'form-control', 'rows' => '5'])); ?>

	           	 	<br>

	           	 	<?php echo e(Form::submit('Add Comment',['class' => 'btn btn-success btn-block'])); ?>

	            </div>
           </div>
		<?php echo e(Form::close()); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.lay1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>