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
namespace Blog;

/**
 * @author t
 * @package Cocktail\Demo\Blog
 * @version 1.01
 */
 class Tag extends \Model {

	protected static $_idFieldName;

	protected static $_fields = array(
			'title' => array('type' => 'string'),
			'cnt' => array('type' => 'integer', 'default' => 0),
	);

	protected static $_storeTable;

	/**
	 * @return \Blog\Tag
	 */
	public static function get($dataOrConfig=null, \ModelGetConfig $Config=null) {
		// @todo here I should implement some plain logic so eg. get('camara') and get('cámara') return the same object
		return parent::get($dataOrConfig, $Config);
	}

}
