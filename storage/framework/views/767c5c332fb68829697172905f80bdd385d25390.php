<?php $__env->startSection('content'); ?>
<div class="container">
      <div class="bs-example">
          <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Registration</li>
          </ul>
      </div>
        <center><h2 style="font-family: sans-serif;">Registration Form</h2></center>
        <div class="row">
            <div class="col-sm-8">
                <div class="account-wall">
                    <form class="form-signin" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                      <label>Enter Name:</label><input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" type="name" name="name" placeholder="Name" value="<?php echo e(old('name')); ?>" required autofocus>
                                 <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                 <?php endif; ?>


                       <label>Enter Mobile Number:</label><input  id="mobile_no" type="text" class="form-control" name="mobile_no" required placeholder="Mobile no"> 

                        <label>Enter Email Id:</label><input type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>"  placeholder="Email" optional>
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

                        <label>Enter password:</label><input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required placeholder="Password" required>


                        <label>Confirm password:</label><input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required><br>


                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign up</button>
                        <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>
                        
                    </form>
                </div>
               
            </div>
            <div class="col-sm-4 col-md-4 part2">
              <span style="">
              
              <img class="img-responsive" src="image/logo1.png" style="margin: 100px;">
              
              </span>
            </div>
        </div>
        <br>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>