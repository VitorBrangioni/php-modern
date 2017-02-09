<?php


/**
 * Sanitizando endereço de e-mail
 */
$email = 'vitorh.\/brangioni<>\@gmail.com';

$emailSafe = filter_var($email, FILTER_SANITIZE_EMAIL);

echo '<b>Email not safe: </b>' .$email;
echo '<br>';

echo '<b>Safe Email: </b>' . $emailSafe;

echo '<br>';
echo '<br>';

/**
 * sanitizando caracteres internacionais
 */

$string = '\nIñtÅČĢĞÖabc';

$safeString = filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);



echo '<b>String not safe: </b>' .$string;

echo '<br>';

echo '<b>Safe String: </b>' .$safeString;