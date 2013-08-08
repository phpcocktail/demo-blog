<?php
/**
 * Front controller for the demo Blog application
 * This file is part of PhpCocktail. PhpCocktail is free software: you can redistribute it and/or modify it under the
 * 		terms of the GNU Lesser General Public License as published by the Free Software Foundation, either version 3
 * 		of the License, or (at your option) any later version.
 * PhpCocktail is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * 		warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for
 * 		more details. You should have received a copy of the GNU Lesser General Public License along with PhpCocktail.
 * 		If not, see <http://www.gnu.org/licenses/>.
 * @author t
 * @since 1.0
 * @license LGPL
 * @copyright Copyright 2013 t
 * @version 1.01
 */
namespace Blog;

$t0 = microtime(true);

// @todo these shouldn't be here
require('../../../../../camarera/vendor/autoload.php');
require('../../../../vendor/autoload.php');
require('../../bootstrap.php');

$t1 = microtime(true);

try {

	if (array_key_exists('Debug', $headers = getallheaders()) && $headers['Debug']) {
		\Camarera::registerLogger('Debug logger', \LoggerAppend::instance(), \Camarera::LOGGER_ALL);
	}

	$Application = \ApplicationHttp::boot();
	$t2 = microtime(true);
	$Application->run();
	$t3 = microtime(true);
}
catch (\Exception $e) {
	\Camarera::log(
		\Camarera::LOG_NOTICE,
		'uncaught exception: ' . print_r($e->getMessage(), 1) . "\n" . print_r($e,1)
	);
	echo 'UNCAUGHT: ' . print_r($e, 1);
	echo "\nmem: " . memory_get_usage() . " / " . memory_get_peak_usage() . "\n";
	die();
}
if (\Camarera::conf('.env') != 'production') {
	printf(
			'<!-- boot: %.04f prepare: %.04f run: %0.4f total: %.04f -->',
			$t1-$t0,
			$t2-$t1,
			$t3-$t2,
			$t3-$t0
	);
}
