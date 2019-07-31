<?php

/**
 * Type class
 */
class Periode extends CommonObject
{
	public $element='periode';
	public $table_element='periode';
	
	protected $TChamps2 = array(
	    'libelle'=>'string'
	    ,'date_deb'=>'date'
	    ,'date_fin'=>'date'
	);
	
	var $rowid;
	var $ref;
	var $libelle;
	var $statut;
	var $picto = 'glyphicon-calendar';
	
}