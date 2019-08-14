<?php

/**
 * Session_Adherant class
 */
class Session_Adherant extends CommonObject
{
	public $element='session_adherant';
	public $table_element='session_adherant';
	
	protected $TChamps2 = array(
	    'fk_session'=>'number'
	    ,'fk_adherant'=>'number'
	);
	
	var $defaultorder='rowid';
	
	var $rowid;
	var $fk_session;
	var $session;
	var $fk_adherant;
	var $adherant;
	
	var $picto = 'glyphicon-link';
	
}