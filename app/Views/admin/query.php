<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin | Manage Queries</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
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
</head>

<body>
	<div id="app">
		<?php include('include/sidebar.php'); ?>
		<div class="app-content">

			<?php include('include/header.php'); ?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Admin | Manage Queries</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Admin</span>
								</li>
								<li class="active">
									<span>Queries</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">


						<div class="row">
							<div class="col-md-12">
								<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Queries</span></h5>
								<table class="table table-hover" id="sample-table-1">
									<thead>
										<tr>
											<th class="center">#</th>
											<th>Name</th>
											<th class="hidden-xs">Email</th>
											<th>Contact </th>
											<th>Message </th>
											<th>Query Date</th>
											<th>Action</th>

										</tr>
									</thead>
									<tbody>
										<?php if (empty($contus)) : ?>
											<tr>
												<td colspan="9" class="text-center">List Vide</td>
											</tr>
										<?php else : ?>
											<?php
											foreach ($contus as $key => $val) :
											?>
												<tr>
													<td class="center"><?= $val['id'] ?></td>
													<td class="hidden-xs"><?= $val['fullname'] ?></td>
													<td><?= $val['email'] ?></td>
													<td><?= $val['phone'] ?></td>
													<td><?= $val['message'] ?></td>
													<td><?php echo date('d/m/Y à H:i', strtotime($val['last_update'])); ?></td>

													<td>
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="query-details.php?id=<?= $val['id'] ?>" name="view" class="btn btn-transparent btn-lg" title="View Details"><i class="fa fa-file"></i></a>
														</div>
														<div class="visible-xs visible-sm hidden-md hidden-lg">
															<div class="btn-group" dropdown is-open="status.isopen">
																<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
																	<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
																</button>
																<ul class="dropdown-menu pull-right dropdown-light" role="menu">
																	<li>
																		<a href="#">
																			Edit
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			Share
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			Remove
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>

											<?php endforeach ?>
										<?php endif ?>
									</tbody>
								</table>
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
	<?php include('include/footer.php'); ?>
	<!-- end: FOOTER -->

	<!-- start: SETTINGS -->
	<?php include('include/setting.php'); ?>

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
		jQuery(document).ready(function() {
			Main.init();
			FormElements.init();
		});
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>