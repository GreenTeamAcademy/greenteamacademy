<?php
session_start();
if (isset($_SESSION['message'])) {
    echo "<script>alert('" . $_SESSION['message'] . "');</script>";
    unset($_SESSION['message']); // Clear the message after displaying it
}
?>
<!-- Rest of the home page content -->

<!DOCTYPE html>
<!-- language -->
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="bracket-web">
    <meta name="description" content="Working to create a world of greener, cleaner, and more sustainable energy, one community at a time">

    <!-- ======== Page title ============ -->
    <title>Community Dreams Foundation</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/images/favicons/apple-touch-icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,600,600i,700,700i,800,900%7CInter:400,400i,500,500i,600,600i,700,700i,800&subset=latin,latin-ext" rel="stylesheet">


    <!-- ===========  All Stylesheet ================= -->
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <!--  bootstrap-select css plugins -->
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <!--  fontawesome css plugins -->
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <!--  jquery-ui css plugins -->
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <!--  jarallax css plugins -->
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/vendors/eolimn-icons/style.css">
    <!--  slider css plugins -->
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" href="assets/vendors/slick-carousel/slick-theme.css">
    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/eolimn.css">
</head>

<body class="custom-cursor">

    <!-- Custom Cursor -->
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- Preloader Start-->
    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- Preloader End-->

    <div class="page-wrapper">
        <!-- Header Topbar -->

        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo logo-eolimn">
                        <a href="index.html">
                            <img src="assets/images/logo-dark.png" alt="eolimn HTML" width="155">
                        </a>
                    </div>
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="dropdown megamenu scrollToLink current">
                                <a href="#home">Home</a>
                                <ul>
                                    <li>
                                        <section class="home-showcase">
                                            <div class="container">
                                                <div class="home-showcase__inner">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="assets/images/home-showcase/dreamlineai.png" alt=" showcase image">
                                                                    <div class="demo-one__btns">
                                                                        <!--<a href="index.html" class="eolimn-btn eolimn-btn--base demo-one__btn">Multi Page</a>-->
                                                                        <a href="http://www.dreamlineai.org/" class="eolimn-btn eolimn-btn--base demo-one__btn">Explore</a>
                                                                    </div>
                                                                </div>
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="http://www.dreamlineai.org/">Dreamline AI</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="assets/images/home-showcase/mysustainability.png" alt="showcase image">
                                                                    <div class="demo-one__btns">
                                                                        <!--<a href="index-2.html" class="eolimn-btn eolimn-btn--base demo-one__btn">Multi Page</a>--->
                                                                        <a href="http://cdreams.org" class="eolimn-btn eolimn-btn--base demo-one__btn">COMING SOON</a>
                                                                    </div>
                                                                </div>
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="http://cdreams.org">Grovio</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="assets/images/home-showcase/greenzones.jpg" alt="showcase image">
                                                                    <div class="demo-one__btns">
                                                                        <!--<a href="index-3.html" class="eolimn-btn eolimn-btn--base demo-one__btn">Multi Page</a>-->
                                                                        <a href="http://cdreams.org" class="eolimn-btn eolimn-btn--base demo-one__btn">COMING SOON</a>
                                                                    </div>
                                                                </div>
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="http://cdreams.org">Green Zones</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="assets/images/home-showcase/home-showcase-4.jpg" alt="showcase image">
                                                                    <div class="demo-one__btns">
                                                                        <a href="index-dark.html" class="eolimn-btn demo-one__btn eolimn-btn--base">View Page</a>
                                                                    </div>
                                                                </div>
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="index-dark.html">Home Dark</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                    </div>

                                                </div>
                                            </div>
                                        </section>
                                    </li>
                                </ul>
                            </li>
                            <li class="scrollToLink"><a href="#about">About</a></li>
                            <li class="scrollToLink"><a href="https://donorbox.org/site-donation-page">Donate</a></li>
                            <!---<li class="scrollToLink"><a href="#about">Volunteer</a></li>--->
                            <li class="scrollToLink"><a href="hurricane-relief">HURRICANE RELIEF</a></li>
                            <!--- <li class="scrollToLink"><a href="login.php">Login</a></li>--->
                        </ul>
                    </nav>
                    <div class="main-header__right">
                        <a href="contact.html" class="main-header__right__btn eolimn-btn">join us today <i class="icon-arrow-point-to-right"></i></a>
                        <a href="tel:+92-3800-8060" class="main-header__right__call">
                            <div class="main-header__right__icon">
                                <i class="icon-email"></i>
                            </div>
                            <div class="main-header__right__content">
                                <span class="main-header__right__text">email</span>
                                <h6 class="main-header__right__number">info@cdreams.org</h6>
                            </div>
                        </a>
                        <div class="main-header__element">
                            <div class="main-header__element__btn">
                                <i class="icon-interface"></i>
                            </div>
                            <div class="mobile-nav__btn mobile-nav__toggler">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- main-slider-start -->
        <section class="main-slider-one">
            <div class="main-slider-one__carousel eolimn-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 5000,
		"nav": false,
		"dots": true,
		"margin": 0
	    }'>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                        <span class="main-slider-one__line">CDreams</span>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="main-slider-one__content">
                                        <h5 class="main-slider-one__sub-title"> one team, one dream
                                            <span class="main-slider-one__sub-title__line-group">
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--1"></span>
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--2"></span>
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--3"></span>
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--4"></span>
                                            </span>
                                        </h5>
                                        <h2 class="main-slider-one__title">Green Team Academy
                                        </h2>
                                        <p class="main-slider-one__text">Gain the skills and knowledge needed to implement effective, eco-friendly strategies within your community and beyond, becoming a catalyst for positive environmental change.</p>
                                        <div class="main-slider-one__btn">
                                            <a href="#GTA" class="eolimn-btn eolimn-btn--base">Join Green Team<i class="icon-arrow-point-to-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="main-slider-one__video">
                                        <a href="https://vimeo.com/1031360442?share=copy" class="main-slider-one__video__popup video-popup"> play </a>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="main-slider-one__shape">-->
<!--&lt;!&ndash;                            href="Http://youtube.com/watch?v=2uHdj6d1rSs"&ndash;&gt;-->
<!--                            <img src="assets/images/shapes/hero-shape-1-1.png" alt>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-2.jpg);"></div>
                        <span class="main-slider-one__line">CDreams</span>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="main-slider-one__content">
                                        <h5 class="main-slider-one__sub-title"> green collar future
                                            <span class="main-slider-one__sub-title__line-group">
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--1"></span>
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--2"></span>
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--3"></span>
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--4"></span>
                                            </span>
                                        </h5>
                                        <h2 class="main-slider-one__title">Green Collar Contractors
                                        </h2>
                                        <p class="main-slider-one__text">We streamline technical assistance for contractors, optimizing their business to increase their capacity.</p>
                                        <div class="main-slider-one__btn">
                                            <a href="#Contractors" class="eolimn-btn eolimn-btn--base">general contracting platform <i class="icon-arrow-point-to-right"></i></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="main-slider-one__video"">
                                        <a href="https://vimeo.com/1031360913?share=copy" class="main-slider-one__video__popup video-popup"> play </a>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="main-slider-one__shape">-->
<!--                            <img src="assets/images/shapes/hero-shape-1-1.png" alt>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-3.jpg);"></div>
                        <span class="main-slider-one__line">CDreams</span>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="main-slider-one__content">
                                        <h5 class="main-slider-one__sub-title"> Empowering Communities
                                            <span class="main-slider-one__sub-title__line-group">
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--1"></span>
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--2"></span>
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--3"></span>
                                                <span class="main-slider-one__sub-title__line main-slider-one__sub-title__line--4"></span>
                                            </span>
                                        </h5>
                                        <h2 class="main-slider-one__title">Green Connect
                                        </h2>
                                        <p class="main-slider-one__text">Comprehensive AI match-making tool for building a thriving green career through mentorship, job-matching, and business opportunities.</p>
                                        <div class="main-slider-one__btn">
                                            <a href="#Connect" class="eolimn-btn eolimn-btn--base">Green Connect App <i class="icon-arrow-point-to-right"></i></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="main-slider-one__video">
                                        <a href="https://vimeo.com/1030419960?share=copy" class="main-slider-one__video__popup video-popup"> play </a>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="main-slider-one__shape">-->
<!--                            <img src="assets/images/shapes/hero-shape-1-1.png" alt>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider-end -->

        <!-- About Section Start -->
        <section class="about-one" id="about">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="about-one__left">
                            <div class="about-one__thumb wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <img src="assets/images/about/about-1-1.jpg" alt="eolimn image">
