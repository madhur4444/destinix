<?php
	include("includes/classes/Account.php");
	$account= new Account();
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
?>

<html>
<head>
	<title>Welcome to Destinix!</title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Welcome back to Creed</h2>
			<p> 
				<label for="loginUsername">Username </label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password </label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
			</p>

			<button type="submit" name="loginButton">ENTER</button>
			
		</form>



		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your own Identity</h2>
			<p>
				<?php echo  $account->getError("Your username must be between 5 and 25 characters"); ?>
				<label for="Username">Username</label>
				<input id="Username" name="Username" type="text" placeholder="e.g. JohnEdward" required>
			</p>

			<p>
				<?php echo  $account->getError("Your first name must be between 2 and 25 characters"); ?>
				<label for="firstName">First name</label>
				<input id="firstName" name="firstName" type="text" placeholder="e.g. John" required>
			</p>

			<p>
				<?php echo  $account->getError("Your last name must be between 2 and 25 characters"); ?>
				<label for="lastName">Last name</label>
				<input id="lastName" name="lastName" type="text" placeholder="e.g. Edward" required>
			</p>

			<p>
				<?php echo  $account->getError("Your emails don't match"); ?>
				<?php echo  $account->getError("Email is invalid"); ?>
				<label for="Email">Email</label>
				<input id="Email" name="Email" type="email" placeholder="e.g. john@ed.com" required>
			</p>

			<p>
				<label for="Emailc">Confirm email</label>
				<input id="Emailc" name="Emailc" type="email" required>
			</p>

			<p>
				<?php echo  $account->getError("Your passwords don't match"); ?>
				<?php echo  $account->getError("Your password can only contain numbers and letters"); ?>
				<?php echo  $account->getError("Your password must be between 5 and 30 characters"); ?>
				<label for="Password">Password</label>
				<input id="Password" name="Password" type="password" placeholder="secret" required>
			</p>

			<p>
				<label for="Passwordc">Confirm password</label>
				<input id="Passwordc" name="Passwordc" type="password" required>
			</p>

			<button type="submit" name="registerButton">CREATE</button>
			
		</form>


	</div>

</body>
</html>