 
<?php $__env->startSection('page_content'); ?>

<div class="row">
    <div class="col-lg-12">
    <!-- Prodcut list -->
    <?php if(!empty($products)): ?>
        
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <?php if(session('message')): ?>
                <div class="alert alert-success"><?php echo e(session('message')); ?></div>
                <?php endif; ?>
                
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
                        <th width="">Price</th>
                        <th width="">City</th>
                        <th width="">State</th>
                        <th width="">Address</th>
                        <th width="30%">Action</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    <?php ( $sno = 1 ); ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="table-text">
                                <div><?php echo e($sno++); ?></div>
                            </td>
                            <td class="table-text">
                                <div><?php echo e($product->category); ?></div>
                            </td>
                            <td class="table-text">
                                <div><?php echo e($product->subcategory); ?></div>
                            </td>
                            <td class="table-text">
                                <div><?php echo e($product->title); ?></div>
                            </td>
                            <td class="table-text">
                                <div><?php echo e($product->description); ?></div>
                            </td>
                            <td class="table-text">
                                <div><?php echo e($product->price); ?></div>
                            </td>
                             <td class="table-text">
                                <div><?php echo e($product->city); ?></div>
                            </td>
                             <td class="table-text">
                                <div><?php echo e($product->state); ?></div>
                            </td>
                             <td class="table-text">
                                <div><?php echo e($product->address); ?></div>
                            </td>
                            <td>
                                <a href="<?php echo e(route('product.show', $product->id)); ?>" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="<?php echo e(route('product.edit', $product->id)); ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="<?php echo e(route('product.delete', $product->id)); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.pageLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>