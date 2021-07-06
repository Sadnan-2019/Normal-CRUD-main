<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('/')}}/admin/apple-icon.png">
    <link rel="shortcut icon" href="{{asset('/')}}/admin/favicon.ico">


    <link rel="stylesheet" href="{{asset('/')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="{{asset('/')}}/admin/images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <form method="post" action="{{route('login')}}">
                    @csrf
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control"name="password" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                        <label class="pull-right">
                            <a href="#">Forgotten Password?</a>
                        </label>

                    </div>
                    <input type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" value="login">

                    <div class="register-link m-t-15 text-center">
                        <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('/')}}/admin/vendors/jquery/dist/jquery.min.js"></script>
<script src="{{asset('/')}}/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('/')}}/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}/admin/assets/js/main.js"></script>


</body>

</html>
