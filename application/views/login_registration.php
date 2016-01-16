<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Quotable Quotes</title>
		<link rel="stylesheet" type="text/css" href="/assets/style.css">
	</head>
	<body>
		
		<div class="container">
			
			<h1>Welcome to Quotable Quotes!</h1>
			
			<div id="register">
				<form action="/register" method="post">
					<h2>Register</h2>
					<p class="error"><?php if(!empty($registration_errors)) { echo $registration_errors; } ?></p>
					<p id="success"><?php if($this->session->flashdata('success')) { echo $this->session->flashdata('success'); } ?></p>
					<p><input type="text" name="first_name" placeholder="First Name"></p>
					<p><input type="text" name="last_name" placeholder="Last Name"></p>
					<p><input type="text" name="alias" placeholder="Alias"></p>
					<p><input type="text" name="email" placeholder="Email"></p>
					<p><input type="password" name="password" placeholder="Password"></p>
					<p><input type="password" name="password2" placeholder="Re-enter Password"></p>
					<p>Birthdate:</p>
					<p><input type="date" name="birthdate"></p>
					<input type="submit" name="register" value="Register">
				</form>
			</div>

			<div id="login">	
				<form action="/login" method="post">
					<h2>Login</h2>
					<p class="error"><?php if(!empty($login_errors)) { echo $login_errors; } ?></p>
					<p><input type="text" name="email" placeholder="Email"></p>
					<p><input type="password" name="password" placeholder="Password"></p>
					<input type="submit" name="login" value="Login">
				</form>
			</div>

		</div>

	</body>
</html>