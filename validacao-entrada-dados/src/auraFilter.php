<?php
namespace VitorBrangioni\auraFilter;

require '../vendor/autoload.php';
use Aura\Filter\FilterFactory;

class Teste{
	
	function teste() {
		$filter_factory = new FilterFactory();
		$filter = $filter_factory->newSubjectFilter();
		return $filter->validate(false)->is('bool');
	}
	
}

$teste = new Teste();
$is = $teste->teste();

if($teste === true) {
	echo 'success';
} else if($is === false){
	echo 'fail';
}