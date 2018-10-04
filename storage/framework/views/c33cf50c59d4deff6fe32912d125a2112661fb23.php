<?php $__env->startSection('content'); ?>
<div class="">
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Confirm Delete Record <a href="<?php echo e(route('myinfo.index')); ?>" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p>Are you sure you want to delete <strong><?php echo e($user->name); ?></strong></p>

                    <form method="POST" action="<?php echo e(route('myinfo.destroy', ['id' => $user->id])); ?>">
                        <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger">Yes I'm sure. Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.lay', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>