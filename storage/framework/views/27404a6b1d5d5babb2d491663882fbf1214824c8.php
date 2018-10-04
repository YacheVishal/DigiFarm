<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DigiFarm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" type="text/css" href="image/digifarm2.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><span class="d" style="color: grey;font-weight: bolder;
            font-family: courier new;font-size: 30px;">Digi</span><span class="f" style="color: #6BA244;font-weight: bolder;font-family: courier new;font-size: 30px;">Farm</span></a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            
            <ul class="nav navbar-nav navbar-right">
               <?php if(auth()->guard()->guest()): ?>
                            <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                            <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li> 
                        <?php else: ?>
                            <li class="nav-item" style="">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle">  
                                <span>Welcome</span> <span style="color: red;text-transform: uppercase;"> <?php echo e(Auth::user()->name); ?> </span> 
                                </a>
                            </li>
                            <li style="">
                                
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <strong> <?php echo e(__('Logout')); ?> </strong>
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                
                            </li>
                            <li>
                                <a class="" href="myprofile" role="button" style="padding: 8px;"><button type="button" class="btn btn-warning">My Profile</button></a>
                            </li>
                        <?php endif; ?>
            </ul>
        </div>    
      </div>
    </nav>
    
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main><br>
        <div class="container-fluid footer" style="padding-top: 50px;padding-bottom: 5px; background-color:#F8F8F8; float: bottom; ">
            <label style="float: left;">Developed with By </label>
            <ul class="breadcrumb" style="float: right;">
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Terms & Conditions</a></li>
            </ul>
        </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>