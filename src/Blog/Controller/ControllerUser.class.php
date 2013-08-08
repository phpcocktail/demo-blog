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
class ControllerUser extends Controller {

	/**
	 * @var array[string]array[]string router shall fill these values from uri
	 */
	public static $autoParams = array(
			// autoparams must contain an array(classname, method) for creating the autoparam object (or other value)
				// since lambdas cannot be defined here
			'_User' => array('User', 'get'),
	);

	/**
	 * @var Blog\User to be set by routing
	 */
	protected $_User;

	function actionAllIndex() {
		echop($this);
		die('die @ UserController:actionAllIndex');
	}

}
