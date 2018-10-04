 
<?php $__env->startSection('page_content'); ?>

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
                    <th width="30%">Category</th><td>:</td><td width="69%"><?php echo e($product->category); ?></td>
                </tr>
                <tr>
                    <th width="30%">Sub Category</th><td>:</td><td width="69%"><?php echo e($product->subcategory); ?></td>
                </tr>
                <tr>
                    <th width="30%">Title</th><td>:</td><td width="69%"><?php echo e($product->title); ?></td>
                </tr>
                <tr>
                    <th>Description</th><td>:</td><td><?php echo e($product->description); ?></td>
                </tr>
                <tr>
                    <th width="30%">Quantity</th><td>:</td><td width="69%"><?php echo e($product->quantity); ?></td>
                </tr>
                <tr>
                    <th width="30%">Price</th><td>:</td><td width="69%"><?php echo e($product->price); ?></td>
                </tr>
                <tr>
                    <th width="30%">City</th><td>:</td><td width="69%"><?php echo e($product->city); ?></td>
                </tr>
                <tr>
                    <th width="30%">State</th><td>:</td><td width="69%"><?php echo e($product->state); ?></td>
                </tr>
                <tr>
                    <th width="30%">Address</th><td>:</td><td width="69%"><?php echo e($product->address); ?></td>
                </tr>
                <tr>
                    <th>Created At</th><td>:</td><td><?php echo e($product->created_at); ?></td>
                </tr>
            </table>
            </div>
 
        </div>
 
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>