<?php

/**
 * Session_Checking_det class
 */
class Session_Checkin_det extends CommonObject
{
	public $element='session_checkin_det';
	public $table_element='session_checkin_det';
	
	protected $TChamps2 = array(
	    'fk_checkin'=>'number'
	    ,'fk_user'=>'number'
	    ,'fk_adherant'=>'number'
	);
	
	var $defaultorder='fk_checkin';
	var $defaultnomurl='fk_checkin';
	
	var $rowid;
	var $fk_user;
	var $coach;
	var $fk_adherant;
	var $adherant;
	var $fk_checkin;
	var $checkin;
	var $statut;
	var $picto = 'glyphicon-ok';
	
	public function fetch($id) {
	    $res = parent::fetch($id);
	    
	    // Fetching all fk keys
	    $checkin = new Session_Checkin($this->PDOdb);
	    $checkin->fetch($this->fk_checkin);
	    $this->checkin = $checkin;
	    
	    if(!empty($this->fk_adherant)) $this->adherant = $this->checkin->session->TAdherants[$this->fk_adherant];
	    if(!empty($this->fk_user)) $this->coach = $this->checkin->session->TCoachs[$this->fk_user];
	    
	    return $res;
	}
}