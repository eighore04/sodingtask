						<form class='form-horizontal' id='taskFormEdit'>
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h5 class="modal-title">Modify Task Form</h5>
							</div>
							<div class="modal-body">
								<div class="form-group" style="margin-left: 0px; margin-right: 0px;">
									<label style="font-weight: 500">Task Name</label>
									<div class="input-group col-lg-12">
										<input type="text" name="taskName" value="<?= $detail->name; ?>" id="taskName" class="form-control" placeholder="Enter task name">
									</div>
									<label class="validation-error-label" id="taskNameError" style="display: none;">Please enter task name.</label>
								</div>
								<div class="form-group" style="margin-left: 0px; margin-right: 0px;">
									<label style="font-weight: 500">Description</label>
									<div class="input-group col-lg-12">
										<textarea name="taskDesc" id="taskDesc" style="height: 200px" class="form-control" placeholder="Enter task description"> <?= $detail->description; ?></textarea>
									</div>
									<label class="validation-error-label" id="taskDescError" style="display: none;">Please task description.</label>
								</div>
								
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
								<button type="button" id="btnEdit" class="btn btn-danger">Update</button>
								<input type='hidden' name="taskID" value="<?= $taskID; ?>" />
							</div>	
						</form>		