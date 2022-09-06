<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym trainer | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.icon')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <p style="color: red; font-size: 20px;">Gymmax</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('Client.bloc.header')
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{asset('assets/images/gallery/gallery1.png')}});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{asset('assets/images/gallery/gallery2.png')}});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{asset('assets/images/gallery/gallery3.png')}});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{asset('assets/images/gallery/gallery4.png')}});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{asset('assets/images/gallery/gallery5.png')}});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{asset('assets/images/gallery/gallery6.png')}});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!-- ? services-area -->
    
</main>
@include('Client.bloc.footer')

  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/animated.headline.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('assets/js/contact.js')}}"></script>
<script src="{{asset('assets/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/mail-script.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>