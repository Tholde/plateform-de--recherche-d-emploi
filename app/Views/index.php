<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Job Search </title>

    <link rel="shortcut icon" href="asset/images/fav.jpg">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css" />
</head>

<body>

    <!-- ################# Header Starts Here#######################--->

    <header id="menu-jk">

        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12"
                        style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important; ">JobS
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                                class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#logins">Logins</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="<?= base_url("index") ?>">Join us</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="asset/images/slider/slider_2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Job Search</h5>
                        <p>94% des professionnels du recrutement ont mentionné qu'ils avaient besoin d'un portail
                            d'emploi en ligne pour leurs besoins d'embauche. Dès qu'il permet aux candidats de voir
                            l'exigence de demander au candidat de postuler à l'emploi et d'évaluer et de suivre les
                            candidats, une conception efficace du site Web du portail d'emploi permet chaque étape du
                            parcours d'embauche du candidat.</p><br>
                        <div class="col-sm-2 d-none d-lg-block appoint">
                            <a class="btn btn-success" href="<?= base_url("registration") ?>">Register here</a>
                        </div>

                    </div>
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="asset/images/slider/slider_3.jpg" alt="Third slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Job Search</h5>
                        <p>94% des professionnels du recrutement ont mentionné qu'ils avaient besoin d'un portail
                            d'emploi en ligne pour leurs besoins d'embauche. Dès qu'il permet aux candidats de voir
                            l'exigence de demander au candidat de postuler à l'emploi et d'évaluer et de suivre les
                            candidats, une conception efficace du site Web du portail d'emploi permet chaque étape du
                            parcours d'embauche du candidat.</p><br>
                        <div class="col-sm-2 d-none d-lg-block appoint">
                            <a class="btn btn-success" href="<?= base_url("registration") ?>">Register here</a>
                        </div>
                    </div>

                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

    <!--  ************************* Logins ************************** -->


    <section id="logins" class="our-blog container-fluid">
        <div class="container">
            <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                            <img src="asset/images/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>User</h6>
                                <a href="<?= base_url("index") ?>" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                            <img src="asset/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>RH</h6>
                                <a href="<?= base_url("rhLogin") ?>" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                            <img src="asset/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin</h6>

                                <a href="<?= base_url("adm") ?>" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Job Offers</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Society</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fab fa-monero"></i>
                        <h5>Human Ressource</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>New Technology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Social Helping</h5>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!--  ************************* About Us Starts Here ************************** -->

    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">

            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Our Website</h3>
                <?php
                foreach ($contView as $key => $row):
                    ?>
                    <p>
                        <?php echo $row['pageDescription']; ?>.
                    </p>
                <?php endforeach ?>
            </div>
        </div>
    </section>


    <!--  ************************* Contact Us Starts Here ************************** -->

    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div class="col-sm-12 cop-ck">
                <form method="post" action="<?= base_url('ctUs') ?>">
                    <h2>Contact Form</h2>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Your Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Email Your Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Your Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Your Message:</label></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm"
                                name="description" required></textarea>
                        </div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>





    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="<?= base_url("index") ?>">Logins</a><i
                                class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                    <?php
                        foreach ($contcVi as $key => $row):
                    ?>
                        Phone : <?php echo $row['phone']; ?><br>
                        Email : <?php echo $row['email']; ?><br>
                        Address : <?php echo $row['pageDescription']; ?><br>
                        Timing : <?php echo $row['disponibleTime']; ?><br>
                    </address>
                    <?php endforeach ?>
                </div>
            </div>
        </div>


    </footer>
    <div class="copy">
        <div class="container">
            Job Search
        </div>

    </div>

</body>

<script src="asset/js/jquery-3.2.1.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="asset/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="asset/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="asset/js/script.js"></script>

</html>