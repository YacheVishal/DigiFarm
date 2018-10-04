<?php $__env->startSection('content'); ?>
<div class="container" style="background-image: url(image/bg2.png); background-position: bottom;background-repeat: no-repeat;padding-bottom: 120px; width: 100%;">
    <div class="container-fluid">
        <div class="col-md-4 non1" style=""><img src="image/tree.png" style="float: left;padding-left: 0px;margin-left: 0px;padding-top: 25px;"></div>
        <div class="col-md-7">
            <div class="bs-example">
                  <ul class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Post</li>
                  </ul>
            </div>
            <div class="panel-body">
                <?php echo e(Form::open(array('url' => route('product.insert'), 'method' => 'POST', 'name'=>'fk-input-form', 'id'=>'fs-forms' ,'enctype'=>'multipart/form-data'))); ?>

                <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <?php echo e(Form::label('category', 'Product category',  ['class' => 'required'])); ?>

                       <!-- <?php echo e(Form::text('category', null, ['id'=>'product_category', 'class' => 'form-control', 'placeholder'=>'Product Category'] )); ?> -->
                        <select name="category" id="product_category" class="form-control"> 
                            <option>select any category</option>
                            <option value="fruit">fruit</option>
                            <option value="Vegetables">Vegetables</option>
                            <option value="crop">crop</option>
                            <option value="Fertilizer">Fertilizer</option>
                            <option value="spices & seeds">spices & seeds</option>
                            <option value="cattels">cattels</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('subcategory', 'Product subcategory',  ['class' => 'required'])); ?>

                       <!-- <?php echo e(Form::text('subcategory', null, ['id'=>'product_subcategory', 'class' => 'form-control', 'placeholder'=>'Product Subcategory'] )); ?> -->

                       <select name="subcategory" id="product_subcategory" class="form-control"> 
                            <option>select any subcategory</option>
                            <option value="Mango">Mango</option>
                            <option value="Banana">Banana</option>
                            <option value="Tomato">Tomato</option>
                            <option value="Potato">Potato</option>
                            <option value="Rice">Rice</option>
                            <option value="Fertilizer">Fertilizer</option>
                            <option value="Cow">Cow</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('title', 'Product title',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('title', null, ['id'=>'product_title', 'class' => 'form-control', 'placeholder'=>'Product Title'] )); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('description', 'Description',  ['class' => 'required'])); ?>

                        <?php echo e(Form::textarea('description', null, ['id'=>'description', 'class' => 'form-control', 'placeholder'=>'Description','rows' => '7' ] )); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('quantity', 'Product quantity',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('quantity', null, ['id'=>'product_quantity', 'class' => 'form-control', 'placeholder'=>'Product quantity'] )); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('price', 'Product price',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('price', null, ['id'=>'product_price', 'class' => 'form-control', 'placeholder'=>'Product price'] )); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('city', 'City',  ['class' => 'required'])); ?>

                        <!--<?php echo e(Form::text('city', null, ['id'=>'city', 'class' => 'form-control', 'placeholder'=>'city'] )); ?> -->
                        <select name="city" id="city" class="form-control"> 
                            <option>select any 1</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Navi-Mumbai">Navi-Mumbai</option>
                        </select>

                    </div>
                     <div class="form-group">
                        <?php echo e(Form::label('state', 'State',  ['class' => 'required'])); ?>

                      <!--  <?php echo e(Form::text('state', null, ['id'=>'state', 'class' => 'form-control', 'placeholder'=>'state'] )); ?> -->
                        <select name="state" id="state" class="form-control"> 
                            <option>select any 1</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Maharashtra">Maharashtra</option>
                        </select>

                    </div>
                     <div class="form-group">
                        <?php echo e(Form::label('address', 'Address',  ['class' => 'required'])); ?>

                        <?php echo e(Form::text('address', null, ['id'=>'address', 'class' => 'form-control', 'placeholder'=>'address'] )); ?>

                    </div>
                    <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Picture</label>
                            <div class="col-md-6">
                                <input type="file" id="picture" name="file" required >
                            </div>
                        </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <input type="submit" class="btn btn-success" value="Add Product" />
                            <a href="<?php echo e(route('myprofile')); ?>" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
</div>
<?PHP
  if(!empty($_FILES['file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>