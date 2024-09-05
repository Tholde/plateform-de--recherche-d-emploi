<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin | Manage Users</title>
  
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

</head>

<body>
	<div id="app">
		<?php echo view('admin/include/sidebar'); ?>
		<div class="app-content">

			<?php echo view('admin/include/header'); ?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Admin | Manage Users</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Admin</span>
								</li>
								<li class="active">
									<span>Manage Users</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">


						<div class="row">
							<div class="col-md-12">
								<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Users</span></h5>
								<p style="color:red;"></p>
								<table class="table table-hover" id="sample-table-1">
									<thead>
										<tr>
											<th class="center">#</th>
											<th>Image</th>
											<th>Fullname</th>
											<th>Gender</th>
											<th class="hidden-xs">E-mail</th>
											<th>Adress </th>
											<th>Phone </th>
											<th>Last Update </th>
											<th>Action</th>

										</tr>
									</thead>
									<?php if (empty($user)) : ?>
											<tr>
												<td colspan="9" class="text-center">List Vide</td>
											</tr>
										<?php else : ?>
									<?php foreach ($user as $row):?>
									<tbody>
										<tr>
											<td class="center"><?php echo $row['id']; ?></td>
											<td><img src="../upload/<?php echo $row['image']; ?>" alt="" sizes="" srcset="" style="width: 100px; height: 100px; border-radius: 100%;"></td>
											<td><?php echo $row['fullname']; ?></td>
											<td><?php echo $row['gender']; ?></td>
											<td class="hidden-xs"><?php echo $row['email']; ?></td>
											<td><?php echo $row['address']; ?></td>
											<td><?php echo $row['phone']; ?></td>
											<td>
												<?php echo date('d/m/Y à H:i', strtotime($row['last_update'])); ?>
											</td>
											<td>
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="<?= base_url('editUser').'/'.$row['id'] ?>" class="btn btn-transparent btn-xs"
														tooltip-placement="top" tooltip="Edit"><i
															class="fa fa-pencil"></i></a>

													<a href="<?= base_url('deleteUser').'/'.$row['id'] ?>"
														onClick="return confirm('Are you sure you want to delete?')"
														class="btn btn-transparent btn-xs tooltips"
														tooltip-placement="top" tooltip="Remove"><i
															class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group" dropdown is-open="status.isopen">
														<button type="button"
															class="btn btn-primary btn-o btn-sm dropdown-toggle"
															dropdown-toggle>
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
									</tbody>
									<?php endforeach; ?>
									<?php endif ?>
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
	<?php echo view('admin/include/footer'); ?>
	<!-- end: FOOTER -->

	<!-- start: SETTINGS -->
	<?php echo view('admin/include/setting'); ?>

	<!-- end: SETTINGS -->
	</div>
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
		jQuery(document).ready(function () {
			Main.init();
			FormElements.init();
		});
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>