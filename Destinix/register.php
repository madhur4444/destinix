<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");
	$account= new Account($con);
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValues($in){
			if(isset($_POST[$in])){
				echo $_POST[$in];
			}
	}
?>

<html>
<head>
	<title>Welcome to Destinix!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
</head>
<body>
	<div id="background">

		<div id="loginContainer">

			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2>Welcome back to Creed</h2>
					<p> 
						<?php echo  $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username </label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. JohnEdward" required>
					</p>
					<p>
						<label for="loginPassword">Password </label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="secret" required>
					</p>

					<button type="submit" name="loginButton">ENTER</button>
					
				</form>



				<form id="registerForm" action="register.php" method="POST">
					<h2>Create your own Identity</h2>
					<p>
						<?php echo  $account->getError(Constants::$usernameCharacters); ?>
						<?php echo  $account->getError(Constants::$usernameTaken); ?>
						<label for="Username">Username</label>
						<input id="Username" name="Username" type="text" placeholder="e.g. JohnEdward" value="<?php getInputValues('Username') ?> "required>
					</p>

					<p>
						<?php echo  $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">First name</label>
						<input id="firstName" name="firstName" type="text" placeholder="e.g. John" value="<?php getInputValues('firstName') ?> " required>
					</p>

					<p>
						<?php echo  $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Last name</label>
						<input id="lastName" name="lastName" type="text" placeholder="e.g. Edward" value="<?php getInputValues('lastName') ?> " required>
					</p>

					<p>
						<?php echo  $account->getError(Constants::$emailDoNotMatch); ?>
						<?php echo  $account->getError(Constants::$emailInvalid); ?>
						<?php echo  $account->getError(Constants::$emailTaken); ?>
						<label for="Email">Email</label>
						<input id="Email" name="Email" type="email" placeholder="e.g. john@ed.com" value="<?php getInputValues('Email') ?> "required>
					</p>

					<p>
						<label for="Emailc">Confirm email</label>
						<input id="Emailc" name="Emailc" type="email" value="<?php getInputValues('Emailc') ?> " required>
					</p>

					<p>
						<?php echo  $account->getError(Constants::$passwordDoNotMatch); ?>
						<?php echo  $account->getError(Constants::$passwordDoNotAlphanumeric); ?>
						<?php echo  $account->getError(Constants::$passwordCharacters); ?>
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
		</div>
	</div>
</body>
</html>