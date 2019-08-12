<?php

/**
 * Type class
 */
class Session extends CommonObject
{
	public $element='session';
	public $table_element='session';
	
	protected $TChamps2 = array(
	    'heure_deb'=>'string'
	    ,'heure_fin'=>'string'
	    ,'jour'=>'string'
	    ,'nb_places'=>'number'
	);
	
	var $rowid;
	var $ref;
	var $fk_jeu;
	var $jeu;
	var $fk_lieu;
	var $lieu;
	var $statut;
	var $picto = 'glyphicon-cd';
	
}