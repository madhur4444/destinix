<?php

if(isset($_POST['loginButton'])){
	$Username = $_POST['loginUsername'];
	$Password = $_POST['loginPassword'];

	$result = $account->login($Username,$Password);

	if($result == true){
		$_SESSION['userLoggedIn'] = $Username;
		header("Location: index.php");
	}
}


?>