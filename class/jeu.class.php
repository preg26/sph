<?php

/**
 * Jeu class
 */
class Jeu extends CommonObject
{
	public $element='jeu';
	public $table_element='jeu';
	
	protected $TChamps2 = array(
	    'libelle'=>'string'
	    ,'ref'=>'string'
	    ,'fk_type'=>'number'
	);
	
	var $rowid;
	var $ref;
	var $libelle;
	var $statut;
	/*
	 * $type object Type
	 */
	var $type;
	var $fk_type;
	var $picto = 'glyphicon-cd';
	
	public function fetch($id) {
	    $res = parent::fetch($id);
	    $type = new Type($this->PDOdb);
	    if(!empty($this->fk_type)) {
	       $type->fetch($this->fk_type);
	    }
	    $this->type = $type;
	    return $res;
	}
	
}