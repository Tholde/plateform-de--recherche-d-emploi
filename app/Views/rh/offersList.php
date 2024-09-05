<!DOCTYPE html>
<html lang="en">

<head>
    <title>RH | Job Offers List</title>

    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/themify-icons/themify-icons.min.css') ?>">
    <link href="<?= base_url('vendor/animate.css/animate.min.css') ?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.min.css') ?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('vendor/switchery/switchery.min.css') ?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet"
        media="screen">
    <link href="<?= base_url('vendor/select2/select2.min.css') ?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') ?>"
        rel="stylesheet" media="screen">
    <link href="<?= base_url('vendor/bootstrap-timepicker/bootstrap-timepicker.min.css') ?>" rel="stylesheet"
        media="screen">
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
                                <h1 class="mainTitle">RH | Job Offers List</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>RH </span>
                                </li>
                                <li class="active">
                                    <span>Job Offers List</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <!-- end: PAGE TITLE -->
                    <!-- start: BASIC EXAMPLE -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 style="color:rgb(13, 110, 253); font-size:18px; ">
                                    <span class="text-bold">Job Offers</span>
                                </h5>
                                <div class="row margin-top-30">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="panel panel-white">
                                                <?php foreach ($offr as $row): ?>
                                                    <div class="card shadow">
                                                        <div class="row">
                                                            <div class="col-md-3 bg-primary" data-aos="fade-right"
                                                                data-aos-offset="50" data-aos-duration="500">
                                                                <div class="card-body cc-experience-header ">
                                                                    <p>Status:
                                                                        <?php
                                                                        $stat = $row['status'];
                                                                        if ($stat = '1') {
                                                                            echo "Ouvert";
                                                                        } else {
                                                                            echo "Fermé";
                                                                        }
                                                                        ?>
                                                                    </p>
                                                                    <div class="h5">
                                                                        <?php echo $row['society']; ?>
                                                                    </div>
                                                                    <p>pulié le
                                                                        <?php echo date('d/m/Y à H:i', strtotime($row['last_update'])); ?>
                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50"
                                                                data-aos-duration="500">
                                                                <div class="card-body">
                                                                    <div class="h5">
                                                                        <?php echo $row['title']; ?>
                                                                    </div>
                                                                    <p>
                                                                        <?php echo $row['description']; ?>
                                                                    </p>
                                                                    <p>Type de contrat:
                                                                        <?php echo $row['typeContrat']; ?>
                                                                    </p>
                                                                    <center>
                                                                    <a href="<?=base_url('updateOffer/'.$row['id'])?>" class="btn btn-primary">update</a>
                                                                    <a href="<?=base_url('deleteOffer/'.$row['id'])?>" class="btn btn-primary">Delete</a>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
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
        jQuery(document).ready(function () {
            Main.init();
            FormElements.init();
        });
    </script>
    <!-- end: JavaScript Event Handlers for this page -->
    <!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>