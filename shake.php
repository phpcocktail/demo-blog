#!/usr/local/bin/php
<?php
/**
 * This file is part of PhpCocktail. PhpCocktail is free software: you can redistribute it and/or modify it under the
 * 		terms of the GNU Lesser General Public License as published by the Free Software Foundation, either version 3
 * 		of the License, or (at your option) any later version.
 * PhpCocktail is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * 		warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for
 * 		more details. You should have received a copy of the GNU Lesser General Public License along with PhpCocktail.
 * 		If not, see <http://www.gnu.org/licenses/>.
 * @copyright Copyright 2013 t
 */

// I should get rid of this
if (!function_exists('echop')) { require('/usr/local/php5/echop.php'); }

require('../camarera/bootstrap.php');
require('bootstrap.php');

\Beautify::setMode(\Beautify::MODE_BEAUTIFUL_NEWLINES);

try {
	\Camarera::loadConf('Shake', Camarera::conf('Cocktail.localRoot') . '/conf/shake.php', 'php', -1);

	$config = \Camarera::conf('App');
	if (empty($config)) {
		$config = \Camarera::conf('Shake');
	}
	$ApplicationConfig = \ApplicationConsoleConfig::get($config, false);

	$Application = \ApplicationConsole::get($ApplicationConfig);
	$Application->run();

}
catch (\Exception $e) {
	echop($e);
	die('UNCAUGHT EXCEPTION');
}
