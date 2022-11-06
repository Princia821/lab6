<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Register</title>
</head>
<body>

	<h1>Register</h1>

	<div class="container">

		<form method="post" name="Formregister" onsubmit= "return validateForm()" action="registerprocess.php">
			<div class="form-group">
				<label for="name">Full Name</label>
				<input class="form-control" type="text" placeholder="Full Name" name="name" id="name">
				<small id="fullNameError"></small>
			</div>

			<div class="form-group">
				<label for="email1">Email address</label>
				<input class="form-control" type="email" placeholder="email" name="email" id="email">
				<small id="emailError"></small>
			</div>
            
            <div class="form-group">
				<label for="country">Country</label>
				<input class="form-control" type="text" placeholder="country" name="country" id="country">
				<small id="countryError"></small>
			</div>
            <div class="form-group">
				<label for="city">City</label>
				<input class="form-control" type="text" placeholder="City" name="city" id="city">
				<small id="cityError"></small>
			</div>
            <div class="form-group">
				<label for="contact">Phone number</label>
				<input class="form-control" type="number" placeholder="contact" name="contact" id="contact">
				<small id="contactError"></small>
		
            <div class="form-group">
				<label for="psw">Password</label>
				<input class="form-control" type="password" placeholder="password " name="psw" id="psw">
				<small id="passwordError"></small>
			</div>
            <div class="form-group">
				<label for="cpsw">Confirm Password</label>
				<input class="form-control" type="password" placeholder="Confirm password" name="cpsw" id="cpsw">
				<small id="confirmPasswordError"></small>
			</div>
			<button type="submit" id="button" name="register">Register</button>    
            
		</form>
		
	</div>
	<!--Javascript-->
	<script type="text/javascript" src="../JS/validation.js"></script>
		
</body>
</html>
