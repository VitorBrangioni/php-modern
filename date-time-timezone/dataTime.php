<?php

$dateTime = new DateTime();

$format = $dateTime->format('Y-m-d H:i:s');

echo $format;

echo '<br>';

$date = strtotime($format);


?>