<!--                                <div class="about-one__funfact count-box">-->
<!--                                    <h3 class="about-one__count">-->
<!--                                        <span class="count-text" data-stop="25" data-speed="1500"></span>-->
<!--                                        <sub>+</sub>-->
<!--                                    </h3>-->
<!--                                    <p class="about-one__funfact__text">years of experience</p>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="sec-title__icon icon-solar-panel"></i>
                                    <h6 class="sec-title__tagline">our mission</h6>
                                </div>
                                <h3 class="sec-title__title">Empowering the Future of the Green Economy</h3>
                            </div>
                            <p class="about-one__top__text about-one__top__text--text">Working to create a world of greener, cleaner, and more sustainable energy, one community at a time</p>
                            <p class="about-one__top__text">Our mission is to empower the green economy by providing equitable access to workforce development, education, and training in underserved communities. </br></br>Leveraging advanced technology solutions, we aim to cultivate the next generation of clean energy leaders, fostering sustainable innovations that benefit individuals, communities, and the environment.</p>
                            <ul class="about-one__list list-unstyled">
                                <li class="about-one__list__item"><i class="icon-checked"></i> Education</li>
                                <li class="about-one__list__item"><i class="icon-checked"></i> Training</li>
                                <li class="about-one__list__item"><i class="icon-checked"></i> Job Placement</li>
                                <li class="about-one__list__item"><i class="icon-checked"></i> Energy Insights</li>
                            </ul>
<!--                            about.html-->
                            <a href="" class="eolimn-btn">more about us <i class="icon-arrow-point-to-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-one__shape">
                <img src="assets/images/shapes/about-1-1.png" alt>
            </div>
        </section>
        <!-- About Section End -->

        <!-- About Section Start -->
        <section class="about-one" id="about">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="about-one__left">
                                                        <div class="about-one__thumb wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                                            <img src="assets/images/about/about-1-2.jpg" alt="eolimn image">
<!--                                                            <div class="about-one__funfact count-box">-->
<!--                                                                <h3 class="about-one__count">-->
<!--                                                                    <span class="count-text" data-stop="25" data-speed="1500"></span>-->
<!--                                                                    <sub>+</sub>-->
<!--                                                                </h3>-->
<!--                                                                <p class="about-one__funfact__text">years of experience</p>-->
<!--                                                            </div>-->
                                                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="sec-title__icon icon-solar-panel"></i>
                                    <h6 class="sec-title__tagline">one-stop-shop for green collar career</h6>
                                </div>
                                <h3 class="sec-title__title">Our Green Collar Jobs Program</h3>
                            </div>
<!--                            <p class="about-one__top__text about-one__top__text&#45;&#45;text">In recent years, new capacity across the solar value chain has become necessary to support the PV market’s growth. However</p>-->
                            <p class="about-one__top__text">The Green Collar Jobs program is a comprehensive initiative that combines our three core programs to deliver a complete pathway to success in the green economy. While our apps and platforms are currently in development, our programs are fully operational offline, providing immediate support and training to our participants.</p>
<!--                            <ul class="about-one__list list-unstyled">-->
<!--                                <li class="about-one__list__item"><i class="icon-checked"></i> Education</li>-->
<!--                                <li class="about-one__list__item"><i class="icon-checked"></i> Training</li>-->
<!--                                <li class="about-one__list__item"><i class="icon-checked"></i> Job Placement</li>-->
<!--                                <li class="about-one__list__item"><i class="icon-checked"></i> Energy Insights</li>-->
<!--                            </ul>-->
                            <!--                            about.html-->
                            </br>
                            <a href="" class="eolimn-btn">learn more <i class="icon-arrow-point-to-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-one__shape">
                <img src="assets/images/shapes/about-1-1.png" alt>
            </div>
        </section>
        <!-- About Section End -->

	    
        <!-- About Section Start -->
        <section class="about-one" id="about">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="about-one__left">
                                                        <div class="about-one__thumb wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                                            <img src="assets/images/about/about-0-1.jpg" alt="eolimn image">
<!--                                                            <div class="about-one__funfact count-box">-->
<!--                                                                <h3 class="about-one__count">-->
<!--                                                                    <span class="count-text" data-stop="25" data-speed="1500"></span>-->
<!--                                                                    <sub>+</sub>-->
<!--                                                                </h3>-->
<!--                                                                <p class="about-one__funfact__text">years of experience</p>-->
<!--                                                            </div>-->
                                                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div id="GTA">
                        <div class="about-one__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="sec-title__icon icon-solar-panel"></i>
                                    <h6 class="sec-title__tagline">education</h6>
                                </div>
                                <h3 class="sec-title__title">Green Team Academy</h3>
                            </div>
                            <p class="about-one__top__text about-one__top__text&#45;&#45;text">The Green Team Academy is an initiative supported by the University of Miami and the Department of Education, designed to cultivate the next generation of environmental leaders. </p>
                            <p class="about-one__top__text">Our program starts with comprehensive energy assessment training, providing an essential foundation in sustainable practices and clean energy solutions. </b></b> Participants can then tailor their educational journey by choosing specialized pathways that align with their interests and career goals, either a TECHNICAL or TRADE path. Each pathway offers personalized support: mentorship from industry experts, advanced learning tools, and hands-on experience with real-world projects. We ensure that every participant has access to the necessary resources to cover training costs, making sustainability education accessible and affordable.</p>
                            <ul class="about-one__list list-unstyled">
                                <li class="about-one__list__item"><i class="icon-checked"></i> Entry-Level Training</li>
                                <li class="about-one__list__item"><i class="icon-checked"></i> Hands-On Experience</li>
                               <li class="about-one__list__item"><i class="icon-checked"></i> Comprehensive Support</li>
                               <li class="about-one__list__item"><i class="icon-checked"></i> Personalized Pathways</li>
<!--                            </ul>-->
                            <!--                            about.html-->
                            </br>
                            <a href="http://cdreams.org/register.php" class="eolimn-btn">Enroll Now<i class="icon-arrow-point-to-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-one__shape">
                <img src="assets/images/shapes/about-1-1.png" alt>
            </div>
        </section>
        <!-- About Section End -->

        <!-- About Section Start -->
        <section class="about-one" id="about">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="about-one__left">
                                                        <div class="about-one__thumb wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                                            <img src="assets/images/about/about-1-3.jpg" alt="eolimn image">
<!--                                                            <div class="about-one__funfact count-box">-->
<!--                                                                <h3 class="about-one__count">-->
<!--                                                                    <span class="count-text" data-stop="25" data-speed="1500"></span>-->
<!--                                                                    <sub>+</sub>-->
<!--                                                                </h3>-->
<!--                                                                <p class="about-one__funfact__text">years of experience</p>-->
<!--                                                            </div>-->
                                                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div id="Contractors">
                        <div class="about-one__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="sec-title__icon icon-solar-panel"></i>
                                    <h6 class="sec-title__tagline">contractor</h6>
                                </div>
                                <h3 class="sec-title__title">Our Green Contractor platform</h3>
                            </div>
                            <!--                            <p class="about-one__top__text about-one__top__text&#45;&#45;text">In recent years, new capacity across the solar value chain has become necessary to support the PV market’s growth. However</p>-->
                            <p class="about-one__top__text">Optimizing businesses for a sustainable future involves providing comprehensive technical assistance and integrating cutting-edge AI for green contractors. This includes offering real-time technical support and advanced communication tools to enhance efficiency. AI-driven strategies are employed to optimize business operations, ensuring they are both effective and eco-friendly. Additionally, businesses are equipped with resources that promote sustainable practices, enabling them to minimize their environmental impact while maintaining competitiveness in the market.</p>
<!--                            <ul class="about-one__list list-unstyled">-->
<!--                                <li class="about-one__list__item"><i class="icon-checked"></i> Education</li>-->
<!--                                <li class="about-one__list__item"><i class="icon-checked"></i> Training</li>-->
<!--                                <li class="about-one__list__item"><i class="icon-checked"></i> Job Placement</li>-->
<!--                                <li class="about-one__list__item"><i class="icon-checked"></i> Energy Insights</li>-->
<!--                            </ul>-->
                            <!--                            about.html-->
                            </br>
                            <a href="http://cdreams.org/register.php" class="eolimn-btn">sign up <i class="icon-arrow-point-to-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-one__shape">
                <img src="assets/images/shapes/about-1-1.png" alt>
            </div>
        </section>
        <!-- About Section End -->

        <!-- About Section Start -->
        <section class="about-one" id="about">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="about-one__left">
                                                        <div class="about-one__thumb wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                                            <img src="assets/images/about/about-0-2.jpg" alt="eolimn image">
<!--                                                            <div class="about-one__funfact count-box">-->
<!--                                                                <h3 class="about-one__count">-->
<!--                                                                    <span class="count-text" data-stop="25" data-speed="1500"></span>-->
<!--                                                                    <sub>+</sub>-->
<!--                                                                </h3>-->
<!--                                                                <p class="about-one__funfact__text">years of experience</p>-->
<!--                                                            </div>-->
                                                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div id="Connect">
                        <div class="about-one__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="sec-title__icon icon-solar-panel"></i>
                                    <h6 class="sec-title__tagline">job placement</h6>
                                </div>
                                <h3 class="sec-title__title">Green Connect App</h3>
                            </div>
                            <p class="about-one__top__text about-one__top__text&#45;&#45;text">Advanced AI Algorithms match professionals with mentors and job opportunities tailored to their skills and goals </p>
                            <p class="about-one__top__text">The Green Connect App is a revolutionary matchmaking platform designed to bridge the gap between green businesses and trained professionals. Leveraging advanced AI technology, Green Connect fosters mentor/mentee and employer/employee relationships that are mutually beneficial, promoting growth and sustainability within the green economy. Professionals can create detailed profiles showcasing their skills, certifications, and career aspirations, while businesses can highlight their needs and opportunities. The app’s AI algorithms analyze these profiles to match individuals with the most suitable mentors or job opportunities, ensuring an optimal fit for both parties. This personalized approach not only accelerates professional development but also helps businesses find the right talent to drive their sustainability initiatives.</p>
                            <ul class="about-one__list list-unstyled">
                                <li class="about-one__list__item"><i class="icon-checked"></i> Professional Profiles</li>
                                <li class="about-one__list__item"><i class="icon-checked"></i> Job Matching</li>
                                <li class="about-one__list__item"><i class="icon-checked"></i> Business Opportunities</li>
                                <li class="about-one__list__item"><i class="icon-checked"></i> Mentorship Programs</li>
