	<!-- Page container -->
	<div class="page-container">
		<div class="page-content">
			<div class="content-wrapper">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Task - Tabular List</h5>
						<div class="heading-elements">
							<ul class="icons-list" style="margin-top: 0px;">
		                		<li>
		                			<button type="button" class="btn btn-danger btn-xs btn-raised" data-toggle="modal" data-target="#modal_add" style="float: right;"><i class="icon-add position-left"></i>New Task</button>
								</li>
		                	</ul>
	                	</div>
					</div>
					<div class="panel-body">
					<?php if($this->session->flashdata('message') != "") : ?>
						<div class="alert bg-success">
							<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
					       	<span class="text-semibold">Well done!</span> <?= $this->session->flashdata('message'); ?>
					    </div>
					<?php endif; ?>
					</div>
					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Description</th>
								<th>Date Created</th>
								<th>Date Updated</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
						<?php
						foreach($taskList as $t) :
						?>
							<tr>
								<td><?= $t->id; ?></td>
								<td><?= $t->name; ?></td>
								<td><?= $t->description; ?></td>
								<td><?= $t->dateCreated; ?></td>
								<td><?= $t->dateUpdated; ?></td>
								<td class="text-center">
									<ul class="icons-list">
										<li>
											<a data-popup='tooltip' title='Edit' data-toggle='modal' data-taskid='<?= $t->id; ?>' data-target='#modal_edit'><i class="icon-pencil"></i></a>
										</li>
										<li>
											<a data-popup='tooltip' title='Delete' href='javascript: deleteTask(<?= $t->id; ?>);'><i class="icon-bin"></i></a>
										</li>
									</ul>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- /page container -->

	<!-- Modal Add task Form-->
	<div id="modal_add" class="modal" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-sm">
			<div class="modal-content"></div>
		</div>
	</div>
	<!-- /Modal Add task Form -->

	<!-- Modal Add task Form-->
	<div id="modal_edit" class="modal" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-sm">
			<div class="modal-content"></div>
		</div>
	</div>
	<!-- /Modal Add task Form -->
