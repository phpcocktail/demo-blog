<?php
/**
 * This file is part of PhpCocktail. PhpCocktail is free software: you can redistribute it and/or modify it under the
 * 		terms of the GNU Lesser General Public License as published by the Free Software Foundation, either version 3
 * 		of the License, or (at your option) any later version.
 * PhpCocktail is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * 		warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for
 * 		more details. You should have received a copy of the GNU Lesser General Public License along with PhpCocktail.
 * 		If not, see <http://www.gnu.org/licenses/>.
 * @author t
 * @since 1.01
 * @license LGPL
 * @copyright Copyright 2013 t
 */

/**
 * demo Blog application config
 * @version 1.01
 * @package Demo\Blog
 */
return array(
	'App' => array(
		'name' => 'Blog demo application',
		'namespace' => 'Blog',
		'basePath' => 'htdocs/blog',
		'localRoot' => APP_ROOT,
	),
	'View' => array(
//		'classname' => '\ViewSmarty',
		'classname' => '\ViewBasic',
		'templatePath' => \Camarera::CONF_AUTO,
	),
	'_store' => array(
		// register sqlite3 store, pointing to DB in assets folder
		function() {
			return \StoreDriverSqlite3Config::get(array(
				'id' => 'default',
				'path' => \Camarera::conf('.localRoot') . '/assets',
				'database' => 'blog.s3db',
			));
		},
	),
	'_logger' => array(
	),
);
