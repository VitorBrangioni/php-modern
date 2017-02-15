<?php

$dateStart = new DateTime();
$dateInterval = DateInterval::createFromDateString('-1 hour');
$datePeriod = new DatePeriod($dateStart, $dateInterval, 3);

foreach ($datePeriod as $date) {
	echo $date->format('Y-m-d H'), PHP_EOL . " hours";
	echo '<br>';
}

