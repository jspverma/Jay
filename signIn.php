<!doctype html>
<html>


<head>
	<title>Login or Sign Up</title>

	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<?php
include 'login_function.php';
include 'signUp_function.php';


				

?>
	<div class="container">
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">Sign In</div>
					<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
				</div>

				<div style="padding-top:30px" class="panel-body">

					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

					<form id="loginform" class="form-horizontal" method = "POST" role="form">

						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" required>
						</div>

						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
						</div>


						<div class="input-group">
							<div class="checkbox">
								<label>
									<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>
							</div>
						</div>


						<div style="margin-top:10px" class="form-group">
							<!-- Button -->

							<div class="col-sm-12 controls">
								<input href="bill.html" id="btn-login" class="btn btn-success" type="submit" name="submit" value ="Login" /a>
								<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
								<a id="btn-fblogin" href="#" class="btn btn-danger">Login with Google</a>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
									Don't have an account!
									<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()" id="here">Sign Up Here</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">Sign Up</div>
					<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
				</div>
				<div class="panel-body">
					<form id="signupform" class="form-horizontal" method = "POST" role="form">

						<div id="signupalert" style="display:none" class="alert alert-danger">
							<p>Error:</p>
							<span></span>
						</div>
						<div class="form-group">
							<label for="email" class="col-md-3 control-label">Email</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="email" placeholder="Email Address" required>
							</div>
						</div>

						<div class="form-group">
							<label for="phone number" class="col-md-3 control-label">Contact no:</label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="pwd" name = "contact" placeholder="Enter phone number" required>
							</div>
						</div>

						<div class="form-group">
							<label for="firstname" class="col-md-3 control-label">First Name</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="firstname" placeholder="First Name" required>
							</div>
						</div>
						<div class="form-group">
							<label for="lastname" class="col-md-3 control-label">Last Name</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-md-3 control-label">Password</label>
							<div class="col-md-9">
								<input type="password" class="form-control" name="passwd" placeholder="password" required>
							</div>
						</div>
						<div class="col-md-offset-3 col-md-9">
							<input id="btn-signup" type="submit" class="btn btn-primary" name = "submit" value = " Sign Up" /><i class="icon-hand-right"></i>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
