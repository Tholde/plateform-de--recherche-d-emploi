<!DOCTYPE html>
<html lang="en">

<head>
	<title>User-Login</title>

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
				<a href="../index.php">
					<h2> Job Search | User Login</h2>
				</a>
			</div>
			<?php $validation = \Config\Services::validation(); ?>
			<div class="box-login">
				<form class="form-login" action="<?= base_url("log") ?>" method="post">
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
								<input type="email" class="form-control" name="email" placeholder="Email">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password"
									placeholder="Password">
								<i class="fa fa-lock"></i>
							</span><a href="">
								Forgot Password ?
							</a>
						</div>
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
						<div class="form-actions">

							<button type="submit" class="btn btn-primary pull-right" name="submit">
								Login <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
						<div class="new-account">
							Don't have an account yet?
							<a href="<?= base_url("regist") ?>">
								Create an account
							</a>
						</div>
					</fieldset>
				</form>

				<div class="copyright">
					</span><span class="text-bold text-uppercase"> JOB Search System</span>.
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