<?php
	session_start();
	/**
	 * Fichier autoload
	 * 
	 * Charge toutes les class du dossier
	 */

	function __autoload($class)
	{
		require_once('class/'. strtolower($class) . '.class.php');
	}
	
	function GETPOST($key) {
		$ret = null;
		if(isset($_REQUEST[$key])) {
			$ret = $_REQUEST[$key];
		}
		return $ret;
	}
