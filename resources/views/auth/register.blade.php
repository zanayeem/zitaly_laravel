<!DOCTYPE html>
<html lang="en" class=" ">
<head>
    <meta charset="utf-8" />
    <title>ZItaly | Administration </title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{('public/backend/css/app.v1.css')}}" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Admin Registration</a>
            <section class="m-b-lg">
                <header class="wrapper text-center"> <strong>Sign up to find interesting thing</strong> </header>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="list-group">
                        <div class="list-group-item">
                            <input name="name" placeholder="Name" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input name="email" type="email" placeholder="Email" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input name="password" type="password" placeholder="Password" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input name="password_confirmation" type="password" placeholder="Confirm Password" class="form-control no-border"> </div>
                        </div> 
                                            <div class="checkbox m-b">
                        <label>
                            <input type="checkbox"> Agree the <a href="#">terms and policy</a> </label>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>   

                    </div>
                        


                    
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Already have an account?</small></p> <a href="{{route('login')}}" class="btn btn-lg btn-default btn-block">Sign in</a> </form>
            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder clearfix">
            <p> <small>Web app framework base on Bootstrap<br>&copy; 2013</small> </p>
        </div>
    </footer>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="{{('public/backend/js/app.v1.js')}}"></script>
    <script src="{{('public/backend/js/app.plugin.js')}}"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>