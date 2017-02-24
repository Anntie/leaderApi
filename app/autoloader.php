<?php
	function loader($className) {
        $filename = str_replace('\\', '/', $className) . ".php";
        include($filename);
        return true;
	}

	spl_autoload_register('loader');