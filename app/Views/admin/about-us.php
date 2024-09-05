<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin | About Us </title>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('admin/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('admin/vendor/fontawesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('admin/vendor/themify-icons/themify-icons.min.css') ?>">
	<link href="<?= base_url('admin/vendor/animate.css/animate.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/perfect-scrollbar/perfect-scrollbar.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/switchery/switchery.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/select2/select2.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css') ?>" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="<?= base_url('admin/assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?= base_url('admin/assets/css/plugins.css') ?>">
	<link rel="stylesheet" href="<?= base_url('admin/assets/css/themes/theme-1.css') ?>" id="skin_color" />
	<script type="text/javascript">
		bkLib.onDomLoaded(nicEditors.allTextAreas);
	</script>
</head>

<body>
	<div id="app">
	<?php echo view('admin/include/sidebar');
		?>
		<div class="app-content">

			<?php echo view('admin/include/header'); ?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Admin | Update the About us Content</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Admin </span>
								</li>
								<li class="active">
									<span>Update the About us Content</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<?php
								foreach ($aboutView as $key => $row) :
								?>
									<form class="forms-sample" action="<?= base_url('pageAbt') ?>" method="post">

										<div class="form-group">
											<label for="exampleInputUsername1">Page Title</label>
											<input id="pagetitle" name="pagetitle" type="text" class="form-control" required="true" value="<?php echo $row['pageTitle']; ?>">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Page Description</label>
											<textarea class="form-control" name="pageDescription" id="pagedes" rows="12"><?php echo $row['pageDescription']; ?></textarea>
										</div>
										<button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
									</form>
								<?php endforeach ?>
							</div>
						</div>
					</div>

					<!-- end: BASIC EXAMPLE -->
					<!-- end: SELECT BOXES -->

				</div>
			</div>
		</div>
		<!-- start: FOOTER -->
		<?php echo view('admin/include/footer'); ?>
		<!-- end: FOOTER -->

		<!-- start: SETTINGS -->
		<?php echo view('admin/include/setting'); ?>

		<!-- end: SETTINGS -->
	</div>
	<!-- start: MAIN JAVASCRIPTS -->
	<script src="<?= base_url('admin/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/modernizr/modernizr.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/jquery-cookie/jquery.cookie.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/switchery/switchery.min.js') ?>"></script>
	<!-- end: MAIN JAVASCRIPTS -->
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="<?= base_url('admin/vendor/maskedinput/jquery.maskedinput.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/autosize/autosize.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/selectFx/classie.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/selectFx/selectFx.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/select2/select2.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js') ?>"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<!-- start: CLIP-TWO JAVASCRIPTS -->
	<script src="<?= base_url('admin/assets/js/main') ?>"></script>
	<!-- start: JavaScript Event Handlers for this page -->
	<script src="<?= base_url('admin/assets/js/form-elements') ?>"></script>
	<script>
		jQuery(document).ready(function() {
			Main.init();
			FormElements.init();
		});
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>