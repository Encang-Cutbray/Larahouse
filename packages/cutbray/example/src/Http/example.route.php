<?php

use Cutbray\Example\Example;
Route::get('sample-package', function () {
	$example = new Example();
	return $example->greet('KOPI');
	return ['KOPI'];
});
