<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Admin Login </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/login.css')}}">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-center align-items-center h-100">
				
                <div class="card-wrapper">
					<div class="card ">
						<div class="card-body ">
                            <div class="brand col-12 text-center">
                                <img src="{{URL::asset('images/login.png')}}" alt="logo" >
                            </div>

							<form  action="{{ session('subFolder') }}/admin_login" 
								 method="POST"	class="my-login-validation" novalidate="">
								 @csrf
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" value="admin" class="form-control" name="email" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" value="123456" class="form-control" name="password"   required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<input type="hidden" name="userType" value="superAdmin">

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
                                        <button type="submit" class="btn btn-primary btn-block ">
										    Login
									    </button>
								</div>
								
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; {{date("Y")}} &mdash; Designed by <a href="https://3sitservices.com/">3S IT Services</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
    {{-- <script type="text/javascript" src="{{URL::asset('js/login.js')}}"></script> --}}

</body>
</html>