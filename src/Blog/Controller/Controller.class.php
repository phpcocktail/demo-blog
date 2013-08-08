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
abstract class Controller extends \ControllerHmvc {

	protected $_layout = 'page.html';

	protected function _before() {
		parent::_before();
		\HtmlAssets::instance()
			->setVersion(1)
			->addJs('//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js')
			->addCss('lib/bootstrap/css/bootstrap.css')
			->addJs('lib/bootstrap/js/bootstrap.js')
			->addCss('css/site.css')
		;
		$Topnav = \BlockNavbarTop::get()
			->setBrandHomeLink(true)
			->append(
					\BlockLoginbox::get(null, 'login-topnav')
						// @todo this should be defaulted based on block structure :)
						->setLoginFormAction('login-topnav/login'),
					'login-topnav'
			);
		$Side = \BlockContainer::get(null, array())
			->setBlockWrapperClass('well')
			->append(\Blog\BlockContact::get());
		$this
			->setViewData('Side', $Side)
			->setViewData('Topnav', $Topnav)
		;
	}

}
