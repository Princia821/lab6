<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Register</title>
</head>
<body>

	<h1>Login</h1>

	<div class="container">

		<form method="post" id='form' action="loginprocess.php">
			<div class="form-group">
				<input class="form-control" type="email" placeholder="email" name="email" id="email">
			</div>
            
            <div class="form-group">
				<input class="form-control" type="password" placeholder="password" name="psw" id="psw">
			</div>
		
			<button type="submit" id="button" name="login">Login</button>    
            
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
		
	</div>
	
</body>
</html>