<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Exam</title>
        <!-- FontAwesome-cdn include -->
        

        <link rel="stylesheet" href="{{asset('assets/portal/plugins/fontawesome/css/fontawesome.min.css')}}">
        <!-- Google fonts include -->
        <link
            href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800;900&amp;family=Poppins:wght@700;800&amp;display=swap"
            rel="stylesheet"
        />
        <!-- Bootstrap-css include -->
        <link rel="stylesheet" href="{{asset('assets/exam/css/bootstrap.min.css')}}" />
        <!-- Animate-css include -->
        <link rel="stylesheet" href="{{asset('assets/exam/css/animate.min.css')}}" />
        <!-- Main-StyleSheet include -->
        <link rel="stylesheet" href="{{asset('assets/exam/css/style.css')}}" />
    </head>
    <body>
        <div class="wrapper overflow-hidden">
            <!-- Top content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="logo_area pt-5 ps-5">
                            <a href="#">
                                <img class="img-fluid" src="{{asset('assets/portal/img/logo-white.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 d-none d-sm-block">
                        <div class="count_box d-flex float-end pt-5 pe-5">
                            <div
                                class="count_clock countdown_timer d-flex align-items-center pe-5 me-3"
                                data-countdown="{{\Carbon\Carbon::now()->addHour()}}"
                            ></div>
                            <!-- <div id="countdown"></div> -->
                            <!-- Step Progress bar -->
                            <div class="count_progress clip-1">
                                <span class="progress-left">
                                    <span class="progress_bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress_bar"></span>
                                </span>
                                <div class="progress-value">
                                    <div id="value">100%</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="container">
                
                
                <form
                    method="POST"
                    action="{{route('student.exams.submit', $form_subject->id)}}"
                >

                @csrf
                    <div class='card my-5'>
                        <div class="row">
                            <h4 class="text-center mt-2 text-info">{{$form->name}} - {{$subject->name}}</h4>                    
                            @forelse ($questions as $sn => $question)
                            <div class=" my-5 col-md-6">
                                <div class="question_title text-left text-uppercase" style="padding-left:40px !important;">
                                    <h6 class="animate__animated animate__fadeInRight animate_25ms">
                                        {{$sn + 1}}. {{$question->question}}
                                    </h6>
                                </div>

                                <div class="row pt-1 mt-0 form_items">
                                    @forelse ($question->options as $op => $option)
                                        <div class="col-md-6">
                                            <ul class="list-unstyled p-0">
                                                <li class="step_{{$sn + 1}} animate__animated animate__fadeInRight animate_50ms">
                                                    <input
                                                        type="radio"
                                                        name="option{{$sn + 1}}"
                                                        value="{{$option->is_answer}}"
                                                    />
                                                    <label for="opt_{{$op + 1}}">{{$option->option}}</label
                                                    >
                                                </li>
                                            </ul>
                                        </div>

                                        
                                    @empty
                                        
                                    @endforelse
                                </div>
                            </div>
                            
                            @empty
                                <p class="text-warning text-center my-5">No questions added</p>
                            @endforelse
                        </div>

                    </div>
                    <!---------- Form Button ---------->
                    <div class="form_btn mt-3">
                
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2"><button
                                type="submit"
                                class="next_btn rounded-pill position-absolut text-uppercase text-white"
                                
                            >
                                Submit
                            </button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- jQuery-js include -->
        <script src="{{asset('assets/exam/js/jquery-3.6.0.min.js')}}"></script>
        <!-- Bootstrap-js include -->
        <script src="{{asset('assets/exam/js/bootstrap.min.js')}}"></script>
        <!-- jQuery-counter-up-js include -->
        <script src="{{asset('assets/exam/js/countdown.js')}}"></script>
        <!-- jQuery-validate-js include -->
        <script src="{{asset('assets/exam/js/jquery.validate.min.js')}}"></script>
        <!-- Custom-js include -->
        <script src="{{asset('assets/exam/js/script.js')}}"></script>
    </body>

</html>
