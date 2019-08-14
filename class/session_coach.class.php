<?php

/**
 * Session_Coach class
 */
class Session_Coach extends CommonObject
{
	public $element='session_coach';
	public $table_element='session_coach';
	
	protected $TChamps2 = array(
	    'fk_session'=>'number'
	    ,'fk_user'=>'number'
	);
	
	var $defaultorder='rowid';
	
	var $rowid;
	var $fk_session;
	var $session;
	var $fk_user;
	var $user;
	
	var $picto = 'glyphicon-link';
	
}