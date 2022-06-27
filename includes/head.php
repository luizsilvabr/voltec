<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Voltec Sistemas de Energia</title>
    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Voltec Sistemas de Energia" />
    <!-- End Favicons Icons -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- End Fonts -->

    <!-- CSS Imports -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/izeetak-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/twentytwenty/twentytwenty.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
    <!-- End CSS Imports -->


    <!-- template Styles -->
    <link rel="stylesheet" href="assets/css/izeetak.css" />
    <link rel="stylesheet" href="assets/css/izeetak-responsive.css" />
    <!-- end Styles -->
    <style>
        .project-one__carousel.owl-carousel .owl-dots .owl-dot {
            display: none;
        }

        .mobile-nav__content .main-menu__list li a button {
            display: none;
        }

        .main-menu .mobile-nav__toggler {
            color: #576680;
            margin-top: 15px;
        }

        .main-menu .main-menu__list>li,
        .stricky-header .main-menu__list>li {
            padding-top: 50px;
        }

        .main-menu-wrapper__left {
            float: none;
        }

        .main-menu-wrapper__main-menu {
            float: right;
        }

        .main-menu .main-menu__list>li>a,
        .stricky-header .main-menu__list>li>a {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <!-- Image Loader -->
    <div class="preloader">
        <img class="preloader__image" width="200" src="assets/images/resources/original.png" alt="" />
    </div>
    <!-- End Image Loader -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper-inner clearfix">
                        <div class="main-menu-wrapper__left clearfix">
                            <div class="main-menu-wrapper__logo">
                                <a href="home"><img src="assets/images/resources/original.png" width="150" alt=""></a>
                            </div>
                            <div class="main-menu-wrapper__main-menu">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li <?php if ($_SERVER['REQUEST_URI'] == "voltec/home") { ?> class="dropdown select" <?php } else { ?>class="dropdown" <?php } ?>><a href="home">Home</a></li>
                                    <li <?php if ($_SERVER['REQUEST_URI'] == "voltec/somosVoltec") { ?> class="dropdown select" <?php } else { ?>class="dropdown" <?php } ?>><a href="somosVoltec">Somos Voltec</a></li>
                                    <li <?php if ($_SERVER['REQUEST_URI'] == "voltec/servicos") { ?> class="dropdown select" <?php } else { ?>class="dropdown" <?php } ?>><a href="servicos">Serviços</a></li>
                                    <li <?php if ($_SERVER['REQUEST_URI'] == "voltec/produtos") { ?> class="dropdown select" <?php } else { ?>class="dropdown" <?php } ?>><a href="produtos">Produtos</a></li>
                                    <li <?php if ($_SERVER['REQUEST_URI'] == "voltec/contato") { ?> class="dropdown select" <?php } else { ?>class="dropdown" <?php } ?>><a href="contato">Contato</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </header>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="home"><img src="assets/images/resources/white.png" width="150" alt=""></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="vendas@voltecsistemas.com.br">vendas@voltecsistemas.com.br</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:1499644-1333">(14) 99644-1333</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->



            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->
        <!-- End Header -->