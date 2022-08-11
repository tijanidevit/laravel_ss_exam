<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Exam Submitted</title>

        <link rel="stylesheet" href="{{asset('assets/portal/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link
            href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800;900&amp;family=Poppins:wght@700;800&amp;display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{asset('assets/thankyou/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/thankyou/css/style.css')}}" />
    </head>
    <body>
        <div id="wrapper">
            <div class="container">
                <div class="row text-center">
                    <div class="check_mark_img">
                        <img src="{{asset('assets/thankyou/images/completed.png')}}" alt="image_not_found">
                    </div>
                    <div class="sub_title">
                        <span>Your submission has been received</span>
                    </div>
                    <div class="title pt-1">
                        <a href="{{route('logout')}}" class="btn btn-success">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
