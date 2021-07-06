<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="HimanshuGupta">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="{{asset('/')}}/front/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{asset('/')}}/front/css/animate.min.css" rel="stylesheet">
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="{{asset('/')}}/front/css/owl.carousel.css">
    <!-- Font awesome CSS -->
    <link href="{{asset('/')}}/front/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('/')}}/front/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}/front/css/style-color.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}/front/img/logo/favicon.ico">
</head>

<body>

<!-- modal for booking ticket form -->
<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
            </div>
            <!-- form for events ticket booking -->
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputContact">Contact</label>
                        <input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSeats">Number of Tickets</label>
                        <select class="form-control" id="exampleInputSeats">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> I accept the Terms of Service
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- link to payment gatway here -->
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- wrapper -->
<div class="wrapper" id="home">

    <!-- header area -->
    @include('front-end.includes.header')
    <!--/ header end -->

    <!-- banner area -->
    <div class="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{asset('/')}}/front/img/banner/b1.jpg" alt="...">
                    <div class="container">
                        <!-- banner caption -->
                        <div class="carousel-caption slide-one">
                            <!-- heading -->
                            <h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Heavy Metal For You!</h2>
                            <!-- paragraph -->
                            <h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.</h3>
                            <!-- button -->
                            <a href="#" class="animated fadeIn btn btn-theme">Download Here</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('/')}}/front/img/banner/b3.jpg" alt="...">
                    <div class="container">
                        <!-- banner caption -->
                        <div class="carousel-caption slide-two">
                            <!-- heading -->
                            <h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen It...</h2>
                            <!-- paragraph -->
                            <h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit.</h3>
                            <!-- button -->
                            <a href="#" class="animated fadeIn btn btn-theme">Listen Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-arrow-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fa fa-arrow-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <!--/ banner end -->

    <!-- block for animate navigation menu -->
    <div class="nav-animate"></div>

    <!-- Hero block area -->
    @yield('body')
     <!-- contact end -->

    <!-- footer -->
   @include('front-end.includes.footer')
    <!-- footer end -->

    <!-- Scroll to top -->
    <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

</div>

<!-- Javascript files -->
<!-- jQuery -->
<script src="{{asset('/')}}/front/js/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('/')}}/front/js/bootstrap.min.js"></script>
<!-- WayPoints JS -->
<script src="{{asset('/')}}/front/js/waypoints.min.js"></script>
<!-- Include js plugin -->
<script src="{{asset('/')}}/front/js/owl.carousel.min.js"></script>
<!-- One Page Nav -->
<script src="{{asset('/')}}/front/js/jquery.nav.js"></script>
<!-- Respond JS for IE8 -->
<script src="{{asset('/')}}/front/js/respond.min.js"></script>
<!-- HTML5 Support for IE -->
<script src="{{asset('/')}}/front/js/html5shiv.js"></script>
<!-- Custom JS -->
<script src="{{asset('/')}}/front/js/custom.js"></script>
</body>
</html>