<?php

session_start();

try {
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	
	$passwordHash = User::findByEmail($email);
	
	if (password_verify($password, $passwordHash) === false) {
		throw new Exception('Invalid password');
	}
	
	$currentHashAlgorithm = PASSWORD_DEFAULT;
	$currentHashOptions = ['cost' => 15];
	$passwordNeedsRehash = password_needs_rehash($passwordHash, $currentHashAlgorithm, $currentHashOptions);
	
	if ($passwordNeedsRehash === true) {
		$user->getPassword() = password_hash($password, $currentHashAlgorithm, $currentHashOptions);
		$user->save();
	}
	
	$_SESSION['user_logged_in'] = 'yes';
	$_SESSION['user_email'] = $email;
	
	header('HTTP/1.1 302 Redirect');
	header('Location: /user-profile.php');
	
} catch (Exception $e) {
	header('HTTP/1.1 401 Anauthorized');
	echo $e->getMessage();
}