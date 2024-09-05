<!DOCTYPE html>
<html lang="en">

<head>
	<title>User | Edit Profile</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('vendor/themify-icons/themify-icons.min.css') ?>">
	<link href="<?= base_url('vendor/animate.css/animate.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('vendor/switchery/switchery.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('vendor/select2/select2.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('vendor/bootstrap-timepicker/bootstrap-timepicker.min.css') ?>" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/plugins.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/themes/theme-1.css') ?>" id="skin_color" />


</head>

<body>
	<div id="app">
	<?php echo view('include/sidebar');
			?>
		<div class="app-content">

			<?php echo view('include/header'); ?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">User | Edit Profile</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>User </span>
								</li>
								<li class="active">
									<span>Edit Profile</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<h5 style="color: green; font-size:18px; ">
								</h5>
								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">Edit Profile</h5>
											</div>
											<div class="panel-body">
													<h4><?php echo $user['fullname']; ?>'s Profile</h4>
													<p><b></p>
													<p><b>Profile Last Updation Date: <?php echo $user['last_update']; ?></b></p>
													<hr />
													<form role="form" action="<?= base_url('updateProfil/'.$user['id']) ?>" name="" method="post">
													<div class="form-group">
															<label for="doctorname">
																User Profile Picture
															</label>
															<input type="file" name="image" class="form-control" required="true">
														</div>
														<div class="form-group">
															<label for="doctorname">
																User Fullname
															</label>
															<input type="text" name="fullname" class="form-control" value="<?php echo $user['fullname']; ?>" required="true">
														</div>
														<div class="form-group">
															<label for="fess">
																User Contact
															</label>
															<input type="text" name="phone" class="form-control" value="<?php echo $user['phone']; ?>" required="true" maxlength="10" pattern="[0-9]+">
														</div>
														<div class="form-group">
															<label for="fess">
																User Email
															</label>
															<input type="email" id="patemail" name="email" class="form-control" value="<?php echo $user['email']; ?>">
															<span id="email-availability-status"></span>
														</div>
														<div class="form-group">
															<label class="control-label">Gender: </label>
															<?php if ($user['gender'] == "female") { ?>
																<input type="radio" name="gender" id="gender" value="female" checked="true">Female
																<input type="radio" name="gender" id="gender" value="male">Male
															<?php } else { ?>
																<label>
																	<input type="radio" name="gender" id="gender" value="male" checked="true">Male
																	<input type="radio" name="gender" id="gender" value="female">Female
																</label>
															<?php } ?>
														</div>
														<div class="form-group">
															<label for="address">
																User Address
															</label>
															<textarea name="address" class="form-control" required="true"><?php echo $user['address']; ?></textarea>
														</div>

														<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
												<?php ?>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="panel panel-white">


								</div>
							</div>
						</div>
					</div>

					<!-- end: BASIC EXAMPLE -->






					<!-- end: SELECT BOXES -->

				</div>
			</div>
		</div>
		<!-- start: FOOTER -->
		<?php echo view('include/footer'); ?>
		<!-- end: FOOTER -->

		<!-- start: SETTINGS -->
		<?php echo view('include/setting'); ?>

		<!-- end: SETTINGS -->
	</div>
	<!-- start: MAIN JAVASCRIPTS -->
	<script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('vendor/modernizr/modernizr.js') ?>"></script>
	<script src="<?= base_url('vendor/jquery-cookie/jquery.cookie.js') ?>"></script>
	<script src="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
	<script src="<?= base_url('vendor/switchery/switchery.min.js') ?>"></script>
	<!-- end: MAIN JAVASCRIPTS -->
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="<?= base_url('vendor/maskedinput/jquery.maskedinput.min.js') ?>"></script>
	<script src="<?= base_url('vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') ?>"></script>
	<script src="<?= base_url('vendor/autosize/autosize.min.js') ?>"></script>
	<script src="<?= base_url('vendor/selectFx/classie.js') ?>"></script>
	<script src="<?= base_url('vendor/selectFx/selectFx.js') ?>"></script>
	<script src="<?= base_url('vendor/select2/select2.min.js') ?>"></script>
	<script src="<?= base_url('vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
	<script src="<?= base_url('vendor/bootstrap-timepicker/bootstrap-timepicker.min.js') ?>"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<!-- start: CLIP-TWO JAVASCRIPTS -->
	<script src="<?= base_url('assets/js/main') ?>"></script>
	<!-- start: JavaScript Event Handlers for this page -->
	<script src="<?= base_url('assets/js/form-elements') ?>"></script>
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