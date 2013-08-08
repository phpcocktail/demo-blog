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
 * @since 1.0
 * @license LGPL
 * @copyright Copyright 2013 t
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://playa.local/htdocs/blog/" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<title><?= \Application::instance()->getConfig()->name ?></title>
	<?= \b::b( \HtmlAssets::instance()->render('head'), 1 );?>
</head>
<body>
	<header>
		<?= \b::b($Topnav, 2) ?>
	</header>
	<div class="container-fluid">
		<div class="row-fluid">
			<h2 class="span12">Welcome to <strong><?= \Application::instance()->getConfig()->name ?></strong></h2>
		</div>
		<div class="row-fluid">
			<section class="span8">
				<?= \b::b($content, 4); ?>
			</section>
			<aside class="span4">
				<section class="well">
					<form class="form-search" >
						<div class="row-fluid input-append" >
							<input type="text" name="query" class="search-query span9" />
							<button type="submit" class="btn span3"><i class="icon-search"></i></button>
						</div>
					</form>
				</section>
				<?= \b::b($Side, 4) ?>
			</aside>
		</div>
	</div>
</body>
</html>
