<?php $__env->startSection('custom-styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('error_message')): ?>
        <div class="col-md-12">
            <div class="alert alert-danger">
                <?php echo e(session('error_message')); ?>

            </div>
        </div>
    <?php endif; ?>

    <?php if(session('success_message')): ?>
        <div class="col-md-12">
            <div class="alert alert-success">
                <?php echo e(session('success_message')); ?>

            </div>
        </div>
    <?php endif; ?>

    <?php if($errors->count() > 0): ?>
        <div class="col-md-12">
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
    <div id="app">
        <course-notify-users :courseid="<?php echo e($course->id); ?>"></course-notify-users>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('custom-scripts'); ?>
    <script src="<?php echo e(url('/js/app.js')); ?>"></script>
    <script src="<?php echo e(url('/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>