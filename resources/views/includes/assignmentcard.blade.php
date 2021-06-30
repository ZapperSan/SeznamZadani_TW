<div class="card border-secondary mb-3" style="border:3px solid #8da68b;">
				<div class="d-flex justify-content-between" style="background-color: #d4ddd3; font-size: 110%;">
						<div class="col-4">
						  <div class="form-group">
							  <h3 class="text-center">Zadání: {{ $assignment->assignmentName }}</h3>
							</div>
						</div>
						<div class="col-3"></div>
						
						<div class="col-3">
						    <div class="form-group">
								<h3 class="text-center">Předmět: {{ $assignment->assignmentSubject }}</h3>
							</div>
						</div>
				</div>	
				
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						 <div class="form-group">
							<text class="text-center">{{ $assignment->assignmentDesc }}</text>
						</div>
					</div>
					<div class="col-1"></div>
				</div>
					
				<div class="row">
					<div class="col-4">
						<div class="form-group">
							<h4 class="text-center">Deadline: {{ $assignment->assignmentDeadline }}</h3>
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<h4 class="text-center">Obtížnost: {{ $assignment->assignmentDiff }}/5</h4>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<a class="nav-link" href="{{ $assignment->assignmentLink }}">Moodle</a>
						</div>
					</div>
					<div class="col-2">
						<a href="{{ route('mainpage.edit', $assignment->assignmentID) }}" class="btn btn-secondary" role="button">Upravit</a>
					</div>
				</div>
</div>
