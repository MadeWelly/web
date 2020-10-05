<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sign In | Made Coding</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Interior Register Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="shortcut icon" type="image/x-icon" href="{{asset("public/devlop/img/icon.png")}}">

<link rel="stylesheet" href="{{asset("public/plugins/fontawesome/css/fontawesome.css")}}">
<link rel="stylesheet" href="{{asset("public/plugins/fontawesome/css/brands.css")}}">
<link rel="stylesheet" href="{{asset("public/plugins/fontawesome/css/solid.css")}}">
<link href="my_login/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="{{asset("public/devlop/css/custom.css")}}">

<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" media="" href="plugins/bootstrap/css/bootstrap.min.css">

</head>
<body style="background-color: aliceblue;">
	<img src="{{asset("public/devlop/svg/wave-5-top.svg")}}" alt="" style="    position: absolute;
	width: 100%;
	height: 100%;
	z-index: -1;">
	<div>
		<nav class="navbar navbar-light mb-4" style="color:white">
		<a href="{{url('/')}}" class="navbar-brand" style="color: #616161;">Home</a>
			@if (Route::has('login'))
			<div class="top-right links">
					@auth
							<a href="{{ url('/home') }}">Home</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:inline">
									@csrf
									<button type="submit">Logout</button>
							</form>
					@else
							<a href="{{ route('login') }}"   margin-right:10px"></a>

							@if (Route::has('register'))
									<a href="{{ route('register') }}"  style="color: white">Register</a>
							@endif
					@endauth
			</div>
	@endif
		</nav>
	</div>
<div class="signupform" style="text-align: center;">
	{{-- <img class="signupform-img" src="{{asset("public/devlop/img/mylogo.png")}}" alt="logo" height="110" width="124">	 --}}
	<h1 style="color: #2196F3;
	margin: -30px 0 45px;
	font-weight: 800;">Made Coding</h1>
	<div class="container pb-4">
		
	    <div class="agile_info">
			<div class="w3_info">
				<h2>Login Your Account</h2>
				<p>and let's get you to the Made Coding!.</p>
                <form method="POST" action="{{ route('login') }}">
								@csrf
								
								{{-- <div class="form-group" id="login" style="border: 1px solid">
									<span><i class="fa fa-user" aria-hidden="true"></i></span>
									<input id="email" type="email" placeholder="Email Address" class="form-control @error('email')is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
								</div>
								@error('email')
                            <span class="" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
														<style>
															.form-control{
																height:48px; padding:0px 10px;
															}
														</style>
					<div class=" mb-0 form-control @error('email')is-invalid @enderror" style=" ">
						<span><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input id="email" type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

      
										</div>
										@error('email')
                            <span class="mt-0" role="">
                                <code>{{ $message }}!</code>
                            </span>
                        @enderror
            

			        <div class="form-control mt-3">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
                    <input id="password" type="password" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror					
                </div>

							<input type="checkbox" value="remember-me" /> <h4>Remember Me </h4>        
              <button class="btn btn-primary btn-block" type="submit">Sign In <i class="fas fa-sign-in-alt" style="font-size: 19px"></i></button >                                  
              @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif            
					</form>
			</div>
			<div class="clear"></div>
			</div>
			
		</div>
		<a href="" style="font-size: 19px; margin-top:20px">Create an account</a>
		<div class="footer" style="">
		<p> All rights reserved | by <a href="{{url('/')}}"
			target="_blank">madecoding.com</a></p>
 </div>
	</div>
	</body>
</html>