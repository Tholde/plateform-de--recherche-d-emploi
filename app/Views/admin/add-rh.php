<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin | Add RH</title>

	<link
		href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	<script type="text/javascript">
		function valid() {
			if (document.adddoc.npass.value != document.adddoc.cfpass.value) {
				alert("Password and Confirm Password Field do not match  !!");
				document.adddoc.cfpass.focus();
				return false;
			}
			return true;
		}
	</script>

</head>

<body>
	<div id="app">
	<?php echo view('admin/include/sidebar');?>
		<div class="app-content">

			<?php echo view('admin/include/header'); ?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Admin | Add RH</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Admin</span>
								</li>
								<li class="active">
									<span>Add RH</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">

								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">Add RH</h5>
											</div>
											<div class="panel-body">

												<form role="form" name="adddoc" action="<?= base_url('rhReg') ?>" method="post"
													enctype="multipart/form-data" onSubmit="return valid();">
													
													<div class="form-group">
														<label for="firstname">
                                                        RH Name
														</label>
														<input type="text" name="name" class="form-control"
															placeholder="Enter RH name" required="true">
													</div>
                                                    <div class="form-group">
														<label for="firstname">
                                                        RH Society Name
														</label>
														<input type="text" name="society" class="form-control"
															placeholder="Enter RH Society name" required="true">
													</div>

													<div class="form-group">
														<label for="address">
															RH Address
														</label>
														<textarea name="address" class="form-control"
															placeholder="Enter RH Address"
															required="true"></textarea>
													</div>

													<div class="form-group">
														<label for="fess">
															RH Phone Number
														</label>
														<input type="text" name="phone" class="form-control"
															placeholder="Enter RH Phone Number" required="true">
													</div>

													<div class="form-group">
														<label for="fess">
															RH Email
														</label>
														<input type="email" id="docemail" name="email"
															class="form-control" placeholder="Enter RH Email"
															required="true" onBlur="checkemailAvailability()">
														<span id="email-availability-status"></span>
													</div>

													<div class="form-group">
														<label for="exampleInputPassword1">
															Password
														</label>
														<input type="password" name="password" class="form-control"
															placeholder="Password" required="required">
													</div>

													<div class="form-group">
														<label for="exampleInputPassword2">
															Confirm Password
														</label>
														<input type="password" name="confirmPassword"
															class="form-control" placeholder="Confirm Password"
															required="required">
													</div>
													<button type="submit" name="submit" id="submit"
														class="btn btn-o btn-primary">
														Submit
													</button>
												</form>
												
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
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/modernizr/modernizr.js"></script>
	<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="vendor/switchery/switchery.min.js"></script>
	<!-- end: MAIN JAVASCRIPTS -->
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
	<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
	<script src="vendor/autosize/autosize.min.js"></script>
	<script src="vendor/selectFx/classie.js"></script>
	<script src="vendor/selectFx/selectFx.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<!-- start: CLIP-TWO JAVASCRIPTS -->
	<script src="assets/js/main.js"></script>
	<!-- start: JavaScript Event Handlers for this page -->
	<script src="assets/js/form-elements.js"></script>
	<script>
		jQuery(document).ready(function () {
			Main.init();
			FormElements.init();
		});
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>