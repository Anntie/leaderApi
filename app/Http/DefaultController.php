<?php
	namespace Http;

	/**
	 * Conteoller of "/"
	 */
	class DefaultController extends BasicController
	{
		
		public function render() {
			return "<h1 align=\"center\">JSON API</h1>";
		}

	}