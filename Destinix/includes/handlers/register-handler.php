<?php 

function sanitizeFormCredentials($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}


if(isset($_POST['registerButton'])) {
	//Register button was pressed
	$Username = sanitizeFormUsername($_POST['Username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$Email = sanitizeFormCredentials($_POST['Email']);
	$Emailc = sanitizeFormCredentials($_POST['Emailc']);
	$Password = sanitizeFormCredentials($_POST['Password']);
	$Passwordc = sanitizeFormCredentials($_POST['Passwordc']);

	$wasSuccessful = $account->register($Username,$firstName,$lastName,$Email,$Emailc,$Password,$Passwordc);

	if($wasSuccessful == true){
		$_SESSION['userLoggedIn'] = $Username;
		header("Location: index.php");
	}
}


?>