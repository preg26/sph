<?php

/**
 * Type class
 */
class Type extends CommonObject
{
	public $element='type';
	public $table_element='type';
	
	protected $TChamps2 = array(
				'libelle'=>'string'
			);
	
	var $rowid;
	var $libelle;
	var $statut;
	var $picto = 'glyphicon-off';
	
}