<!--                            </ul>-->
                            <!--                            about.html-->
                            </br>
                            <a href="http://cdreams.org/register.php" class="eolimn-btn">Enroll Now<i class="icon-arrow-point-to-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-one__shape">
                <img src="assets/images/shapes/about-1-1.png" alt>
            </div>
        </section>
        <!-- About Section End -->
        <section class="solar-bar wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
            <div class="container">
                <div class="solar-bar__inner">
			<div class="solar-bar__list__icon">
                        <i class="icon-street-light"></i>
<!--                        <li class="solar-bar__list__item">-->
<!--                            <div class="solar-bar__list__content">-->
<!--                                <div class="solar-bar__list__icon">-->
<!--                                    <i class="icon-battery-charge"></i>-->
<!--                                </div>-->
<!--                                <h4 class="solar-bar__list__title"><a href="service-d-solar-service.html">Emissions Intensive Jobs</a></h4>-->
<!--&lt;!&ndash;                                <p class="solar-bar__list__text">Lighting the traffic system with solar</p>&ndash;&gt;-->
<!--                            </div>-->
<!--                        </li>-->
                        <li class="solar-bar__list__item">
                            <div class="solar-bar__list__content">
                                <div class="solar-bar__list__icon">
                                    <i class="icon-street-light"></i>
                                </div>
                                <h4 class="solar-bar__list__title"><!---<a href="service-d-hydropower-plants.html">--->Environment</a></h4>
<!--                                <p class="solar-bar__list__text">Lighting the traffic system with solar</p>-->
                            </div>
                        </li>
                        <li class="solar-bar__list__item">
                            <div class="solar-bar__list__content">
                                <div class="solar-bar__list__icon">
                                    <i class="icon-battery-charge"></i>
                                </div>
                                <h4 class="solar-bar__list__title"><!---<a href="service-d-hydropower-plants.html">--->Society</a></h4>
<!--                                <p class="solar-bar__list__text">Lighting the traffic system with solar</p>-->
                            </div>
                        </li>
                        <li class="solar-bar__list__item">
                            <div class="solar-bar__list__content">
                                <div class="solar-bar__list__icon">
                                    <i class="icon-solar-panel-1"></i>
                                </div>
                                <h4 class="solar-bar__list__title"><!---<a href="service-d-wind-generator.html">--->Economy</a></h4>
<!--                                <p class="solar-bar__list__text">Lighting the traffic system with solar</p>-->
                            </div>
                        </li>
<!--                        <li class="solar-bar__list__item">-->
<!--                            <div class="solar-bar__list__content">-->
<!--                                <div class="solar-bar__list__icon">-->
<!--                                    <i class="icon-battery-charge"></i>-->
<!--                                </div>-->
<!--                                <h4 class="solar-bar__list__title"><a href="service-d-wind-generator.html">Climate Reliant Jobs</a></h4>-->
<!--                                &lt;!&ndash;                                <p class="solar-bar__list__text">Lighting the traffic system with solar</p>&ndash;&gt;-->
<!--                            </div>-->
<!--                        </li>-->
                    </ul>
                </div>
            </div>
        </section>
        </br>
        </br>
        </br>

<!--        &lt;!&ndash; Service Section Start &ndash;&gt;-->
<!--        <section class="service-one" id="services">-->
<!--            <div class="service-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/service-bg-1-1.png);"></div>-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-9">-->
<!--                        <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                            <div class="d-flex align-items-center justify-content-start">-->
<!--                                <i class="sec-title__icon icon-solar-panel"></i>-->
<!--                                <h6 class="sec-title__tagline">our services</h6>-->
<!--                            </div>-->
<!--                            <h3 class="sec-title__title">what we offer</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container-fluid">-->
<!--                <div class="service-one__inner wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>-->
<!--                    <div class="service-one__carousel eolimn-owl__carousel eolimn-owl__carousel&#45;&#45;basic-nav owl-carousel owl-theme" data-owl-options='{-->
<!--				"items": 4,-->
<!--				"margin": 30,-->
<!--				"loop": true,-->
<!--				"smartSpeed": 700,-->
<!--				"nav": true,-->
<!--				"navText": ["<span class=\"icon-arrow-point-to-left\"></span>","<span class=\"icon-arrow-point-to-right\"></span>"],-->
<!--				"dots": false,-->
<!--				"autoplay": true,-->
<!--				"responsive": {-->
<!--					"0": {-->
<!--						"margin": 10,-->
<!--						"items": 1-->
<!--					},-->
<!--					"600": {-->
<!--						"margin": 10,-->
<!--						"items": 2-->
<!--					},-->
<!--					"767": {-->
<!--						"margin": 30,-->
<!--						"items": 2-->
<!--					},-->
<!--					"992": {-->
<!--						"margin": 30,-->
<!--						"items": 3-->
<!--					},-->
<!--					"1300": {-->
<!--						"margin": 30,-->
<!--						"items": 3-->
<!--					},-->
<!--					"1600": {-->
<!--						"margin": 30,-->
<!--						"items": 4-->
<!--					}-->
<!--				}-->
<!--				}'>-->
<!--                        <div class="item">-->
<!--                            <div class="service-one__item">-->
<!--                                <div class="service-one__thumb">-->
<!--                                    <img src="assets/images/service/service-2-1.jpg" alt="image">-->
<!--                                </div>-->
<!--                                <div class="service-one__content">-->
<!--                                    <h4 class="service-one__content__title"><a href="service-d-energy-panels.html">Solar Panels Services</a></h4>-->
<!--                                    <p class="service-one__content__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing </p>-->
<!--                                </div>-->
<!--                                <div class="service-one__btn">-->
<!--                                    <a href="service-d-energy-panels.html" class="service-one__btn__link"><span>service details</span> <i class="icon-arrow-point-to-right"></i></a>-->
<!--                                    <a href="service-d-energy-panels.html" class="service-one__btn__link service-one__btn__link&#45;&#45;hover"><i class="icon-arrow-point-to-right"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="service-one__item">-->
<!--                                <div class="service-one__thumb">-->
<!--                                    <img src="assets/images/service/service-2-2.jpg" alt="image">-->
<!--                                </div>-->
<!--                                <div class="service-one__content">-->
<!--                                    <h4 class="service-one__content__title"><a href="service-d-solar-service.html">Turbines Services</a></h4>-->
<!--                                    <p class="service-one__content__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing </p>-->
<!--                                </div>-->
<!--                                <div class="service-one__btn">-->
<!--                                    <a href="service-d-solar-service.html" class="service-one__btn__link"><span>service details</span> <i class="icon-arrow-point-to-right"></i></a>-->
<!--                                    <a href="service-d-solar-service.html" class="service-one__btn__link service-one__btn__link&#45;&#45;hover"><i class="icon-arrow-point-to-right"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="service-one__item">-->
<!--                                <div class="service-one__thumb">-->
<!--                                    <img src="assets/images/service/service-2-3.jpg" alt="image">-->
<!--                                </div>-->
<!--                                <div class="service-one__content">-->
<!--                                    <h4 class="service-one__content__title"><a href="service-d-hydropower-plants.html">Hydropower Plants</a></h4>-->
<!--                                    <p class="service-one__content__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing </p>-->
<!--                                </div>-->
<!--                                <div class="service-one__btn">-->
<!--                                    <a href="service-d-hydropower-plants.html" class="service-one__btn__link"><span>service details</span> <i class="icon-arrow-point-to-right"></i></a>-->
<!--                                    <a href="service-d-hydropower-plants.html" class="service-one__btn__link service-one__btn__link&#45;&#45;hover"><i class="icon-arrow-point-to-right"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="service-one__item">-->
<!--                                <div class="service-one__thumb">-->
<!--                                    <img src="assets/images/service/service-2-4.jpg" alt="image">-->
<!--                                </div>-->
<!--                                <div class="service-one__content">-->
<!--                                    <h4 class="service-one__content__title"><a href="service-d-thermo-stone.html">Fossil Resources</a></h4>-->
<!--                                    <p class="service-one__content__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing </p>-->
<!--                                </div>-->
<!--                                <div class="service-one__btn">-->
<!--                                    <a href="service-d-thermo-stone.html" class="service-one__btn__link"><span>service details</span> <i class="icon-arrow-point-to-right"></i></a>-->
<!--                                    <a href="service-d-thermo-stone.html" class="service-one__btn__link service-one__btn__link&#45;&#45;hover"><i class="icon-arrow-point-to-right"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="service-one__item">-->
<!--                                <div class="service-one__thumb">-->
<!--                                    <img src="assets/images/service/service-2-1.jpg" alt="image">-->
<!--                                </div>-->
<!--                                <div class="service-one__content">-->
<!--                                    <h4 class="service-one__content__title"><a href="service-d-energy-panels.html">Solar Panels Services</a></h4>-->
<!--                                    <p class="service-one__content__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing </p>-->
<!--                                </div>-->
<!--                                <div class="service-one__btn">-->
<!--                                    <a href="service-d-energy-panels.html" class="service-one__btn__link"><span>service details</span> <i class="icon-arrow-point-to-right"></i></a>-->
<!--                                    <a href="service-d-energy-panels.html" class="service-one__btn__link service-one__btn__link&#45;&#45;hover"><i class="icon-arrow-point-to-right"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="service-one__item">-->
<!--                                <div class="service-one__thumb">-->
<!--                                    <img src="assets/images/service/service-2-2.jpg" alt="image">-->
<!--                                </div>-->
<!--                                <div class="service-one__content">-->
<!--                                    <h4 class="service-one__content__title"><a href="service-d-solar-service.html">Turbines Services</a></h4>-->
<!--                                    <p class="service-one__content__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing </p>-->
<!--                                </div>-->
<!--                                <div class="service-one__btn">-->
<!--                                    <a href="service-d-solar-service.html" class="service-one__btn__link"><span>service details</span> <i class="icon-arrow-point-to-right"></i></a>-->
<!--                                    <a href="service-d-solar-service.html" class="service-one__btn__link service-one__btn__link&#45;&#45;hover"><i class="icon-arrow-point-to-right"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="service-one__item">-->
<!--                                <div class="service-one__thumb">-->
<!--                                    <img src="assets/images/service/service-2-3.jpg" alt="image">-->
<!--                                </div>-->
<!--                                <div class="service-one__content">-->
<!--                                    <h4 class="service-one__content__title"><a href="service-d-hydropower-plants.html">Hydropower Plants</a></h4>-->
<!--                                    <p class="service-one__content__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing </p>-->
<!--                                </div>-->
<!--                                <div class="service-one__btn">-->
<!--                                    <a href="service-d-hydropower-plants.html" class="service-one__btn__link"><span>service details</span> <i class="icon-arrow-point-to-right"></i></a>-->
<!--                                    <a href="service-d-hydropower-plants.html" class="service-one__btn__link service-one__btn__link&#45;&#45;hover"><i class="icon-arrow-point-to-right"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="service-one__item">-->
<!--                                <div class="service-one__thumb">-->
<!--                                    <img src="assets/images/service/service-2-4.jpg" alt="image">-->
<!--                                </div>-->
<!--                                <div class="service-one__content">-->
<!--                                    <h4 class="service-one__content__title"><a href="service-d-thermo-stone.html">Fossil Resources</a></h4>-->
<!--                                    <p class="service-one__content__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing </p>-->
<!--                                </div>-->
<!--                                <div class="service-one__btn">-->
<!--                                    <a href="service-d-thermo-stone.html" class="service-one__btn__link"><span>service details</span> <i class="icon-arrow-point-to-right"></i></a>-->
<!--                                    <a href="service-d-thermo-stone.html" class="service-one__btn__link service-one__btn__link&#45;&#45;hover"><i class="icon-arrow-point-to-right"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="service-one__form__inner wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>-->
<!--                <div class="container">-->
<!--                    <div class="cta__form">-->
<!--                        <div class="cta__form__left">-->
<!--                            <div class="cta__form__title">-->
<!--                                <div class="cta__form__title__inner">-->
<!--                                    <i class="cta__form__title__icon icon-solar-panel"></i>-->
<!--                                    <h6 class="cta__form__title__tagline">get free consultancy</h6>-->
<!--                                </div>-->
<!--                                <h3 class="sec-title__title">Get Free or call us fro Consultancy</h3>-->
<!--                            </div>-->
<!--                            <a href="tel:+258-3269-125" class="cta__form__btn"><span>+258-3269 125</span></a>-->
<!--                        </div>-->
<!--                        <div class="cta__form__right">-->
<!--                            <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="inc/sendemail.php">-->
<!--                                <div class="form-one__group">-->
<!--                                    <div class="form-one__control">-->
<!--                                        <input type="text" name="name" placeholder="Full name">-->
<!--                                    </div>-->
<!--                                    <div class="form-one__control">-->
<!--                                        <input type="email" name="email" placeholder="email">-->
<!--                                    </div>-->
<!--                                    <div class="form-one__control form-one__control&#45;&#45;full">-->
<!--                                        <button type="submit" class="eolimn-btn">send message <i class="icon-arrow-point-to-right"></i></button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="service-one__shape">-->
<!--                <img src="assets/images/shapes/terbile.png" alt>-->
<!--            </div>-->
<!--        </section>-->
<!--        &lt;!&ndash; Service Section End &ndash;&gt;-->

