<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Edit User</title>

    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('admin/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/vendor/fontawesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/vendor/themify-icons/themify-icons.min.css') ?>">
    <link href="<?= base_url('admin/vendor/animate.css/animate.min.css') ?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('admin/vendor/perfect-scrollbar/perfect-scrollbar.min.css') ?>" rel="stylesheet"
        media="screen">
    <link href="<?= base_url('admin/vendor/switchery/switchery.min.css') ?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('admin/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet"
        media="screen">
    <link href="<?= base_url('admin/vendor/select2/select2.min.css') ?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('admin/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') ?>"
        rel="stylesheet" media="screen">
    <link href="<?= base_url('admin/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css') ?>" rel="stylesheet"
        media="screen">
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/plugins.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/themes/theme-1.css') ?>" id="skin_color" />
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
                                <h1 class="mainTitle">Admin | Edit User</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Admin</span>
                                </li>
                                <li class="active">
                                    <span>Edit User</span>
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
                                                <h5 class="panel-title">Edit User</h5>
                                            </div>
                                            <?php if (isset($validation)): ?>
                                                    <div class="alert alert-danger">
                                                        <strong>
                                                            <?php echo $validation->listErrors() ?>
                                                        </strong>
                                                    </div>
                                            <?php endif; ?>
                                            <div class="panel-body">

                                                <form role="form" action="<?= base_url('userEdt') ?>" name="adddoc"
                                                    method="post" enctype="multipart/form-data"
                                                    onSubmit="return valid();">
                                                    <div class="form-group">
                                                        <label for="doctorname">
                                                            User Image Profil
                                                        </label>
                                                        <input type="file" name="image" class="form-control"
                                                            required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Gender: </label>
                                                        <?php if ($userMod['gender'] == "female") { ?>
                                                                <input type="radio" name="gender" id="gender" value="female"
                                                                    checked="true">Female
                                                                <input type="radio" name="gender" id="gender" value="male">Male
                                                        <?php } else { ?>
                                                                <label>
                                                                    <input type="radio" name="gender" id="gender" value="male"
                                                                        checked="true">Male
                                                                    <input type="radio" name="gender" id="gender"
                                                                        value="female">Female
                                                                </label>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="firstname">
                                                            Fullname
                                                        </label>
                                                        <input type="text" name="fullname" class="form-control"
                                                            value="<?php echo $userMod['fullname']; ?>"
                                                            placeholder="Enter User fullname" required="true">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="address">
                                                            User Address
                                                        </label>
                                                        <textarea name="address" class="form-control"
                                                            placeholder="Enter User Address"
                                                            value="<?php echo $userMod['address']; ?>"
                                                            required="true"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fess">
                                                            User Phone Number
                                                        </label>
                                                        <input type="text" name="phone" class="form-control"
                                                            placeholder="Enter User Phone Number"
                                                            value="<?php echo $userMod['phone']; ?>" required="true">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fess">
                                                            User Email
                                                        </label>
                                                        <input type="email" id="docemail" name="email"
                                                            class="form-control" placeholder="Enter User Email"
                                                            value="<?php echo $userMod['email']; ?>" required="true"
                                                            onBlur="checkemailAvailability()">
                                                        <span id="email-availability-status"></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">
                                                            Password
                                                        </label>
                                                        <input type="password" name="password" class="form-control"
                                                            value="<?php echo $userMod['password']; ?>"
                                                            placeholder="Password" required="required">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword2">
                                                            Confirm Password
                                                        </label>
                                                        <input type="password" name="confirmPassword"
                                                            class="form-control" placeholder="Confirm Password"
                                                            value="<?php echo $userMod['password']; ?>"
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