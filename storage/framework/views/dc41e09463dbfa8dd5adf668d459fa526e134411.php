<?php $__env->startSection('content'); ?>
<div class="container">
    
    <div class="bs-example">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Products</li>
		</ul>
    </div>

	<center><h2>Products</h2></center>
	<div class="row">
		<div class="col-md-4 dropdown" style="padding: 0px;">
		    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu">
		      <li><a href="#">HTML</a></li>
		      <li><a href="#">CSS</a></li>
		      <li><a href="#">JavaScript</a></li>
		    </ul>
		</div>
		<div class=" col-md-4 dropdown" style="padding: 0px;">
		    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu">
		      <li><a href="#">HTML</a></li>
		      <li><a href="#">CSS</a></li>
		      <li><a href="#">JavaScript</a></li>
		    </ul>
		</div>
		<div class="col-md-4 dropdown" style="padding: 0px;">
		    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu">
		      <li><a href="#">HTML</a></li>
		      <li><a href="#">CSS</a></li>
		      <li><a href="#">JavaScript</a></li>
		    </ul>
		</div>
	</div>
	<div class="container-fluid content">
       <h3><center>content will come here</center></h3>
       <div class="col-md-4">
       	a
       </div>
       <div class="col-md-4">
       	b
       </div>
       <div class="col-md-4">
       	c
       </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>