<!--        &lt;!&ndash; work process Section Start &ndash;&gt;-->
<!--        <section class="work-process-one">-->
<!--            <div class="work-process-one__bg" style="background-image: url(assets/images/shapes/work-process-shape-1-1.png);"></div>-->
<!--            <div class="container">-->
<!--                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                    <div class="d-flex align-items-center justify-content-center">-->
<!--                        <i class="sec-title__icon icon-solar-panel"></i>-->
<!--                        <h6 class="sec-title__tagline">work process</h6>-->
<!--                    </div>-->
<!--                    <h3 class="sec-title__title">our work process</h3>-->
<!--                </div>-->
<!--                <div class="row gutter-y-30">-->
<!--                    <div class="col-lg-4 col-md-6">-->
<!--                        <div class="work-process-one__item  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                            <div class="work-process-one__item__top">-->
<!--                                <div class="work-process-one__icon">-->
<!--                                    <i class="icon-solar-house"></i>-->
<!--                                </div>-->
<!--                                <div class="work-process-one__item__number"></div>-->
<!--                            </div>-->
<!--                            <h4 class="work-process-one__title">getting started</h4>-->
<!--                            <p class="work-process-one__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing facilitie</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6">-->
<!--                        <div class="work-process-one__item  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>-->
<!--                            <div class="work-process-one__item__top">-->
<!--                                <div class="work-process-one__icon">-->
<!--                                    <i class="icon-system"></i>-->
<!--                                </div>-->
<!--                                <div class="work-process-one__item__number"></div>-->
<!--                            </div>-->
<!--                            <h4 class="work-process-one__title">solar installation</h4>-->
<!--                            <p class="work-process-one__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing facilitie</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6">-->
<!--                        <div class="work-process-one__item  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>-->
<!--                            <div class="work-process-one__item__top">-->
<!--                                <div class="work-process-one__icon">-->
<!--                                    <i class="icon-solar-system"></i>-->
<!--                                </div>-->
<!--                                <div class="work-process-one__item__number"></div>-->
<!--                            </div>-->
<!--                            <h4 class="work-process-one__title">ready to use</h4>-->
<!--                            <p class="work-process-one__text">the capital required to establish and scale-up wafer, solar cell and solar module manufacturing facilitie</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        &lt;!&ndash; work process Section End &ndash;&gt;-->

<!--        &lt;!&ndash; FAQS Section Start &ndash;&gt;-->
<!--        <section class="faqs-two">-->
<!--            <div class="faqs-two__bg" style="background-image: url(assets/images/shapes/faqs-shape-1-1.png);"></div>-->
<!--            <div class="container">-->
<!--                <div class="row gutter-y-30">-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="faqs-two__thumb faqs-two__thumb&#45;&#45;two wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                            <div class="faqs-two__thumb__item">-->
<!--                                <img src="assets/images/resources/faqs-2-1.jpg" alt="eolimn image">-->
<!--                            </div>-->
<!--                            <div class="faqs-two__thumb__item">-->
<!--                                <img src="assets/images/resources/faqs-2-2.jpg" alt="eolimn image">-->
<!--                                <div class="faqs-two__thumb__item__video">-->
<!--                                    <div class="faqs-two__thumb__item__icon">-->
<!--                                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="faqs-two__video video-popup">-->
<!--                                            <i class="icon-play"></i>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <p class="faqs-two__thumb__item__text">Watch Our Intro</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                            <div class="d-flex align-items-center justify-content-start">-->
<!--                                <i class="sec-title__icon icon-solar-panel"></i>-->
<!--                                <h6 class="sec-title__tagline">QUESTIONS FOR US</h6>-->
<!--                            </div>-->
<!--                            <h3 class="sec-title__title">Some Faq Question?</h3>-->
<!--                        </div>-->
<!--                        <p class="faqs-two__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>the capital required to establish and scale-up wafer, solar cell and solar module manufacturing facilities is considerable, Turpis egestas pretiu enean pharetra magna ac placerat amet. Sit amet luctus venenatis lectus</p>-->
<!--                        <div class="faq-page__accordion-two eolimn-accrodion wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms' data-grp-name="eolimn-accrodion">-->
<!--                            <div class="accrodion">-->
<!--                                <div class="accrodion-title">-->
<!--                                    <h4 class="accrodion-title__text"><span class="accrodion-title__icon"></span>How do solar panels work?</h4>-->
<!--                                </div>-->
<!--                                <div class="accrodion-content">-->
<!--                                    <div class="inner">-->
<!--                                        <p class="inner__text">There are two main types: solar photovoltaic (PV) systems for electricity generation and solar thermal systems for heating applications.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="accrodion active">-->
<!--                                <div class="accrodion-title">-->
<!--                                    <h4 class="accrodion-title__text"><span class="accrodion-title__icon"></span>What are the main types of solar energy systems?</h4>-->
<!--                                </div>-->
<!--                                <div class="accrodion-content">-->
<!--                                    <div class="inner">-->
<!--                                        <p class="inner__text">There are two main types: solar photovoltaic (PV) systems for electricity generation and solar thermal systems for heating applications.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="accrodion">-->
<!--                                <div class="accrodion-title">-->
<!--                                    <h4 class="accrodion-title__text"> <span class="accrodion-title__icon"></span>What are the advantages of solar energy?</h4>-->
<!--                                </div>-->
<!--                                <div class="accrodion-content">-->
<!--                                    <div class="inner">-->
<!--                                        <p class="inner__text">There are two main types: solar photovoltaic (PV) systems for electricity generation and solar thermal systems for heating applications.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="accrodion">-->
<!--                                <div class="accrodion-title">-->
<!--                                    <h4 class="accrodion-title__text"><span class="accrodion-title__icon"></span>How much space do I need for solar panels?</h4>-->
<!--                                </div>-->
<!--                                <div class="accrodion-content">-->
<!--                                    <div class="inner">-->
<!--                                        <p class="inner__text">There are two main types: solar photovoltaic (PV) systems for electricity generation and solar thermal systems for heating applications.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="faqs-two__element">-->
<!--                <img src="assets/images/shapes/faqs-1-1.png" alt>-->
<!--            </div>-->
<!--        </section>-->
<!--        &lt;!&ndash; FAQS Section End &ndash;&gt;-->

