<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
	<link rel="stylesheet" href="/PHP/KHACHSAN/public/css/loginUser.css">
	<style>

	</style>
	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 style="color:#f36b21"	class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
                <form action="/PHP/KHACHSAN/Home/login" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" unmark="show" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field"  class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>

	            <div class="form-group">
	            	<button type="submit" name="btn" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
				<div class="form-group support-account" >
					<a href="" class="forget-password">Forgot Password ?</a>
					<a href="/PHP/KHACHSAN/home/register" class="create-account">Create an account</a>
				</div>
	          </form>
		      </div>
			</div>
			</div>
		</div>
	</section>

	<script src="/PHP/KHACHSAN/public/js/loginUser.js"></script>
	</body>
</html>