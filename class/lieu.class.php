<?php

/**
 * Type class
 */
class Lieu extends CommonObject
{
	public $element='lieu';
	public $table_element='lieu';
	
	protected $TChamps2 = array(
	    'libelle'=>'string'
	    ,'address'=>'string'
	    ,'zip'=>'string'
	    ,'town'=>'string'
	    ,'country'=>'string'
	    ,'office_phone'=>'string'
	);
	
	var $libelle;
	var $address;
	var $zip;
	var $town;
	var $country;
	var $office_phone;
	var $statut;
	var $picto = 'glyphicon-map-marker';
	
}