<!--        &lt;!&ndash; Project Section Start &ndash;&gt;-->
<!--        <section class="project-one project-one&#45;&#45;home">-->
<!--            <div class="project-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/project-bg-1-1.jpg);"></div>-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-9">-->
<!--                        <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                            <div class="d-flex align-items-center justify-content-start">-->
<!--                                <i class="sec-title__icon icon-solar-panel"></i>-->
<!--                                <h6 class="sec-title__tagline">LATEST PROJECT</h6>-->
<!--                            </div>-->
<!--                            <h3 class="sec-title__title">Our Latest Project</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="project-one__inner  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>-->
<!--                    <div class="project-one__carousel eolimn-owl__carousel  eolimn-owl__carousel&#45;&#45;basic-nav owl-carousel owl-theme" data-owl-options='{-->
<!--				"items": 2,-->
<!--				"margin": 0,-->
<!--				"loop": true,-->
<!--				"smartSpeed": 700,-->
<!--				"nav": true,-->
<!--				"navText": ["<span class=\"icon-arrow-point-to-left\"></span>","<span class=\"icon-arrow-point-to-right\"></span>"],-->
<!--				"dots": false,-->
<!--				"autoplay": false,-->
<!--				"responsive": {-->
<!--					"0": {-->
<!--						"items": 1,-->
<!--						"margin": 30-->
<!--					},-->
<!--					"576": {-->
<!--						"items": 1,-->
<!--						"margin": 30-->
<!--					},-->
<!--					"992": {-->
<!--						"items": 2,-->
<!--						"margin": 30-->
<!--					}-->
<!--				}-->
<!--			}'>-->

<!--                        <div class="item">-->
<!--                            <div class="project-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>-->
<!--                                <div class="project-card__image">-->
<!--                                    <img src="assets/images/service/service-3-1.jpg" alt="@@name">-->
<!--                                </div>-->
<!--                                <div class="project-card__hover">-->
<!--                                    <div class="project-card__content">-->
<!--                                        <span class="project-card__dec">solar energy</span>-->
<!--                                        <h3 class="project-card__title"><a href="project-details.html">Solar Energy system</a></h3>-->

<!--                                    </div>-->
<!--                                    <a href="project-details.html" class="project-card__content__icon">-->
<!--                                        <span class="project-card__content__icon__item"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="project-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>-->
<!--                                <div class="project-card__image">-->
<!--                                    <img src="assets/images/service/service-3-2.jpg" alt="@@name">-->
<!--                                </div>-->
<!--                                <div class="project-card__hover">-->
<!--                                    <div class="project-card__content">-->
<!--                                        <span class="project-card__dec">solar energy</span>-->
<!--                                        <h3 class="project-card__title"><a href="project-details.html">Solar Energy system</a></h3>-->

<!--                                    </div>-->
<!--                                    <a href="project-details.html" class="project-card__content__icon">-->
<!--                                        <span class="project-card__content__icon__item"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="project-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>-->
<!--                                <div class="project-card__image">-->
<!--                                    <img src="assets/images/service/service-3-3.jpg" alt="@@name">-->
<!--                                </div>-->
<!--                                <div class="project-card__hover">-->
<!--                                    <div class="project-card__content">-->
<!--                                        <span class="project-card__dec">solar energy</span>-->
<!--                                        <h3 class="project-card__title"><a href="project-details.html">Solar Energy system</a></h3>-->

<!--                                    </div>-->
<!--                                    <a href="project-details.html" class="project-card__content__icon">-->
<!--                                        <span class="project-card__content__icon__item"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="project-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>-->
<!--                                <div class="project-card__image">-->
<!--                                    <img src="assets/images/service/service-3-4.jpg" alt="@@name">-->
<!--                                </div>-->
<!--                                <div class="project-card__hover">-->
<!--                                    <div class="project-card__content">-->
<!--                                        <span class="project-card__dec">solar energy</span>-->
<!--                                        <h3 class="project-card__title"><a href="project-details.html">Solar Energy system</a></h3>-->

<!--                                    </div>-->
<!--                                    <a href="project-details.html" class="project-card__content__icon">-->
<!--                                        <span class="project-card__content__icon__item"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="project-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>-->
<!--                                <div class="project-card__image">-->
<!--                                    <img src="assets/images/service/service-3-1.jpg" alt="@@name">-->
<!--                                </div>-->
<!--                                <div class="project-card__hover">-->
<!--                                    <div class="project-card__content">-->
<!--                                        <span class="project-card__dec">solar energy</span>-->
<!--                                        <h3 class="project-card__title"><a href="project-details.html">Solar Energy system</a></h3>-->

<!--                                    </div>-->
<!--                                    <a href="project-details.html" class="project-card__content__icon">-->
<!--                                        <span class="project-card__content__icon__item"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="project-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>-->
<!--                                <div class="project-card__image">-->
<!--                                    <img src="assets/images/service/service-3-2.jpg" alt="@@name">-->
<!--                                </div>-->
<!--                                <div class="project-card__hover">-->
<!--                                    <div class="project-card__content">-->
<!--                                        <span class="project-card__dec">solar energy</span>-->
<!--                                        <h3 class="project-card__title"><a href="project-details.html">Solar Energy system</a></h3>-->

<!--                                    </div>-->
<!--                                    <a href="project-details.html" class="project-card__content__icon">-->
<!--                                        <span class="project-card__content__icon__item"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="project-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>-->
<!--                                <div class="project-card__image">-->
<!--                                    <img src="assets/images/service/service-3-3.jpg" alt="@@name">-->
<!--                                </div>-->
<!--                                <div class="project-card__hover">-->
<!--                                    <div class="project-card__content">-->
<!--                                        <span class="project-card__dec">solar energy</span>-->
<!--                                        <h3 class="project-card__title"><a href="project-details.html">Solar Energy system</a></h3>-->

<!--                                    </div>-->
<!--                                    <a href="project-details.html" class="project-card__content__icon">-->
<!--                                        <span class="project-card__content__icon__item"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="project-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>-->
<!--                                <div class="project-card__image">-->
<!--                                    <img src="assets/images/service/service-3-4.jpg" alt="@@name">-->
<!--                                </div>-->
<!--                                <div class="project-card__hover">-->
<!--                                    <div class="project-card__content">-->
<!--                                        <span class="project-card__dec">solar energy</span>-->
<!--                                        <h3 class="project-card__title"><a href="project-details.html">Solar Energy system</a></h3>-->

<!--                                    </div>-->
<!--                                    <a href="project-details.html" class="project-card__content__icon">-->
<!--                                        <span class="project-card__content__icon__item"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        &lt;!&ndash; Project Section End &ndash;&gt;-->

<!--        &lt;!&ndash; Gallery Section Start &ndash;&gt;-->
<!--        <div class="insagram-one">-->
<!--            <div class="container">-->
<!--                <div class="insagram-one__inner">-->
<!--                    <ul class="insagram-one__list list-unstyled">-->
<!--                        <li class="insagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>-->
<!--                            <img src="assets/images/instagram/1.jpg" alt="eolimn">-->
<!--                            <div class="insagram-one__item__icon">-->
<!--                                <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="insagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                            <img src="assets/images/instagram/2.jpg" alt="eolimn">-->
<!--                            <div class="insagram-one__item__icon">-->
<!--                                <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="insagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>-->
<!--                            <img src="assets/images/instagram/3.jpg" alt="eolimn">-->
<!--                            <div class="insagram-one__item__icon">-->
<!--                                <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="insagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>-->
<!--                            <img src="assets/images/instagram/4.jpg" alt="eolimn">-->
<!--                            <div class="insagram-one__item__icon">-->
<!--                                <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="insagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='900ms'>-->
<!--                            <img src="assets/images/instagram/5.jpg" alt="eolimn">-->
<!--                            <div class="insagram-one__item__icon">-->
<!--                                <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        &lt;!&ndash; Gallery Section End &ndash;&gt;-->

