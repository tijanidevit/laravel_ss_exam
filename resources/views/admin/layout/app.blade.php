<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>MySchool - @yield('title')</title>

    <link rel="shortcut icon" href="{{asset('assets/portal/img/favicon.png')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="{{asset('assets/portal/plugins/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/portal/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/portal/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/portal/css/style.css')}}">
</head>
<body>

    <div class="main-wrapper">
        @include('admin.layout.includes.header')
        @include('admin.layout.includes.sidebar')

        
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">@yield('page_title')</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">@yield('page_description')</li>
                            </ul>
                        </div>
                    </div>
                </div>

                @yield('content')

            </div>
        </div>

    </div>


    <script src="{{asset('assets/portal/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{asset('assets/portal/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/portal/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('assets/portal/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/portal/plugins/apexchart/chart-data.js')}}"></script>

    <script src="{{asset('assets/portal/js/script.js')}}"></script>
</body>

</html>