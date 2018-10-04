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
                    <form class="form-signin">
                    <input type="text" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Forgot Password? </a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="#" class="text-center new-account">Create an account </a>
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