<!--        <div class="client-carousel ">-->
<!--            <div class="container">-->
<!--                <div class="client-carousel__one eolimn-owl__carousel owl-theme owl-carousel" data-owl-options='{-->
<!--            "items": 5,-->
<!--            "margin": 65,-->
<!--            "smartSpeed": 700,-->
<!--            "loop":true,-->
<!--            "autoplay": 6000,-->
<!--            "nav":false,-->
<!--            "dots":false,-->
<!--            "navText": ["<span class=\"icon-arrow-point-to-left\"></span>","<span class=\"icon-arrow-point-to-right\"></span>"],-->
<!--            "responsive":{-->
<!--                "0":{-->
<!--                    "items":1,-->
<!--                    "margin": 0-->
<!--                },-->
<!--                "360":{-->
<!--                    "items":2,-->
<!--                    "margin": 30-->
<!--                },-->
<!--                "575":{-->
<!--                    "items":3,-->
<!--                    "margin": 30-->
<!--                },-->
<!--                "768":{-->
<!--                    "items":3,-->
<!--                    "margin": 40-->
<!--                },-->
<!--                "992":{-->
<!--                    "items": 4,-->
<!--                    "margin": 40-->
<!--                },-->
<!--                "1200":{-->
<!--                    "items": 5,-->
<!--                    "margin": 140-->
<!--                }-->
<!--            }-->
<!--            }'>-->
<!--                    <div class="client-carousel__one__item">-->
<!--                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-1.png" alt="eolimn">-->
<!--                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-1.png" alt="eolimn">-->
<!--                    </div>-->
<!--                    <div class="client-carousel__one__item">-->
<!--                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-2.png" alt="eolimn">-->
<!--                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-2.png" alt="eolimn">-->
<!--                    </div>-->
<!--                    <div class="client-carousel__one__item">-->
<!--                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-3.png" alt="eolimn">-->
<!--                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-3.png" alt="eolimn">-->
<!--                    </div>-->
<!--                    <div class="client-carousel__one__item">-->
<!--                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-4.png" alt="eolimn">-->
<!--                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-4.png" alt="eolimn">-->
<!--                    </div>-->
<!--                    <div class="client-carousel__one__item">-->
<!--                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-5.png" alt="eolimn">-->
<!--                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-5.png" alt="eolimn">-->
<!--                    </div>-->

<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        &lt;!&ndash; Testimonials Section Start &ndash;&gt;-->
<!--        <section class="testimonial-one" id="testimonial">-->
<!--            <div class="testimonial-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/testimonial-bg-1-1.png);"></div>-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="sec-title text-center sec-title&#45;&#45;two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                        <div class="d-flex align-items-center justify-content-center">-->
<!--                            <i class="sec-title__icon icon-solar-panel"></i>-->
<!--                            <h6 class="sec-title__tagline">our testimonial</h6>-->
<!--                        </div>-->
<!--                        <h3 class="sec-title__title">people’s talk about us</h3>-->
<!--                    </div>-->
<!--                    <div class="testimonial-one__inner wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                        <div class="testimonial-one__carousel eolimn-owl__carousel eolimn-owl__carousel&#45;&#45;basic-nav owl-carousel owl-theme" data-owl-options='{-->
<!--					"items": 1,-->
<!--					"margin": 0,-->
<!--					"loop": true,-->
<!--					"smartSpeed": 700,-->
<!--					"nav": false,-->
<!--					"navText": ["<span class=\"icon-arrow-point-to-left\"></span>","<span class=\"icon-arrow-point-to-right\"></span>"],-->
<!--					"dots": false,-->
<!--					"autoplay": false,-->
<!--					"responsive": {-->
<!--						"0": {-->
<!--							"items": 1-->
<!--						},-->
<!--						"576": {-->
<!--							"items": 1,-->
<!--							"margin": 30-->
<!--						},-->
<!--						"992": {-->
<!--							"items": 2,-->
<!--							"margin": 30-->
<!--						}-->
<!--					}-->
<!--				}'>-->

