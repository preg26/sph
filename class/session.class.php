<?php

/**
 * Session class
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
	    ,'fk_jeu'=>'number'
	    ,'fk_periode'=>'number'
	    ,'fk_lieu'=>'number'
	);
	
	var $defaultorder='jour,heure_deb';
	var $rowid;
	var $heure_deb;
	var $heure_fin;
	var $jour;
	var $nb_places;
	var $fk_jeu;
	var $jeu;
	var $fk_lieu;
	var $lieu;
	var $fk_periode;
	var $periode;
	var $statut;
	var $TAdherents = array();
	var $TCoachs = array();
	var $TCheckin = array();
	var $nb_adh;
	var $nb_coach;
	var $picto = 'glyphicon-book';
	
	public function fetch($id) {
	    $res = parent::fetch($id);
	    
	    // Fetching all fk keys
	    $jeu = new Jeu($this->PDOdb);
	    $jeu->fetch($this->fk_jeu);
	    $this->jeu = $jeu;
	    
	    $lieu = new Lieu($this->PDOdb);
	    $lieu->fetch($this->fk_lieu);
	    $this->lieu = $lieu;
	    
	    $periode = new Periode($this->PDOdb);
	    $periode->fetch($this->fk_periode);
	    $this->periode = $periode;
	    
	    // Fetching adherents and coachs
	    $this->fetch_adherents();
	    $this->fetch_coachs();
	    
	    return $res;
	}
	
	public function fetch_adherents() {
	    $TRes = array();
	    $linkAdh = new Session_Adherent($this->PDOdb);
	    
	    $TSearch = array(array('column' => 'fk_session', 'operator' => '=', 'value' => $this->rowid));
	    $TLinkAdh = $linkAdh->fetchAllFor($TSearch);
	    
	    if(!empty($TLinkAdh)) {
	        foreach($TLinkAdh as $adh) {
	            $adherent = new Adherent($this->PDOdb);
	            $adherent->fetch($adh->fk_adherent);
	            $TRes[$adh->fk_adherent] = $adherent;
	        }
	    }
	    $this->TAdherents = $TRes;
	    $this->nb_adh = count($this->TAdherents);
	    return $TRes;
	}
	
	public function fetch_coachs() {
	    $TRes = array();
	    $linkCoach = new Session_Coach($this->PDOdb);
	    
	    $TSearch = array(array('column' => 'fk_session', 'operator' => '=', 'value' => $this->rowid));
	    $TLinkCoach = $linkCoach->fetchAllFor($TSearch);
	    
	    if(!empty($TLinkCoach)) {
	        foreach($TLinkCoach as $coa) {
	            $coach = new User($this->PDOdb);
	            $coach->fetch($coa->fk_user);
	            $TRes[$coa->fk_user] = $coach;
	        }
	    }
	    $this->TCoachs = $TRes;
	    $this->nb_coach = count($this->TCoachs);
	    return $TRes;
	}
	
	public function fetchAllForGame($idjeu) {
	    $TSessions = $this->fetchAll();
	    if(!empty($TSessions)) {
	        foreach($TSessions as $k => $sess) {
	            if($sess->fk_jeu != $idjeu) {
	                unset($TSessions[$k]);
	            }
	        }
	    }
	    return $TSessions;
	}
	
	public function fetchAllFull($full=1) {
	    $TSessions = $this->fetchAll();
	    if(!empty($TSessions)) {
	        foreach($TSessions as $k => $sess) {
	            if($full == 0) {
	                // Cas session non pleines
	                if($sess->nb_places <= $sess->nb_adh || $sess->nb_adh == 0) {
	                    unset($TSessions[$k]);
	                }
	            } else if($full == -1) {
	                // Cas session vide
	                if($sess->nb_adh > 0) {
	                    unset($TSessions[$k]);
	                }
	            } else {
	                // Cas session pleine
	                if($sess->nb_places > $sess->nb_adh) {
	                    unset($TSessions[$k]);
	                }
	            }
	        }
	    }
	    return $TSessions;
	}
	
	public function remove_coach($idcoach) {
	    $res = null;
	    $linkCoach = new Session_Coach($this->PDOdb);
	    
	    $TSearch = array(
	        array('column' => 'fk_session', 'operator' => '=', 'value' => $this->rowid)
	        ,array('column'=>'fk_user', 'operator' => '=', 'value' => $idcoach)
	    );
	    $TLinkCoach = $linkCoach->fetchAllFor($TSearch);
	    if(!empty($TLinkCoach)) {
	        foreach($TLinkCoach as $coach) {
	            $res = $coach->delete();
	        }
	    }
	    return $res;
	}
	
	public function remove_adherent($idadherent) {
	    $res = null;
	    $linkAdherent = new Session_Adherent($this->PDOdb);
	    
	    $TSearch = array(
	        array('column' => 'fk_session', 'operator' => '=', 'value' => $this->rowid)
	        ,array('column'=>'fk_adherent', 'operator' => '=', 'value' => $idadherent)
	    );
	    $TLinkAdherent = $linkAdherent->fetchAllFor($TSearch);
	    if(!empty($TLinkAdherent)) {
	        foreach($TLinkAdherent as $adherent) {
	            $res = $adherent->delete();
	        }
	    }
	    return $res;
	}
	
	public function get_nomurl($field = 'libelle') {
	    $res = '';
	    if($this->rowid != null) {
	        $res = '<a href="'.$this->element.'.php?action=view&id='.$this->rowid.'">';
	        $res .='<span class="glyphicon '.$this->picto.'"></span> ';
	        $res .= $this->jeu->{$field};
            $res .='</a>';
	    }
	    return $res;
	}
	
	public function get_coachs() {
	    $res = '';
	    $i=1;
	    if(!empty($this->TCoachs)) {
	        foreach($this->TCoachs as $coach) {
	            if($i>1) $res .= '<br/>';
	            $res .= $coach->get_nomurl();
	            $i++;
	        }
	    }
	    return $res;
	}
	
	public function get_badge_places() {
	    $class = 'backgreen';
	    $nb_adh = $this->nb_adh;
	    $nb_places = $this->nb_places;
	    
	    // Calcul du ratio d'occupation
	    if($nb_adh > 0)
	        $ratio_occup = ($nb_adh / $nb_places) * 100;
	    else
	        $ratio_occup = 0;
	    
	    // Gestion de la classe à attribuer
        if($ratio_occup > 50 && $ratio_occup < 75) {
            $class = 'backorange';
        }else if($ratio_occup >= 75 && $ratio_occup < 100) {
            $class = 'backred';
        }else if($ratio_occup == 100) {
            $class = 'backgrey';
        }
        
        $res = '<span class="badge '.$class.'">'.$nb_adh.'/'.$nb_places.'</span>';
        return $res;
	}
	
	public function fetch_checkin() {
	    $TRes = array();
	    // Fetching des checkins pour cette session
	    $TSearch = array(array('column'=>'fk_session', 'operator'=>'=','value'=>$this->rowid));
	    $checkin = new Session_Checkin($this->PDOdb);
	    $TRes = $checkin->fetchAllFor($TSearch);
	    $this->TCheckin = $TRes;
	    
	    return $TRes;
	}
	
	public function get_taux_presence($idAdh=null, $idCoach=null) {
	    $res = '0/0';
	    $this->fetch_checkin();
	    if(!empty($idAdh) && count($this->TCheckin) > 0) {
	        // Cas Adhérent
	        $TSearch = array(
	            array('column'=>'fk_checkin', 'operator'=>'IN','value'=>'('.implode(',',array_keys($this->TCheckin)).')')
	            ,array('column'=>'fk_adherent', 'operator'=>'=','value'=>$idAdh)
	        );
	        $checkindet = new Session_Checkin_det($this->PDOdb);
	        $TRes = $checkindet->fetchAllFor($TSearch);
	        $res = count($TRes).'/'.count($this->TCheckin);
	    } else if(!empty($idCoach) && count($this->TCheckin) > 0) {
	        // Cas coach
	        $TSearch = array(
	            array('column'=>'fk_checkin', 'operator'=>'IN','value'=>'('.implode(',',array_keys($this->TCheckin)).')')
	            ,array('column'=>'fk_user', 'operator'=>'=','value'=>$idCoach)
	        );
	        $checkindet = new Session_Checkin_det($this->PDOdb);
	        $TRes = $checkindet->fetchAllFor($TSearch);
	        $res = count($TRes).'/'.count($this->TCheckin);
	        
	    }
	    return $res;
	}
}