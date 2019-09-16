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
				<form action="">
					<h3>Portal Mahasiswa</h3>
					<div class="form-group">
						<input type="text" name="npm" placeholder=" NPM" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" name="nama" placeholder="Nama" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="email" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
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
						<input type="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control">
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
