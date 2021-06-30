<div class="card border-secondary mb-3" style="border:3px solid #8da68b;">
				<div class="d-flex justify-content-between" style="background-color: #d4ddd3; font-size: 110%;">
						<div class="col-4">
						  <div class="form-group">
							  <h3 class="text-center">Zadání: <?php echo e($assignment->assignmentName); ?></h3>
							</div>
						</div>
						<div class="col-3"></div>
						
						<div class="col-3">
						    <div class="form-group">
								<h3 class="text-center">Předmět: <?php echo e($assignment->assignmentSubject); ?></h3>
							</div>
						</div>
				</div>	
				
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						 <div class="form-group">
							<text class="text-center"><?php echo e($assignment->assignmentDesc); ?></text>
						</div>
					</div>
					<div class="col-1"></div>
				</div>
					
				<div class="row">
					<div class="col-4">
						<div class="form-group">
							<h4 class="text-center">Deadline: <?php echo e($assignment->assignmentDeadline); ?></h3>
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<h4 class="text-center">Obtížnost: <?php echo e($assignment->assignmentDiff); ?>/5</h4>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<a class="nav-link" href="<?php echo e($assignment->assignmentLink); ?>">Moodle</a>
						</div>
					</div>
					<div class="col-2">
						<a href="<?php echo e(route('mainpage.edit', $assignment->assignmentID)); ?>" class="btn btn-secondary" role="button">Upravit</a>
					</div>
				</div>
</div>
<?php /**PATH D:\wamp64\www\TW_Zapletal\resources\views/includes/assignmentcard.blade.php ENDPATH**/ ?>