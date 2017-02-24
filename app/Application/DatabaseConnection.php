<?php
	
	namespace Application;

	/**
	 * Database connection class
	 * Implements Singleton
	 */
	class DatabaseConnection {

		private static $instance = NULL;

    	private function __construct() {}

    	private function __clone() {}

	    public static function getInstance() {
	      	if (!isset(self::$instance)) {
	        	$pdo_options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
	        	self::$instance = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
	      	}
	      	return self::$instance;
	    }

	    /**
		 * Returns table as associative array
	     */
	    public static function getTable($table, $options = "") {
	    	try {
				$exe = self::getInstance()->prepare("SELECT * FROM `" . $table . "` " . $options);
				$exe->execute();
				$result = $exe->fetch(\PDO::FETCH_ASSOC);
				if(empty($result)) {
					return [];
				}
				return $result;
			} catch(\PDOException $e) {
				// Log exception
				return [];
			}
	    }
	}