<?php

	/**
	 * Routes array
	 * Supports wildcards
	 * :any - any letter/number strings
	 * :num - integer only
	 * Resulting expression will contain as $1, $2, ... $n
	 * /route/:any/:num -> Contoller/$1/$2
	 */
	$routes = array(
		'/' => 'APIController/index',
		'/posts' => 'APIController/displayPosts'
	);