<?php

require '../vendor/autoload.php';

use Respect\Validation\Validator as v;

$isCpf = v::digit()->cpf()->validate("13111947629");

if ($isCpf === true) {
	echo 'is CPF';
} else if ($isCpf === false) {
	echo 'not cpf';
}

echo '<br>';

$isPhone = v::phone()->validate("+55(31)0000-0000");

if ($isPhone === true) {
	echo 'is phone';
} else if ($isPhone === false) {
	echo 'not phone';
}