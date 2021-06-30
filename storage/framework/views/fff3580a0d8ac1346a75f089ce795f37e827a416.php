<?php $__env->startSection('content'); ?>

<?php if(Session::has('success')): ?>
<p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('success')); ?></p>
<?php endif; ?>
<div class="container">
	<h1 class ="my-5">Všechna zadání:</h1>
	
	<?php $__currentLoopData = $assigments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('includes.assignmentcard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\TW_Zapletal\resources\views/showall/index.blade.php ENDPATH**/ ?>