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
                    <form class="form-signin">
                      <label>Enter Name:</label><input class="form-control" type="name" name="" placeholder="Name">
                      <label>Enter Mobile Number:</label><input class="form-control" type="" name="" placeholder="Mobile no">
                        <label>Enter Email Id:</label><input type="text" class="form-control" placeholder="Email" required autofocus>
                        <label>Enter password:</label><input type="password" class="form-control" placeholder="Password" required>
                        <label>Confirm password:</label><input type="password" class="form-control" placeholder="Confirm Password" required><br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign up</button>
                        <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>
                        
                    </form>
                </div>
                <a href="#" class="text-center new-account">Create an account </a>
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