<!--                            <div class="item">-->
<!--                                <div class="testimonial-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>-->
<!--                                    <div class="testimonial-card__inner">-->
<!--                                        <div class="testimonial-card__content">-->
<!--                                            <h4 class="testimonial-card__title">solar energy service</h4>-->
<!--                                            <p class="testimonial-card__text">I can't express how thrilled I am with my decision to switch to solar energy! After contemplating the idea for years, I finally took the plunge, and it's been a game-changer for both my wallet.</p>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__bottom">-->
<!--                                            <div class="testimonial-card__author">-->
<!--                                                <div class="testimonial-card__author__thumb">-->
<!--                                                    <img src="assets/images/resources/testimonials.png" alt="eolimn image">-->
<!--                                                </div>-->
<!--                                                <div class="testimonial-card__author__content">-->
<!--                                                    <h5 class="testimonial-card__author__title">John R. Green</h5>-->
<!--                                                    <span class="testimonial-card__author__deg">XYZ Agency</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="testimonial-card__star">-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__quite">-->
<!--                                            <i class="icon-double-quotes"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="testimonial-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>-->
<!--                                    <div class="testimonial-card__inner">-->
<!--                                        <div class="testimonial-card__content">-->
<!--                                            <h4 class="testimonial-card__title">solar energy service</h4>-->
<!--                                            <p class="testimonial-card__text">I can't express how thrilled I am with my decision to switch to solar energy! After contemplating the idea for years, I finally took the plunge, and it's been a game-changer for both my wallet.</p>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__bottom">-->
<!--                                            <div class="testimonial-card__author">-->
<!--                                                <div class="testimonial-card__author__thumb">-->
<!--                                                    <img src="assets/images/resources/testimonials-1-2.png" alt="eolimn image">-->
<!--                                                </div>-->
<!--                                                <div class="testimonial-card__author__content">-->
<!--                                                    <h5 class="testimonial-card__author__title">Bernadette</h5>-->
<!--                                                    <span class="testimonial-card__author__deg">XYZ Agency</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="testimonial-card__star">-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__quite">-->
<!--                                            <i class="icon-double-quotes"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="testimonial-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>-->
<!--                                    <div class="testimonial-card__inner">-->
<!--                                        <div class="testimonial-card__content">-->
<!--                                            <h4 class="testimonial-card__title">solar energy service</h4>-->
<!--                                            <p class="testimonial-card__text">I can't express how thrilled I am with my decision to switch to solar energy! After contemplating the idea for years, I finally took the plunge, and it's been a game-changer for both my wallet.</p>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__bottom">-->
<!--                                            <div class="testimonial-card__author">-->
<!--                                                <div class="testimonial-card__author__thumb">-->
<!--                                                    <img src="assets/images/resources/testimonials.png" alt="eolimn image">-->
<!--                                                </div>-->
<!--                                                <div class="testimonial-card__author__content">-->
<!--                                                    <h5 class="testimonial-card__author__title">Madeleine</h5>-->
<!--                                                    <span class="testimonial-card__author__deg">XYZ Agency</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="testimonial-card__star">-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__quite">-->
<!--                                            <i class="icon-double-quotes"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="testimonial-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>-->
<!--                                    <div class="testimonial-card__inner">-->
<!--                                        <div class="testimonial-card__content">-->
<!--                                            <h4 class="testimonial-card__title">solar energy service</h4>-->
<!--                                            <p class="testimonial-card__text">I can't express how thrilled I am with my decision to switch to solar energy! After contemplating the idea for years, I finally took the plunge, and it's been a game-changer for both my wallet.</p>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__bottom">-->
<!--                                            <div class="testimonial-card__author">-->
<!--                                                <div class="testimonial-card__author__thumb">-->
<!--                                                    <img src="assets/images/resources/testimonials-1-2.png" alt="eolimn image">-->
<!--                                                </div>-->
<!--                                                <div class="testimonial-card__author__content">-->
<!--                                                    <h5 class="testimonial-card__author__title">Savannah Nguyen</h5>-->
<!--                                                    <span class="testimonial-card__author__deg">XYZ Agency</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="testimonial-card__star">-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__quite">-->
<!--                                            <i class="icon-double-quotes"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="testimonial-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>-->
<!--                                    <div class="testimonial-card__inner">-->
<!--                                        <div class="testimonial-card__content">-->
<!--                                            <h4 class="testimonial-card__title">solar energy service</h4>-->
<!--                                            <p class="testimonial-card__text">I can't express how thrilled I am with my decision to switch to solar energy! After contemplating the idea for years, I finally took the plunge, and it's been a game-changer for both my wallet.</p>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__bottom">-->
<!--                                            <div class="testimonial-card__author">-->
<!--                                                <div class="testimonial-card__author__thumb">-->
<!--                                                    <img src="assets/images/resources/testimonials.png" alt="eolimn image">-->
<!--                                                </div>-->
<!--                                                <div class="testimonial-card__author__content">-->
<!--                                                    <h5 class="testimonial-card__author__title">John R. Green</h5>-->
<!--                                                    <span class="testimonial-card__author__deg">XYZ Agency</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="testimonial-card__star">-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__quite">-->
<!--                                            <i class="icon-double-quotes"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="testimonial-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>-->
<!--                                    <div class="testimonial-card__inner">-->
<!--                                        <div class="testimonial-card__content">-->
<!--                                            <h4 class="testimonial-card__title">solar energy service</h4>-->
<!--                                            <p class="testimonial-card__text">I can't express how thrilled I am with my decision to switch to solar energy! After contemplating the idea for years, I finally took the plunge, and it's been a game-changer for both my wallet.</p>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__bottom">-->
<!--                                            <div class="testimonial-card__author">-->
<!--                                                <div class="testimonial-card__author__thumb">-->
<!--                                                    <img src="assets/images/resources/testimonials-1-2.png" alt="eolimn image">-->
<!--                                                </div>-->
<!--                                                <div class="testimonial-card__author__content">-->
<!--                                                    <h5 class="testimonial-card__author__title">Bernadette</h5>-->
<!--                                                    <span class="testimonial-card__author__deg">XYZ Agency</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="testimonial-card__star">-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__quite">-->
<!--                                            <i class="icon-double-quotes"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="testimonial-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>-->
<!--                                    <div class="testimonial-card__inner">-->
<!--                                        <div class="testimonial-card__content">-->
<!--                                            <h4 class="testimonial-card__title">solar energy service</h4>-->
<!--                                            <p class="testimonial-card__text">I can't express how thrilled I am with my decision to switch to solar energy! After contemplating the idea for years, I finally took the plunge, and it's been a game-changer for both my wallet.</p>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__bottom">-->
<!--                                            <div class="testimonial-card__author">-->
<!--                                                <div class="testimonial-card__author__thumb">-->
<!--                                                    <img src="assets/images/resources/testimonials.png" alt="eolimn image">-->
<!--                                                </div>-->
<!--                                                <div class="testimonial-card__author__content">-->
<!--                                                    <h5 class="testimonial-card__author__title">Madeleine</h5>-->
<!--                                                    <span class="testimonial-card__author__deg">XYZ Agency</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="testimonial-card__star">-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__quite">-->
<!--                                            <i class="icon-double-quotes"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="testimonial-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>-->
<!--                                    <div class="testimonial-card__inner">-->
<!--                                        <div class="testimonial-card__content">-->
<!--                                            <h4 class="testimonial-card__title">solar energy service</h4>-->
<!--                                            <p class="testimonial-card__text">I can't express how thrilled I am with my decision to switch to solar energy! After contemplating the idea for years, I finally took the plunge, and it's been a game-changer for both my wallet.</p>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__bottom">-->
<!--                                            <div class="testimonial-card__author">-->
<!--                                                <div class="testimonial-card__author__thumb">-->
<!--                                                    <img src="assets/images/resources/testimonials-1-2.png" alt="eolimn image">-->
<!--                                                </div>-->
<!--                                                <div class="testimonial-card__author__content">-->
<!--                                                    <h5 class="testimonial-card__author__title">Savannah Nguyen</h5>-->
<!--                                                    <span class="testimonial-card__author__deg">XYZ Agency</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="testimonial-card__star">-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                                <span class="fa fa-star"></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="testimonial-card__quite">-->
<!--                                            <i class="icon-double-quotes"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        &lt;!&ndash; Testimonials Section End &ndash;&gt;-->

        <!-- Team Section Start -->
        <section class="team-one" id="team">
            <div class="container">
                <div class="team-one__top">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="sec-title__icon icon-solar-panel"></i>
                                    <h6 class="sec-title__tagline">empowering communities</h6>
                                </div>
                                <h3 class="sec-title__title">our team</h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!---<div class="team-one__top__btn">
                                <a href="team.html" class="eolimn-btn">don't click<i class="icon-arrow-point-to-right"></i></a>--->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="team-card__image">
                                <img src="assets/images/team/team-1-1.jpg" alt="Dion Richardson">
                            </div>
                            <div class="team-card__content">
                                <h3 class="team-card__title">
                                    <a href="index.html">Dion Richardson</a>
                                </h3>
                                <h6 class="team-card__designation">President of Community Dreams Foundation</h6>
                                <h6 class="team-card__details">President of CDF & CEO/Founder of Dreamline AI. Dion has over 20 years of experience in Real Estate, Energy Efficiency, and Community Engagement. He has been leading the discussion on making the energy transition into an economic transition by streamlining resources and providing workforce development to underserved communities.</h6>
                                <div class="team-card__social">
                                    <a href="https://www.linkedin.com/company/community-dreams-foundation/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/cdreamsorg?igsh=OHF6Z3Yzczg3eTIz"><i class="icon-instagram" aria-hidden="true"></i></a>
                                    <a href="https://x.com/cdreamsorg"><i class="icon-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section End -->

<!--        &lt;!&ndash; Blog Section Start &ndash;&gt;-->
<!--        <section class="blog-two" id="blog">-->
<!--            <div class="container">-->
<!--                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                    <div class="d-flex align-items-center justify-content-center">-->
<!--                        <i class="sec-title__icon icon-solar-panel"></i>-->
<!--                        <h6 class="sec-title__tagline">letest blog</h6>-->
<!--                    </div>-->
<!--                    <h3 class="sec-title__title">Our Latest Blog</h3>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="blog-two__left">-->
<!--                            <div class="blog-two__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                                <div class="blog-two__card__image">-->
<!--                                    <a href="blog-details-right.html" class="blog-two__card__image__item">-->
<!--                                        <img src="assets/images/blog/blog-2-1.jpg" alt="eolimn image">-->
<!--                                    </a>-->
<!--                                    <div class="blog-two__card__date"><span class="blog-two__card__date__day">20</span> <span class="blog-two__card__date__month">June</span></div>-->
<!--                                </div>-->
<!--                                <div class="blog-two__card__content">-->
<!--                                    <ul class="blog-two__card__meta list-unstyled">-->
<!--                                        <li class="blog-two__card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>-->
<!--                                        <li class="blog-two__card__meta__item"><a href="blog-details.html"><i class="icon-comments-icon"></i>2 Comments</a></li>-->
<!--                                    </ul>-->
<!--                                    <h3 class="blog-two__card__title"><a href="blog-details-right.html">Collaboratively pontificate bleeding edge resources with inexpensive methodologies</a></h3>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="blog-two__right">-->
<!--                            <div class="blog-two__list">-->
<!--                                <div class="blog-two__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>-->
<!--                                    <a href="blog-details-right.html" class="blog-two__list__image">-->
<!--                                        <img src="assets/images/blog/blog-s-2-1.jpg" alt="eolimn image">-->
<!--                                    </a>-->
<!--                                    <div class="blog-two__list__content">-->
<!--                                        <ul class="blog-two__list__meta list-unstyled">-->
<!--                                            <li class="blog-two__list__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>-->
<!--                                            <li class="blog-two__list__meta__item"><a href="blog-details.html"><i class="icon-comments-icon"></i>2 Comments</a></li>-->
<!--                                        </ul>-->
<!--                                        <h4 class="blog-two__list__title"><a href="blog-details-right.html">Collaboratively pontificate bleedi edge resources</a></h4>-->
<!--                                        <div class="blog-two__list__date"><span class="blog-two__card__date__day">20</span> <span class="blog-two__card__date__month">June</span></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="blog-two__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>-->
<!--                                    <a href="blog-details-right.html" class="blog-two__list__image">-->
<!--                                        <img src="assets/images/blog/blog-s-2-2.jpg" alt="eolimn image">-->
<!--                                    </a>-->
<!--                                    <div class="blog-two__list__content">-->
<!--                                        <ul class="blog-two__list__meta list-unstyled">-->
<!--                                            <li class="blog-two__list__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>-->
<!--                                            <li class="blog-two__list__meta__item"><a href="blog-details.html"><i class="icon-comments-icon"></i>2 Comments</a></li>-->
<!--                                        </ul>-->
<!--                                        <h4 class="blog-two__list__title"><a href="blog-details-right.html">Collaboratively pontificate bleedi edge resources</a></h4>-->
<!--                                        <div class="blog-two__list__date"><span class="blog-two__card__date__day">20</span> <span class="blog-two__card__date__month">June</span></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="blog-two__element-one">-->
<!--                <img src="assets/images/shapes/blog-1-1.png" alt>-->
<!--            </div>-->
<!--            <div class="blog-two__element-two">-->
<!--                <img src="assets/images/shapes/blog-1-2.png" alt>-->
<!--            </div>-->
<!--        </section>-->
<!--        &lt;!&ndash; Blog Section End &ndash;&gt;-->


        <!-- Footer Section Start -->
        <footer class="main-footer">
            <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);"></div>
            <div class="main-footer__top">
                <div class="container">
                    <div class="main-footer__top__inner">
                        <div class="row gutter-y-30">
                            <div class="col-lg-4">
                                <div class="main-footer__top__logo">
                                    <a href="index.html" class="footer__logo eolimn-logo">
                                        <img src="assets/images/logo-light.png" width="155" alt="eolimn logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="main-footer__top__right">
                                    <ul class="main-footer__top__list list-unstyled">
                                        <li class="main-footer__top__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                            <div class="main-footer__top__icon">
                                                <i class="icon-email"></i>
                                            </div>
                                            <div class="main-footer__top__content">
                                                <span class="main-footer__top__title">send email</span>
                                                <a href="mailto:info@cdreams.org">info@cdreams.org</a>
                                            </div>
                                        </li>
