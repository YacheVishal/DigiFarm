<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DigiFarm</title>
            <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
          
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <style type="text/css">
             *{
            margin: 0px;
            padding: 0px;
        }
        body{
            margin: 0px;
            padding: 0px;   
        }
        .navbar-brand{
            font-weight: bolder;
            font-family: courier new;
            font-size: 30px;   
        }
        .logo{
            height: 60px;
            width: 20px;
        }
        .f{
            color: #6BA244;
        }
        .d{
            color: grey;
        }
        .fa-chevron-right{
            float: right;
            color: black;
        }
        .list-group-item{
            border-right: none;
        }
        .row{
           /* border-style: solid;
            border-width: 0.5px;
            border-color: grey;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            */
            padding: 25px;
            padding-top: 5px;
            
        }
        .bs-example{
              margin: 10px;
            }

        *{
            padding: 0px;
            margin: 0px;
        }
        .sidebar nav> ul{
            list-style: none;
            
        }
        .sidebar ul >li{
        border-style: solid;
        border-width: 0.2px;
        }
        .navbar{
            margin: 0px;
        }
        .discription{
            color: white;
            font-family: Helvetica;
            z-index: -1;
        }

        .parallax {
            /* The image used */
            background-image: url("image1.jpg");

            /* Set a specific height */
            min-height: 380px; 
         /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
           
        }

        .back-img{
            height: 280px;
        }
        @media (max-width: 768px){
            .back-img{
                height: 220px;
            }
            .discription{
               font-size: 23px;
               color: #F8F8F8;
            }
        }
        /*  image gallery  */
        .veg{
          height: 220px; width: 220px;display: block; margin: 5px;margin-left: 50px;
        }
        .veg:hover {
            box-shadow: 0 0 2px 1px rgba(240, 95, 64, 0.8);
        }
        .fruit{
          height: 220px; width: 220px;display: block;margin: 5px; margin-left: 50px;
        }
        .fruit:hover {
            box-shadow: 0 0 2px 1px rgba(240, 95, 64, 0.8);
        }
        .spice{
         height: 220px; width: 220px;display: block;margin: 5px; margin-left: 50px;
        }
        .spice:hover {
            box-shadow: 0 0 2px 1px rgba(240, 95, 64, 0.8);
        }
        .crop{
         height: 220px; width: 220px;display: block;margin: 5px; margin-left: 50px;
        }
        .crop:hover {
            box-shadow: 0 0 2px 1px rgba(240, 95, 64, 0.8);
        }
        .nursery{
        height: 220px; width: 220px;display: block;margin: 5px;margin-left: 50px;
        }
        .nursery:hover {
            box-shadow: 0 0 2px 1px rgba(240, 95, 64, 0.8);
        }
        .fert{
         height: 220px; width: 220px;display: block;margin: 5px;margin-left: 50px;
        }
        .fert:hover {
            box-shadow: 0 0 2px 1px rgba(240, 95, 64, 0.8);
        }
        .agequip{
        height: 220px; width: 220px;display: block;margin: 5px;margin-left: 50px;
        }
        .agequip:hover {
            box-shadow: 0 0 2px 1px rgba(240, 95, 64, 0.8);
        }
        .cattle{
        height: 220px; width: 220px;display: block;margin: 5px;margin-left: 50px;
        }
        .cattle:hover {
            box-shadow: 0 0 2px 1px rgba(240, 95, 64, 0.8);
        }
        /*  end image gallery */
        /*  post page  */


        /* end post page  */   
    </style>    
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/home" style="padding-left: 0px;"><span class="d">Digi</span><span class="f">Farm</span></a>
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
                                <span style="cursor: none;">Welcome</span> <span style="color: red;text-transform: uppercase;cursor: none;"> <?php echo e(Auth::user()->name); ?> </span> 
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