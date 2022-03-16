<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/login/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Halaman Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">Silahkan Login Disini</h3>
		      		</div>
							
		      	</div>
				<form method="POST" action="{{ route('login') }}"  class="login-form">
					@csrf
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="email" class="form-control rounded-left @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
		      		</div>
					<div class="form-group">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
						<input type="password" class="form-control rounded-left @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group d-flex align-items-center">
						<div class="w-100">
							<label class="checkbox-wrap checkbox-primary mb-0">Save Password
								<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="w-100 d-flex justify-content-end">
							<button type="submit" class="btn btn-primary rounded submit">Login</button>
						</div>
					</div>
					<div class="form-group mt-4">
						<div class="w-100 text-center">
							{{-- <p class="mb-1">Don't have an account? <a href="#">Sign Up</a></p> --}}
							{{-- <p><a href="#">Forgot Password</a></p> --}}
					</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/login/js/jquery.min.js"></script>
  <script src="assets/login/js/popper.js"></script>
  <script src="assets/login/js/bootstrap.min.js"></script>
  <script src="assets/login/js/main.js"></script>

	</body>
</html>