<!--                                        <li class="main-footer__top__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>-->
<!--                                            <div class="main-footer__top__icon">-->
<!--                                                <i class="icon-telephone"></i>-->
<!--                                            </div>-->
<!--                                            <div class="main-footer__top__content">-->
<!--                                                <span class="main-footer__top__title">call agent</span>-->
<!--                                                <a href="tel:+91-123-654-900">+91 123 654 900</a>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="main-footer__top__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>-->
<!--                                            <div class="main-footer__top__icon">-->
<!--                                                <i class="icon-clock"></i>-->
<!--                                            </div>-->
<!--                                            <div class="main-footer__top__content">-->
<!--                                                <span class="main-footer__top__title">opening time</span>-->
<!--                                                <p>Hours: Mon-Fri: 8am – 7pm</p>-->
<!--                                            </div>-->
<!--                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer__middle">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <h4 class="footer-widget__title">about <span>community dreams</span></h4>
                                <p class="footer-widget__text">By providing the needed training, education, and resources for these individuals to become highly skilled in the field of green technology and clean energy initiatives, we are helping to create a Green Workforce that’s getting closer to not just clean energy communities but a world powered by clean energy.</p>
                                <div class="footer-widget__social">
                                    <a href="https://www.linkedin.com/company/community-dreams-foundation/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    <a href="https://x.com/cdreamsorg"><i class="icon-twitter" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/cdreamsorg?igsh=OHF6Z3Yzczg3eTIz"><i class="icon-social-media" aria-hidden="true"></i></a>
<!--                                    <a href="https://youtube.com"><i class="icon-youtube" aria-hidden="true"></i></a>-->
                                </div>
                            </div>
                        </div>
<!--                        <div class="col-xl-3 col-lg-4 col-md-6">-->
<!--                            <div class="footer-widget wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>-->
<!--                                <h4 class="footer-widget__title">our <span>services</span></h4>-->
<!--                                <ul class="list-unstyled footer-widget__links">-->
<!--                                    <li class="footer-widget__links__item"><a href="service-d-wind-generator.html">Wind Turbines</a></li>-->
<!--                                    <li class="footer-widget__links__item"><a href="service-d-solar-service.html">Solar Panels</a></li>-->
<!--                                    <li class="footer-widget__links__item"><a href="service-d-hydropower-plants.html">Hydropower Plants</a></li>-->
<!--                                    <li class="footer-widget__links__item"><a href="service-d-energy-panels.html">Fossil Resources</a></li>-->
<!--                                    <li class="footer-widget__links__item"><a href="service-d-thermo-stone.html">Battery Materials</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                                <h4 class="footer-widget__title">useful <span>links</span></h4>
                                <ul class="list-unstyled footer-widget__links">
                                    <li class="footer-widget__links__item"><a href="#about">About Us</a></li>
                                    <li class="footer-widget__links__item"><a href="https://donorbox.org/site-donation-page">Donate</a></li>
                                    <li class="footer-widget__links__item"><a href="#volunteer">Volunteer</a></li>
<!--                                    <li class="footer-widget__links__item"><a href="blog-grid.html">News & blog</a></li>-->
<!--                                    <li class="footer-widget__links__item"><a href="project.html">Our Projects</a></li>-->
<!--                                    <li class="footer-widget__links__item"><a href="contact.html">Contacts</a></li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='900ms'>
                                <h4 class="footer-widget__title">get <span>involved</span></h4>
                                <p class="footer-widget__text">If our “why” speaks to you, and you want to get involved, we encourage you to:</p>
                                <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__newsletter mc-form">
<!--                                    <input type="email" name="EMAIL" placeholder="Email">-->
<!--                                    <span class="icon-mail icon"></span>-->
                                    <button type="submit" class="eolimn-btn eolimn-btn--base">take energy assessment</button>
                                </form>
                                <div class="mc-form__response"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright"> © Copyright <span class="dynamic-year">2024</span> Community Dreams Foundation</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

    </div><!-- /.page-wrapper -->


    <div class="header-right-sidebar">
        <div class="header-right-sidebar__overlay header-right-sidebar__toggler"></div>
        <div class="header-right-sidebar__content" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);">
            <span class="header-right-sidebar__close header-right-sidebar__toggler"><i class="fa fa-times"></i></span>
            <div class="header-right-sidebar__logo-box">
                <a href="index.html" aria-label="logo image">
                    <img src="assets/images/logo-light.png" width="155" alt="eolimn">
                </a>
            </div>
            <div class="header-right-sidebar__container">
                <div class="header-right-sidebar__container__about wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <h3 class="header-right-sidebar__container__title">Get Involved</h3>
                    <p class="header-right-sidebar__container__text">If our “why” speaks to you, and you want to get involved, we encourage you to:</p>
                </div>
                <div class="header-right-sidebar__container__newsletter-box wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='900ms'>
<!--                    <h3 class="header-right-sidebar__container__title">get notification</h3>-->
                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="newsletter-box mc-form">
<!--                        <input type="email" name="EMAIL" placeholder="Email">-->
                        <button type="submit" class="eolimn-btn eolimn-btn--base">take energy assessment course</button>
                    </form>
                    <div class="mc-form__response"></div>
                </div>
                </br>
                </br>
                <div class="header-right-sidebar__container__contact">
                    <h3 class="header-right-sidebar__container__title">Contact Us</h3>
                    <ul class="header-right-sidebar__container__list list-unstyled">
                        <li class="header-right-sidebar__container__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="header-right-sidebar__container__icon">
                                <i class="icon-email"></i>
                            </div>
                            <div class="header-right-sidebar__container__list__content">
                                <span class="header-right-sidebar__container__list__title">send email</span>
                                <a href="">info@cdreams.org</a>
                            </div>
                        </li>
                        <!--                        <li class="header-right-sidebar__container__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>-->
                        <!--                            <div class="header-right-sidebar__container__icon">-->
                        <!--                                <i class="icon-telephone"></i>-->
                        <!--                            </div>-->
                        <!--                            <div class="header-right-sidebar__container__list__content">-->
                        <!--                                <span class="header-right-sidebar__container__list__title">call agent</span>-->
                        <!--                                <a href="tel:+91-123-654-900">+91 123 654 900</a>-->
                        <!--                            </div>-->
                        <!--                        </li>-->
                        <!--                        <li class="header-right-sidebar__container__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>-->
                        <!--                            <div class="header-right-sidebar__container__icon">-->
                        <!--                                <i class="icon-clock"></i>-->
                        <!--                            </div>-->
                        <!--                            <div class="header-right-sidebar__container__list__content">-->
                        <!--                                <span class="header-right-sidebar__container__list__title">opening time</span>-->
                        <!--                                <p>Hours: Mon-Fri: 8am – 7pm</p>-->
                        <!--                            </div>-->
                        <!--                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="logo"></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@eolimn.com">info@cdreams.org</a>
                </li>
<!--                <li>-->
<!--                    <i class="fa fa-phone-alt"></i>-->
<!--                    <a href="tel:666-888-0000">666 888 0000</a>-->
<!--                </li>-->
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://www.linkedin.com/company/community-dreams-foundation/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="https://x.com/cdreamsorg"><i class="icon-twitter" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/cdreamsorg?igsh=OHF6Z3Yzczg3eTIz"><i class="icon-social-media" aria-hidden="true"></i></a>
<!--                <a href="https://youtube.com"><i class="icon-youtube" aria-hidden="true"></i></a>-->
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="eolimn-btn eolimn-btn--base">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


    <!--  ALl JS Plugins =====================
        ====================================== -->
    <!--  jquery-3.7.0 js plugins -->
    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <!--  Bootstrap js plugins -->
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <!--  jarallax js plugins -->
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <!--  jquery-ui js plugins -->
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <!--  jquery-ajaxchimp js plugins -->
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <!--  jquery-appear js plugins -->
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <!-- jquery-circle-progress js plugins -->
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <!--  magnific-popup js plugins -->
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--  validate js plugins -->
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <!--  nouislider js plugins -->
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <!--  wnumb js plugins -->
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <!--  owl-carousel js plugins -->
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <!--  Bootstrap js plugins -->
    <script src="assets/vendors/wow/wow.js"></script>
    <!--  wow js plugins -->
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <!--  isotope js plugins -->
    <script src="assets/vendors/isotope/isotope.js"></script>
    <!--  countdown js plugins -->
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <!--  jquery-circleType js plugins -->
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <script src="assets/vendors/slick-carousel/slick.min.js"></script>
    <!-- template js -->
    <script src="assets/js/eolimn.js"></script>

</body>

</html>
