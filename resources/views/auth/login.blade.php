<!DOCTYPE html>
<html lang="en" class=" ">
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

<head>
    <meta charset="utf-8" />
    <title>ZItaly | Administration</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{('public/backend/css/app.v1.css')}}" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Admin Login Panel</a>
            <section class="m-b-lg">
                <header class="wrapper text-center"> <strong>Sign in to get in touch</strong> </header><br>
                <!-- FORM DATA HANDLE -->
                <form action="{{ route('login')}}" method="POST">
                    @csrf
                    <div class="list-group">
                        <div class="list-group-item">
                            <input name="email" type="email" placeholder="Email" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input name="password" type="password" placeholder="Password" class="form-control no-border"> </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p> <a href="{{route('register')}}" class="btn btn-lg btn-default btn-block">Create an account</a> 
                </form>

            </section>
            <p type="button" class="btn btn-lg btn-info btn-block" data-toggle="tooltip" data-placement="top" title="ZItaly Restaurant Homepage"> <a href="{{url('/')}}"> Homepage</a>
            </p>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder">
            <p> <small>Web app framework base on Bootstrap<br>&copy; 2013</small> </p>
        </div>
    </footer>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="{{('public/backend/js/app.v1.js')}}"></script>
    <script src="{{('public/backend/js/app.plugin.js')}}"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>