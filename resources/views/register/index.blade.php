<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Forum Registration Portal Mahasiswa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('assets/register/css/style.css')}}">
	</head>

	<body>
		<div class="wrapper" style="background-image:url('/img/pas.jpg')">
			<div class="inner">
				<div class="image-holder">
					<img src="{{asset('assets/register/images/piksi.png')}}" alt="">
                </div>
                                    <form method="POST" action="{{ route('mahasiswaregister.index') }}">
                                        @csrf
                    <h3>Portal Mahasiswa</h3>

					<div class="form-group">
                        <input type="text" class="@error ('npm') is-invalid @enderror" name="npm" placeholder="NPM" class="form-control">
                         @error('npm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="form-wrapper">
						<input type="text" class="@error('nama') is-invalid @enderror" name="nama" placeholder="Nama" class="form-control">
                        <i class="zmdi zmdi-account"></i>
                         @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="form-wrapper">
						<input type="text" class="@error('email') is-invalid @enderror" name="email" placeholder="Email Address" class="form-control">
                        <i class="zmdi zmdi-email"></i>
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					{{-- <div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div> --}}
					<div class="form-wrapper">
						<input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" class="form-control">
                        <i class="zmdi zmdi-lock"></i>
                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="form-wrapper">
						<input type="password"  class="@error('konfirm_pass') is-invalid @enderror" name="konfirm_pass" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
