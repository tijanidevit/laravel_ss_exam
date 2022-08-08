<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>MySchool - Login</title>

	<link rel="shortcut icon" href="{{asset('assets/portal/img/favicon.png')}}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

	<link rel="stylesheet" href="{{asset('assets/portal/plugins/bootstrap/css/bootstrap.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/portal/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/portal/plugins/fontawesome/css/all.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/portal/css/style.css')}}">
</head>
<body>

	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left">
						<img class="img-fluid" src="{{asset('assets/portal/img/logo-white.png')}}" alt="Logo">
					</div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to your dashboard</p>

							<form method="POST" action="{{route('admin_login')}}">
                                @csrf
								<div class="form-group">
									@if (session('error'))
										<div class="alert alert-warning">{{session('error')}}</div>
									@endif
								</div>
								<div class="form-group">
									<input class="form-control" value="{{old('email')}}" name="email" type="email" placeholder="Email">
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
								</div>
								<div class="form-group">
									<input class="form-control" name="password" type="password" placeholder="Password">
                                    
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
								</div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>

							<div class="text-center forgotpass"><a href="#">Forgot Password?</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="{{asset('assets/portal/js/jquery-3.6.0.min.js')}}"></script>

	<script src="{{asset('assets/portal/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

	<script src="{{asset('assets/portal/js/script.js')}}"></script>
</body>

</html>