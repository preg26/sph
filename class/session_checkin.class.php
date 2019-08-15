<?php

/**
 * Session_Checkin class
 */
class Session_Checkin extends CommonObject
{
	public $element='session_checkin';
	public $table_element='session_checkin';
	
	protected $TChamps2 = array(
	    'date_checkin'=>'date'
	    ,'fk_session'=>'number'
	);
	
	var $defaultorder='date_checkin';
	var $defaultnomurl='date_checkin';
	
	var $rowid;
	var $date_checkin;
	var $fk_session;
	var $session;
	var $TDet = array();
	var $statut;
	var $picto = 'glyphicon-ok';
	
	public function fetch($id) {
	    $res = parent::fetch($id);
	    
	    // Fetching all fk keys
	    $session = new Session($this->PDOdb);
	    $session->fetch($this->fk_session);
	    $this->session = $session;
	    
	    return $res;
	}
	
	public function get_nomurl($field = null) {
	    $res = '';
	    if($this->rowid != null) {
	        $res = '<a href="'.$this->element.'.php?action=view&id='.$this->rowid.'">';
	        $res .='<span class="glyphicon '.$this->picto.'"></span> ';
	        $res .= $this->date_checkin.' - '.$this->session->jeu->ref;
            $res .='</a>';
	    }
	    return $res;
	}
}