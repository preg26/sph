<?php

/**
 * Type class
 */
class Jeu extends CommonObject
{
	public $element='jeu';
	public $table_element='jeu';
	
	protected $TChamps2 = array(
	    'libelle'=>'string'
	    ,'ref'=>'string'
	);
	
	var $rowid;
	var $ref;
	var $libelle;
	var $statut;
	var $picto = 'glyphicon-cd';
	
}