<header>
    <!-- secondary menu -->
    <nav class="secondary-menu">
        <div class="container">
            <!-- secondary menu left link area -->
            <div class="sm-left">
                <strong>Phone</strong>:&nbsp; <a href="#">01892409715</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>E-mail</strong>:&nbsp; <a href="#">music.site@melodi.com</a>
            </div>
            <!-- secondary menu right link area -->
            <div class="sm-right">
                <!-- social link -->
                <div class="sm-social-link">
                    <a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
    <!-- primary menu -->
    <nav class="navbar navbar-fixed-top navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- logo area -->
                <a class="navbar-brand" href="#home">
                    <!-- logo image -->
                    <img class="img-responsive" src="{{asset('/')}}/front/img/logo/logo.png" alt="" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="#featuredalbum">Album</a></li>
                     <li><a href="#portfolio">Lyrics</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="{{route("team")}}">Team Profile</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>