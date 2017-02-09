<?php

/**
 * Email validation
 * @var string $email
 */
$email = 'vitorh.brangioni@gmail.com';
$isEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

if (!$isEmail) {
	echo 'invalid email!';
} else {
	echo $isEmail;
}