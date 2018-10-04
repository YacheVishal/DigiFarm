 
<?php $__env->startSection('page_content'); ?>

<div class="container">
    
    <div class="col-lg-offset-3 col-lg-6" >
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Update Product details
            </div>
            <div class="panel-body">
                <?php echo e(Form::open(array('url' => route('product.update', $product->id), 'method' => 'POST', 'name'=>'fk-input-form', 'id'=>'fs-forms'))); ?>

                    <div class="form-group">

                         <div class="form-group">
                        <?php echo e(Form::label('category', 'Product category',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('category',  $product->category, ['id'=>'product_category', 'class' => 'form-control', 'placeholder'=>'Product Category'] )); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('subcategory', 'Product subcategory',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('subcategory', $product->subcategory, ['id'=>'product_subcategory', 'class' => 'form-control', 'placeholder'=>'Product Subcategory'] )); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('title', 'Product title',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('title',  $product->title, ['id'=>'product_title', 'class' => 'form-control', 'placeholder'=>'Product Title'] )); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('description', 'Description',  ['class' => 'required'])); ?>

                        <?php echo e(Form::textarea('description', $product->description, ['id'=>'description', 'class' => 'form-control', 'placeholder'=>'Description'] )); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('quantity', 'Product quantity',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('quantity',  $product->quantity, ['id'=>'product_quantity', 'class' => 'form-control', 'placeholder'=>'Product quantity'] )); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('price', 'Product price',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('price',  $product->price, ['id'=>'product_price', 'class' => 'form-control', 'placeholder'=>'Product price'] )); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('city', 'City',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('city', $product->city, ['id'=>'city', 'class' => 'form-control', 'placeholder'=>'city'] )); ?>

                    </div>
                     <div class="form-group">
                        <?php echo e(Form::label('state', 'State',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('state', $product->state, ['id'=>'state', 'class' => 'form-control', 'placeholder'=>'state'] )); ?>

                    </div>
                     <div class="form-group">
                        <?php echo e(Form::label('address', 'Address',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('address', $product->address, ['id'=>'address', 'class' => 'form-control', 'placeholder'=>'address'] )); ?>

                    </div>
              

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <input type="submit" class="btn btn-success" value="Update Product" />
                            <a href="<?php echo e(route('myprofile')); ?>" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>