<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Registration</title>

	<link
		href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	<script type="text/javascript">
		function valid() {
			if (document.registration.password.value != document.registration.password_again.value) {
				alert("Password and Confirm Password Field do not match  !!");
				document.registration.password_again.focus();
				return false;
			}
			return true;
		}
	</script>


</head>

<body class="login">
	<!-- start: REGISTRATION -->
	<div class="row">
		<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="logo margin-top-30">
				<h2>JSS | User Registration</h2>
			</div>
			<?php $validation = \Config\Services::validation(); ?>
			<!-- start: REGISTER BOX -->
			<div class="box-register">
				<form name="registration" id="registration" method="post" action="<?= base_url('/submit-form') ?>"
					enctype="multipart/form-data" onSubmit="return valid();">
					<fieldset>
						<legend>
							Sign Up
						</legend>
						<p>
							Enter your personal details below:
						</p>
						<div class="form-group">
							<label for="">Profil Picture</label>
							<input type="file" class="form-control" name="image" required>
							<?php if ($validation->getError('image')): ?>
								<div class="alert alert-danger">
									<?= $validation->getError('image'); ?>
								</div>
							<?php endif ?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
							<?php if ($validation->getError('fullname')): ?>
								<div class="alert alert-danger">
									<?= $validation->getError('fullname'); ?>
								</div>
							<?php endif ?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Address" required>
							<?php if ($validation->getError('address')): ?>
								<div class="alert alert-danger">
									<?= $validation->getError('address'); ?>
								</div>
							<?php endif ?>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" name="phone" placeholder="Number phone" required>
							<?php if ($validation->getError('phone')): ?>
								<div class="alert alert-danger">
									<?= $validation->getError('phone'); ?>
								</div>
							<?php endif ?>
						</div>
						<div class="form-group">
							<label class="block">
								Gender
							</label>
							<div class="clip-radio radio-primary">
								<input type="radio" id="rg-female" name="gender" value="female">
								<label for="rg-female">
									Female
								</label>
								<input type="radio" id="rg-male" name="gender" value="male">
								<label for="rg-male">
									Male
								</label>
								<?php if ($validation->getError('gender')): ?>
								<div class="alert alert-danger">
									<?= $validation->getError('gender'); ?>
								</div>
							<?php endif ?>
							</div>
						</div>
						<p>
							Enter your account details below:
						</p>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" id="email"
									onBlur="userAvailability()" placeholder="Email" required>
								<i class="fa fa-envelope"></i> </span>
							<span id="user-availability-status1" style="font-size:12px;"></span>
							<?php if ($validation->getError('email')): ?>
								<div class="alert alert-danger">
									<?= $validation->getError('email'); ?>
								</div>
							<?php endif ?>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="password" name="password"
									placeholder="Password" required>
								<i class="fa fa-lock"></i> </span>
							<?php if ($validation->getError('password')): ?>
								<div class="alert alert-danger">
									<?= $validation->getError('password'); ?>
								</div>
							<?php endif ?>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="password_again" name="confirmPassword"
									placeholder="Confirm Password" required>
								<i class="fa fa-lock"></i> </span>
							<?php if ($validation->getError('confirmPassword')): ?>
								<div class="alert alert-danger">
									<?= $validation->getError('confirmPassword'); ?>
								</div>
							<?php endif ?>
						</div>

						<div class="form-actions">
							<p>
								Already have an account?
								<a href="<?= base_url("index") ?>">
									Log-in
								</a>
							</p>
							<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
								Submit <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>

				<div class="copyright">
					&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> JSS</span>.
					<span>All rights reserved</span>
				</div>

			</div>

		</div>
	</div>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/modernizr/modernizr.js"></script> 
	<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="vendor/switchery/switchery.min.js"></script>
	<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/login.js"></script>
	<script>
		jQuery(document).ready(function () {
			Main.init();
			Login.init();
		});
	</script>

	<script>
		function userAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check_availability.php",
				data: 'email=' + $("#email").val(),
				type: "POST",
				success: function (data) {
					$("#user-availability-status1").html(data);
					$("#loaderIcon").hide();
				},
				error: function () { }
			});
		}
	</script>

</body>
<!-- end: BODY -->

</html>