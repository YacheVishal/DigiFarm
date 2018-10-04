<?php $__env->startSection('content'); ?>
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
                              <form action="<?php echo e(URL::to('/search')); ?>" method="POST" class="form-horizontal row" role="form">
                              <?php echo e(csrf_field()); ?>

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
            <?php if(isset($products)): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="<?php echo e(url('/product',$product->id)); ?>"><img src="/storage/upload/<?php echo e($product->file); ?>" alt="img not found" style="height: 200px;width: 200px;"></a>
              <a href="<?php echo e(url('/product',$product->id)); ?>"><center><div class="name"><?php echo e($product->title); ?></div></center></a>
              <a href="<?php echo e(url('/product',$product->id)); ?>"><center><div><?php echo e($product->subcategory); ?></div></center></a>
              <a href="<?php echo e(url('/product',$product->id)); ?>"><center><div>₹<?php echo e($product->price); ?></div></center></a>
              <a href="<?php echo e(url('/product',$product->id)); ?>"><center><div><?php echo e($product->city); ?></div></center></a>  
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php elseif(isset($message)): ?>
                <p> <?php echo e($message); ?> </p>
                <?php endif; ?>
        </div>        
      </div>      
    </div>
      
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>