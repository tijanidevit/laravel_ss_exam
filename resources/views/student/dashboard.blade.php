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
        {{-- <div id="preloader"></div> --}}

        <section class="account-section text-center">
            <div class="container">
                <h3>Select a subject to proceed</h3>
                <div class="row my-5">
                    @forelse ($form_subjects as $form_subject)
                        
                            <a href="{{route('student.exams.show', $form_subject->id)}}" class="more-link mb-2"> {{$form_subject->subject->name}}</a>
                        
                    @empty
                        
                    @endforelse
                </div>
            </div>
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
