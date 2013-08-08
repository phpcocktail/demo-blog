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
class ControllerPost extends Controller {

	/**
	 * @var array[string]string I store an array of remaining params (uri parts, after using parts for controller and action))
	 */
// 	protected $_actionParams;

	public static function rerouteIndex() {
		return array('Blog\ControllerPost', 'actionList');
	}

	public function actionIndex() {
		die('ControllerPost::actionIndex');
		return $this->actionList();
	}

	public function actionList() {
		die('ControllerPost::actionList()');
	}

	public function actionView($postId) {
		die('ControllerPost::actionView(' . print_r($postId,1) . ')');
	}

	public function postCreate() {
		die('ControllerPost::postCreate');
	}

	public function actionAllDelete($postId) {
		die('ControllerPost::actionDelete(' . $postId . ')');
	}

	public function actionAllCommentList($postId) {
		die('ControllerPost::actionCOmmentList(' . $postId . ')');
	}

}
