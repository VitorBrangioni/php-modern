<?php
namespace VitorBrangioni\auraFilter;

require '../vendor/autoload.php';
use Aura\Filter\FilterFactory;

class Teste{
	
	function teste() {
		$filter_factory = new FilterFactory();
		$filter = $filter_factory->newSubjectFilter();
		return $filter->validate('vitorh.brangioni@gmail.com')->is('email');
	}
	
}

$teste = new Teste();


if($teste->teste() instanceof Aura) {
	echo 'success';
} else {
	echo 'fail';
}