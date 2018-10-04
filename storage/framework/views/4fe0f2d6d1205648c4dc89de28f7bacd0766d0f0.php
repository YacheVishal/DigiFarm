<?php $__env->startSection('content'); ?>
  <!-- Sidebar -->
<div class="row">
	<div class="col-lg-2">
	  	<nav class="navbar navbar-inverse navbar-fixed-left" style="">
			<ul>
				<li class="list1 active"><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="myprofile">  My Posts</a></li>
			    <li class="list2"><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="post">  Post Ads</a></li>
				<li class="list3"><i class="fas fa-info-circle" style="margin-right: 5px;"></i><a href="myinfo"> My Info</a></li>
				<li class="list4"><i class="far fa-bell" style="margin-right: 5px;"></i><a href="#"> Alerts</a></li>
				<li class="list5"><i class="fas fa-eraser" style="margin-right: 5px;"></i><a href="" data-toggle="modal" data-target="#myModal"> Delete Account</a>
					<div id="myModal" class="modal fade" role="dialog">
					    <div class="modal-dialog">
					       <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
						           <button type="button" class="close" data-dismiss="modal">&times;</button>
						           <h4 class="modal-title" style="color: black;text-align: center;">Are you sure you want to delete account ?</h4>
						        </div>
							    <div class="modal-body">
							      	<center>
									    <button type="button" class="btn btn-danger byes">Yes</button>
									    <button type="button" class="btn btn-success bno" data-dismiss="modal">No</button>
									</center>        
							    </div>
						    </div>
					    </div>
					</div>
				</li>
			</ul>
		</nav>
	</div>  
	<div class="col-lg-10">
	  	<center><h3 style="color: #337AB7;">My Posts</h3></center>
	  	here all posted
	  	 ads will display 
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.lay', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>