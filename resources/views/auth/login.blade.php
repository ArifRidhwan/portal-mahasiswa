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
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
					<span class="login100-form-title p-b-32">
                        Login to Portal Mahasiswa
					</span>
                                      {{-- @if(session()->has('login_error'))
                <div class="alert alert-success">
                  {{ session()->get('login_error') }}
                </div>
              @endif --}}


					<span class="txt1 p-b-11">
					 Npm
                    </span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Npm is required">
                        <input id="npm" type="integer"
                                   class="input100 {{ $errors->has('npm') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="npm" value="{{ old('npm') ?: old('email') }}" required autofocus >
                        <span class="focus-input100"></span>

                          @if ($errors->has('npm')|| $errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('npm')  ?: $errors->first('email') }}</strong>
                                    </span>
                  @endif
                    </div>

					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" {{ $errors->has('password') ? ' has-error' : '' }} data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input id="password" class="input100" type="password" name="password" >
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                  @endif
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
                          @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
					</div>

					<div class="container-login100-form-btn">
                        <button type="submit"
                                                class="btn btn-primary"
                                                class="login100-form-btn">
                        {{ __('Login') }}
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
