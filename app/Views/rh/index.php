<!DOCTYPE html>
<html lang="en">

<head>
	<title>RH-Login</title>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link
		href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('vendor/themify-icons/themify-icons.min.css') ?>">
	<link href="<?= base_url('vendor/animate.css/animate.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('vendor/switchery/switchery.min.css') ?>" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/plugins.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/themes/theme-1.css') ?>" id="skin_color" />
</head>

<body class="login">
	<div class="row">
		<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="logo margin-top-30">
				<h2>RH Login</h2>
			</div>

			<div class="box-login">
				<form class="form-login" action="<?= base_url('LogRh') ?>" method="post">
					<fieldset>
						<legend>
							Sign in to your account
						</legend>
						<p>
							Please enter your name and password to log in.<br />
							<span style="color:red;"></span>
						</p>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="email" placeholder="Email">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password"
									placeholder="Password"><i class="fa fa-lock"></i>
							</span>
						</div>
						<div class="form-actions">
						<?php 
						if ($validation->getError("email")) {
							?>
							<div class="alert alert-danger"><img src=<?= base_url('assets/images/warning.png') ?>
									class='img-fluid' alt='...' width='15' height='15'> <?php echo $validation->getError("email") ?></div>
						<?php } if ($validation->getError("password")) {
							?>
							<div class="alert alert-danger"><img src=<?= base_url('assets/images/warning.png') ?>
									class='img-fluid' alt='...' width='15' height='15'> <?php echo $validation->getError("password") ?></div>
						<?php }?>
						<?php 
						if (session()->getFlashdata('error')) {
							?>
							<div class="alert alert-danger"><img src=<?= base_url('assets/images/warning.png') ?>
									class='img-fluid' alt='...' width='15' height='15'> <?php echo session()->getFlashdata('error') ?></div>
						<?php }
						?>
							<button type="submit" class="btn btn-primary pull-right" name="submit">
								Login <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
						<div class="new-account">
							Don't have an account yet?
							<a href="<?= base_url("createCompte") ?>">
								Create an account
							</a>
						</div>
						<a href="<?= base_url('/') ?>">Back to Home Page</a>

					</fieldset>
				</form>

				<div class="copyright">
					<span class="text-bold text-uppercase">Job Search</span>
				</div>

			</div>

		</div>
	</div>
	<script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('vendor/modernizr/modernizr.js') ?>"></script>
	<script src="<?= base_url('vendor/jquery-cookie/jquery.cookie.js') ?>"></script>
	<script src="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
	<script src="<?= base_url('vendor/switchery/switchery.min.js') ?>"></script>
	<script src="<?= base_url('vendor/jquery-validation/jquery.validate.min.js') ?>"></script>

	<script src="<?= base_url('assets/js/main.js') ?>"></script>

	<script src="<?= base_url('assets/js/login.js') ?>"></script>
	<script>
		jQuery(document).ready(function () {
			Main.init();
			Login.init();
		});
	</script>

</body>
<!-- end: BODY -->

</html>