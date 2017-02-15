<?php 

try {
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	
	if (!$email) {
		throw new Exception('Invalid Email');
	}
	
	$password = filter_input(INPUT_POST, 'password');
	echo $password;
	
	if (!$password && mb_strlen($password) < 8) {
		throw new Exception('Password must contain 8+ character');
	}
	
	$passwordHash = password_hash($password,PASSWORD_DEFAULT, ['cost' => 12]);
	
	if ($passwordHash === falase) {
		throw new Exception('Password hash failed');
	}
	$user = new User();
	$user->setEmail($email);
	$user->setPassword($passwordHash);
	
	
	echo $user->getEmail();
	echo '<br>' ;
	echo $user->getPassword();
	header('HTTP/1.1 302 Redirect');
	//header('Location: /login.php');
	 
} catch (Exception $e) {
	
	 header('HTTP/1.1 400 Bad request');
	echo $e->getMessage();
}



?>