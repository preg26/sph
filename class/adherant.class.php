<?php

/**
 * Type class
 */
class Adherant extends CommonObject
{
	public $element='adherant';
	public $table_element='adherant';
	
	protected $TChamps2 = array(
	    'firstname'=>'string'
	    ,'lastname'=>'string'
	    ,'email'=>'string'
	    ,'address'=>'string'
	    ,'zip'=>'number'
	    ,'town'=>'string'
	    ,'country'=>'string'
	    ,'birth_address'=>'string'
	    ,'birth_zip'=>'number'
	    ,'birth_town'=>'string'
	    ,'birth_country'=>'string'
	    ,'job'=>'string'
	    ,'phone'=>'string'
	    ,'sex'=>'string'
	);
	
	var $defaultorder='lastname,firstname';
	var $rowid;
	var $email;
	var $lastname;
	var $firstname;
	var $sex;
	var $job;
	var $address;
	var $zip;
	var $town;
	var $country;
	var $birth_date;
	var $birth_address;
	var $birth_zip;
	var $birth_town;
	var $birth_country;
	var $phone;
	var $statut;
	var $picto = 'glyphicon-star';
	
	public function get_age() {
	    $age = (int) ((time() - strtotime($this->birth_date)) / 3600 / 24 / 365);
	    return $age;
	}
	
}