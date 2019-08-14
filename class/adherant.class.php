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
	    ,'statut'=>'number'
	);
	
	var $defaultorder='lastname,firstname';
	var $defaultnomurl=array('lastname','firstname');
	
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
	var $picto = 'glyphicon-education';
	
	public function get_age() {
	    $age = (int) ((time() - strtotime($this->birth_date)) / 3600 / 24 / 365);
	    return $age;
	}
	
	public function get_sessions() {
	    $res = 'RL<br/>Overwatch';
	    return $res;
	}
	
	public function get_taux_presence() {
	    $res = '100';
	    return $res;
	}
	
	/****
	 * return html code of status object
	 * @param boolean $feminin
	 */
	public function get_status($feminin = false){
	    if($this->statut != null) {
	        switch($this->statut) {
	            default :
	                $class = 'draft';
	                $title = 'Brouillon';
	                break;
	            case '1' :
	                $class = 'notpaid';
	                $title = 'Impayé';
	                if ($feminin) $title.='e';
	                break;
	            case '2' :
	                $class = 'closed';
	                $title = 'Payé';
	                if ($feminin) $title.='e';
	                break;
	        }
	        $res = '<span class="statut '.$class.'" ></span> '.$title;
	    }else {
	        $res = 'n/a';
	    }
	    return $res;
	}
	
}