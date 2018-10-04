<?php $__env->startSection('content'); ?>
  
    <div class="container">
      <div class="bs-example">
          <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Login</li>
          </ul>
      </div>
        <center><h2 style="font-family: sans-serif;">Login Form</h2></center>
        <div class="row">
            
            <div class="col-sm-8">
                <div class="account-wall">
                    <form class="form-signin" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>


                    <input type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email or Mobile No" required>
                               <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

                    <input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="Password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
 


                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Remember Me')); ?>

                        
                    </label>
                    <a href="<?php echo e(route('password.request')); ?>" class="pull-right need-help">Forgot Password? </a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="<?php echo e(route('register')); ?>" class="text-center new-account">Create an account</a>
            </div>
            <div class="col-sm-4 col-md-4 part2">
              <center>
              <img class="img-responsive" src="image/logo1.png">
              </center>
            </div>
        </div>
        <br>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>