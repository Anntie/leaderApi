<?php
	namespace Http;

	use Application\DatabaseConnection as DB;

	/**
	 * Controller for "/posts/"
	 */
	class APIController extends BasicController
	{
		
		public function displayPosts() {
			$posts = DB::getTable("posts");
			return json_encode($posts);
		}

		public function index() {
			return "<h1 align=\"center\">JSON API</h1>";
		}

	}