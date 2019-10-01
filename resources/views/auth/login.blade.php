<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Portal Mahasiswa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assets/login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
					 NPM
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input id="npm" class="input100 @error('email') is-invalid @enderror" type="text" name="npm" value="{{ old('email') }}" >
                        <span class="focus-input100"></span>
                        @error('npm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input id="password" class="input100  @error('password') is-invalid @enderror" type="password" name="password" >
                        <span class="focus-input100"></span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="label-checkbox100" for="remember  ">
								Remember me
							</label>
						</div>

						<div>
                            @if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}" class="txt3">
								Forgot Password?
                            </a>
                             @endif
                        </div>
                          @if (Route::has('mahasiswaregister.index'))
                            <a href="{{ route('mahasiswaregister.index') }}">Register</a>
                        @endif
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="btn btn-primary" class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('assets/login/vendor/jquery/jquery-3.2.1.min.js')}}        "></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/login/vendor/animsition/js/animsition.min.js')}}       "></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/login/vendor/bootstrap/js/popper.js')}}        "></script>
	<script src="{{asset('assets/login/vendor/bootstrap/js/bootstrap.min.js')}}     "></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/login/vendor/select2/select2.min.js')}}        "></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/login/vendor/daterangepicker/moment.min.js')}}     "></script>
	<script src="{{asset('assets/login/vendor/daterangepicker/daterangepicker.js')}}        "></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/login/vendor/countdowntime/countdowntime.js')}}        "></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/login/js/main.js')}}       "></script>

</body>
</html>
