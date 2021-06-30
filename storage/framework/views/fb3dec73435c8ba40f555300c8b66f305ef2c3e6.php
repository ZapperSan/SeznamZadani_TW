<?php $__env->startSection('content'); ?>
<div class="container">
	<h1 class="my-5">Úprava zadání s ID:</h1>
	<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <form action="<?php echo e(route('mainpage.update', $assignment->assignmentID)); ?>" method="post">
        <?php echo csrf_field(); ?>
		  <?php echo e(method_field('PUT')); ?>

		<div class="row">
			<div class="col-6">
					<div class="form-group">
						  <label for="assignmentName">Název zadání</label>
						  <input type="text"
							class="form-control" name="assignmentName" id="assignmentName" aria-describedby="helpId" value= <?php echo e($assignment->assignmentName); ?>>
					</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="assignmentNewSubject">Předmět</label>
					<select class="form-control" name="assignmentSubject" id="assignmentSubject" aria-describedby="helpId" value= <?php echo e($assignment->assignmentSubject); ?>>
						<?php
							foreach ($subjects as $value)
								{
									print "<option>$value->subjectID</option>";
								}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="assignmentNewDesc">Popis úkolu</label>
			<textarea class="form-control" rows="4" name="assignmentDesc" id="assignmentDesc" aria-describedby="helpId"><?php echo e($assignment->assignmentDesc); ?></textarea>
		</div>
        
		<div class="row">
			<div class="col-4">
				<div class="form-group">
					<label for="assignmentNewDeadline">Deadline</label>
					<input type="date"
							class="form-control" name="assignmentDeadline" id="assignmentDeadline" aria-describedby="helpId" value= <?php echo e($assignment->assignmentDeadline); ?>>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="assignmentDiff">Obtížnost zadání</label>
					<select class="form-control" name="assignmentDiff" id="assignmentDiff" aria-describedby="helpId">
						<option value="1">Primitivní</option>
						<option value="2">Jednoduché</option>
						<option value="3">Zvládnutelné</option>
						<option value="4">Náročné</option>
						<option value="5">Bůh s námi</option>
					</select>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="assignmentLink">Odkaz</label>
					<input type="textarea"
							class="form-control" name="assignmentLink" id="assignmentLink" aria-describedby="helpId" value= <?php echo e($assignment->assignmentLink); ?>>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-11">
				<button type="submit" class="btn btn-secondary">Uložit do databáze</button>
			</div>
		</div>
    </form>
				
			<div class="col-1">
				<form action="<?php echo e(route('mainpage.destroy', $assignment->assignmentID)); ?>" method="post">
					<?php echo csrf_field(); ?>
					<?php echo e(method_field('DELETE')); ?>

					<button type="submit" class="btn btn-danger">Smazat</button>
				</form>
			</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\TW_Zapletal\resources\views/mainpage/edit.blade.php ENDPATH**/ ?>