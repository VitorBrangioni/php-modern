<?php

namespace vitorbrangioni\requesthttp;

require '../vendor/autoload.php';

use \League\Csv\Reader;
/**
 * @author vitor.brangioni
 * Print urls with erros. The urls are in a csv file.
 * 
 * Components:
 * 		- GuzzleHttp for http request
 * 		- League\Csv for iterating in csv file
 */

//instancia o cliente HTTP Guzzle
$client = new \GuzzleHttp\Client();

//abre e itera o arquivo CSV:
$csv = Reader::createFromPath($argv[1]);

foreach ($csv as $csvRow) {
	try {
		//envia um request http
		$httpResponse = $client->request('GET', $csvRow[0]);

		if ($httpResponse->getStatusCode() >= 400) {
			throw new \Exception();
		}
	} catch (\Exception $e) {
		//exibe urls erradas
		echo $csvRow[0].PHP_EOL;
	}
}