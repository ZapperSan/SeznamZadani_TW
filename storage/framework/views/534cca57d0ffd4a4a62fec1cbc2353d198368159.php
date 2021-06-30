<?php echo $__env->make('includes.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<h1 class ="my-5">Vítejte na online přehledu zadání</h1>
	
	<h3 class ="my-5">Zadání s nejbližším deadlinem:</h3>
	<?php echo $__env->make('includes.assignmentcard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\TW_Zapletal\resources\views/mainpage/index.blade.php ENDPATH**/ ?>