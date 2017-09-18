<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soding Task Page</title>
	
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>	
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/notifications/bootbox.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/notifications/sweet_alert.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/media/fancybox.min.js"></script>

	<script type="text/javascript" src="<?= base_url(); ?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/pages/datatables_basic.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/pages/form_layouts.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/pages/form_validation.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/pages/picker_date.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/task.modal.js"></script>
	
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->
</head>
<body>
	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-danger-400">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html">SODING TASK</a>
		</div>
		
	</div>
	<!-- /main navbar -->
	
	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title" style="display: inline-block;">
				<h4>
					<i class="icon-arrow-left52 position-left"></i>
					<span class="text-semibold">Dashboard</span>
					<small class="display-block" id="timeLogUser"></small>
				</h4>
			</div>
		</div>
	</div>
	<!-- /page header -->

	<?= $contents; ?>
				
	<!-- Footer -->
	<div class="footer text-muted">
		<div style="display: inline-block;">
		&copy; 2017. Soding Task. All Rights Reserved.
		</div>
		<div style="display: inline-block; float: right;">
			Developed by eighore04.
		</div>
	</div>
	<!-- /footer --> 
</body>
</html>