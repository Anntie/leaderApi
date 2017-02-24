<?php

	namespace Application;
	use Application\DatabaseConnection;
	use Application\Router;

	/**
	 * Main application class
	 */
	final class Core {

		public function __construct() {
			require "routes.php";
			$this->registerRoutes($routes);
		}

		private function registerRoutes($routes) {
			Router::addRoute($routes);
		}

		/**
		 * Simple renderer
		 */
		private function render($view) {
			echo $view;
		}

		/**
		 * 
		 */
		public function run() {
			$this->render(Router::dispatch());
		}

	}