<?php 

$dateTime = new DateTime();

echo 'Current date and hour: ' .$dateTime->format('d-M-y H');
echo '<br>';

$dateInterval = new DateInterval('P1DT1H');

$dateTime->add($dateInterval);

echo 'date interval: '.$dateTime->format('d-M-y H');

