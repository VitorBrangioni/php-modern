<?php

/* 
 * Pode usar a biblioteca PHP Purifier,
 * porém a mesma é lenta e difícil de ser configurada.
 */

$input = '<p><script>alert("You won the Nigerian lottery") </script></p>';
		
echo htmlentities($input, ENT_QUOTES, 'UTF-8');