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
class ControllerIndex extends Controller {

	public function actionAllIndex() {
		$links = array(
				'http://playa.local/htdocs/blog/' => 'Index::actionAllIndex',
				'http://playa.local/htdocs/blog/index.html' => 'Index::actionAllIndex',
				'http://playa.local/htdocs/blog/contact.html' => 'Index::actionAllContact',
				'http://playa.local/htdocs/blog/post.html' => 'Post::actionIndex() <em>note it would match Index::action_post as well if it\'d exist. If both exist, the longest controller name wins.</em>',
				'http://playa.local/htdocs/blog/post/list.html' => '301 redirect!!!',
				'http://playa.local/htdocs/blog/post/1.html' => 'Post::actionView(1)',
				'http://playa.local/htdocs/blog/post/view/1.html' => '301 redirect!!!',
				'http://playa.local/htdocs/blog/post/create.html' => 'Post::postCreate()',
				'http://playa.local/htdocs/blog/post/delete/1.html' => 'Post::actionDelete(1)',
				'http://playa.local/htdocs/blog/post/comment/list/1.html' => 'Post::actionCommentList(1)',
				'http://playa.local/htdocs/blog/post/comment/create/1.html' => 'PostComment::actionCreate(1)',
				'http://playa.local/htdocs/blog/post/comment/delete/1.html' => 'PostComment::actionDelete(1)',
				'http://playa.local/htdocs/blog/post/page/3.html' => 'PostComment::actionIndex()',
				'http://playa.local/htdocs/blog/user.html' => 'User::actionIndex()',
				'http://playa.local/htdocs/blog/user/batman.html' => 'User::actionView()',
				'http://playa.local/htdocs/blog/user/batman/posts.html' => 'User::actionPosts()',
				'http://playa.local/htdocs/blog/user/batman/tag/cave.html' => 'Tag::actionIndex(cave) plus set $ControllerTag->_User',

				'http://playa.local/htdocs/blog/compare.html/1/3/4' => 'Compare::action_index(1, 3, 4)',
				'http://playa.local/htdocs/blog/tag/foo/post/3.html' => 'Tag::action_post(3) plus set $ControllerTag->_Tag = Tag::get("foo")',

				'http://playa.local/htdocs/community/batman/videos.html',
				'http://playa.local/htdocs/community/batman/playlists.html',
				'http://playa.local/htdocs/community/batman/playlists/cave_music.html',
				'http://playa.local/htdocs/community/batman/playlists/cave_music.html',
				'http://playa.local/htdocs/community/batman/playlists/cave_music/bar.html' => 'Playlist::action_bar("cave_music"), plus set $ControllerPlaylist->_User = User::get("batman")',

		);
		return \View::get('index.html', array(
				'links'=>$links
		));
	}

	public function actionAllContact() {
		return View::get('contact.html');
	}

	public function actionAllTest() {
		$v = \View::get();
		// @todo this the invoke should do
		$v->setFnameExtension('.html');
		$x = $v->render('test');
		echop('XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'); echop($x); echop('XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
#		echop($v); die('FFFFFFFFFFFFFFFFFFFFFF');
		return $v;
	}

	public function actionAllTest2() {
		$v = \View::get('test');
		// @todo this the invoke should do
		$v->setFnameExtension('.html');
		$x = $v->render();
#		echop('XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'); echop($x); echop('XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
#		echop($v); die('FFFFFFFFFFFFFFFFFFFFFF');
		return $v;
	}

}
