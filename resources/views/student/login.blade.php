<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>PreSchool</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="eLearning Education Exam" />
        <meta name="keywords" content="Education, Learning, Exam" />
        <meta name="author" content="" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />

        <!-- Favicons -->
        <link
            rel="icon"
            type="image/png"
            href="{{asset('assets/landing/images/favicon.png')}}"
        />

        <!-- CSS Begins
================================================== -->
        <!--Animate Effect-->
        <link href="{{asset('assets/landing/css/animate.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/landing/css/hover.css')}}" rel="stylesheet" />

        <!-- For Image Preview -->
        <link rel="stylesheet" href="{{asset('assets/landing/css/magnific-popup.css')}}" />

        <!--Owl Carousel -->
        <link href="{{asset('assets/landing/css/owl.carousel.css')}}" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('assets/landing/css/slick.css')}}" />

        <!--BootStrap -->
        <link href="{{asset('assets/landing/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/landing/css/normalize.css')}}" rel="stylesheet" />

        <!-- Main Style -->
        <link href="{{asset('assets/landing/css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/landing/css/responsive.css')}}" rel="stylesheet" />
    </head>

    <body>
        <div id="preloader"></div>

        <section class="account-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="reg_wrap">
                            <!-- Start: Image -->
                            <div class="reg_img">
                                <img src="{{asset('assets/landing/images/hero-men.png')}}" alt="">
                            </div>
                            <!-- Start:  Login Form  -->
                            <div class="login-form">
                                <h2> Login to start exam </h2>
                                <form method="post" action="{{route('student_login')}}">
                                    @csrf
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{session('error')}}</div>
                                    @endif
                                    <input class="login-field" name="email" id="lemail" type="text"
                                        placeholder="Enter Your Email">
                                    <input class="login-field" name="password" id="lpassword" type="password"
                                        placeholder="Enter Your Password">
                                    <div class="submit-area">
                                        <button class="submit more-link"> Login </button>
                                        <a href="{{url('/')}}" class="submit more-link"> Back</a>
                                        <div id="lmsg" class="message"></div>
                                    </div>
                                </form>
                            </div>
                            <!-- End:Login Form  -->
                        </div>
                    </div>
                    <!-- .col-md-6 .col-sm-12 /- -->
                </div>
                <!-- row /- -->
            </div>
            <!-- container /- -->
        </section>
       

        <script src="{{asset('assets/landing/js/jquery-1.12.4.min.js')}}"></script>
        <!-- plugins -->
        <script src="{{asset('assets/landing/js/plugins.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('assets/landing/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/landing/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/landing/js/jquery.stellar.min.js')}}"></script>

        <script src="{{asset('assets/landing/js/main.js')}}"></script>
    </body>
</html>
