<?php

/**
 * Session_Adherent class
 */
class Session_Adherent extends CommonObject
{
	public $element='session_adherent';
	public $table_element='session_adherent';
	
	protected $TChamps2 = array(
	    'fk_session'=>'number'
	    ,'fk_adherent'=>'number'
	);
	
	var $defaultorder='rowid';
	
	var $rowid;
	var $fk_session;
	var $session;
	var $fk_adherent;
	var $adherent;
	
	var $picto = 'glyphicon-link';
	
}