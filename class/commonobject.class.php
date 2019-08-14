<?php

/**
 *	Parent class of all other classes
 */
abstract class CommonObject
{
    /**
     * @var array       List of all fields to save
     */
    private $TFields = array();
    
    /**
     * @var string		Column name of the ref field.
     */
    protected $table_ref_field = '';
    
    /**
     * @var array       List of default fields to save
     */
    protected $TChamps = array(
        'rowid'=>'number'
        ,'datec'=>'date'
        ,'fk_user_creat'=>'number'
        ,'fk_user_modif'=>'number'
    );
    
	/**
	 * @var int The object identifier
	 */
	public $rowid=0;
	
	/**
	 * @var varchar(100) The default column used to order results sql
	 */
	public $defaultorder='libelle';
	
	/**
	 * @var varchar(100) The default column used for get_nomurl()
	 */
	public $defaultnomurl='libelle';

	/**
	 * @var int The user who create it
	 */
	public $fk_user_creat;

	/**
	 * @var int The last user who modify it
	 */
	public $fk_user_modif;
	
	/**
	 * @var datetime The date of creation
	 */
	public $datec;
	
	/**
	 * @var datetime The date of last modif
	 */
	public $tms;

	/**
	 * @var string[]	Array of error strings
	 */
	public $errors=array();

	/**
	 * @var string		Key value used to track if data is coming from import wizard
	 */
	public $import_key;

	/**
	 * @var mixed		Contains data to manage extrafields
	 */
	public $array_options=array();

	/**
	 * @var int[]		Array of linked objects ids. Loaded by ->fetchObjectLinked
	 */
	public $linkedObjectsIds;

	/**
	 * @var mixed		Array of linked objects. Loaded by ->fetchObjectLinked
	 */
	public $linkedObjects;

	/**
	 * @var string		Name of primary key
	 */
	public $primary_key='rowid';
	
	/**
	 * @var PDO		Database handler
	 */
	public $PDOdb;
    
	private function mergeFields() {
	    $this->TFields = array_merge($this->TChamps, $this->TChamps2);
	}
	
	private function generate_vars($array) {
	    foreach($array as $elem => $value) {
	        if($elem != 'PDOdb' && !is_array($value)) {
	            $this->{$elem} = $value;
	        }else if(is_array($value)) {
	            $this->generate_vars($value);
	        }
	    }
	}
	
	public function __construct($PDOdb) {
		$this->PDOdb = $PDOdb;
		$this->mergeFields();
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
	                $class = 'valid';
	                $title = 'Validé';
	                if ($feminin) $title.='e';
	                break;
	            case '2' :
	                $class = 'closed';
	                $title = 'Fermé';
	                if ($feminin) $title.='e';
	                break;
	            case '3' :
	                $class = 'notpaid';
	                $title = 'Impayé';
	                if ($feminin) $title.='e';
	                break;
	        }
	        $res = '<span class="statut '.$class.'" ></span> '.$title;
	    }else {
	        $res = 'n/a';
	    }
	    return $res;
	}
	
	/****
	 * return link of element card
	 */
	public function get_nomurl(){
	    $res = '';
	    if($this->rowid != null) {
	        $res = '<a href="'.$this->element.'.php?action=view&id='.$this->rowid.'">';
	        $res .='<span class="glyphicon '.$this->picto.'"></span> ';
	        if(!empty($this->defaultnomurl)) {
	            if(is_array($this->defaultnomurl)) {
	                foreach($this->defaultnomurl as $item) {
	                    $res .= $this->{$item}.' ';
	                }
	            }else {
	               $res .= $this->{$this->defaultnomurl};
	            }
	        }else if(!empty($this->ref)) {
	            $res .= $this->ref;
	        } else {
	            $res .= $this->libelle;
	        }
    	    $res .='</a>';
	    }
	    return $res;
	}

	public function set_vars() {
	    global $user;
		foreach($_REQUEST as $champs => $value) {
			if(array_key_exists($champs,$this->TFields)) {
				if($this->TFields[$champs] == 'date') $value = date('Y-m-d',strtotime($value));
				$this->{$champs} = $value;
			}
		}
		
		// Default values
		if(empty($this->datec)) $this->datec = date('Y-m-d H:i:s');
		if(empty($this->fk_user_creat)) $this->fk_user_creat = $user->rowid;
		if(empty($this->fk_user_modif)) $this->fk_user_modif = $user->rowid;
	}

	public function save() {
		$result = -1;
		if(empty($this->rowid)) {
			$result = $this->create();
		} else {
			$result = $this->update();
		}
		return $result;
	}

	public function create() {
	    $champs = '`'.implode('`,`',array_keys($this->TFields)).'`';
		$sql = 'INSERT INTO '.MAIN_DB_PREFIX.$this->table_element.'('.$champs.')';
		$sql.= ' VALUES(';
		foreach($this->TFields as $champs => $type) {
			$val = $this->{$champs};
			switch($type) {
				case 'date':
					$sql.='\''.$val.'\'';
					break;
				case 'number':
				case 'float':
					if(empty($val)) $val = 0;
					$sql.=$val;
					break;
				case 'text':
				default:
					$sql.='\''.addslashes($val).'\'';
					break;
			}
			$sql.=',';
		}
		$sql = substr($sql,0,-1);
		$sql.=')';
		
		$req = $this->PDOdb->query($sql);
		if($req) {
			return 1;
		}else{
			return -1;
		}

	}

	public function update() {
	    $champs = '`'.implode('`,`',array_keys($this->TFields)).'`';
		$sql = 'UPDATE '.MAIN_DB_PREFIX.$this->table_element;
		$sql.= ' SET ';
		foreach($this->TFields as $champs => $type) {
			if($champs != $this->primary_key) {
				$sql .= '`'.$champs.'` = ';
				switch($type) {
					case 'date':
						$sql.='\''.$this->{$champs}.'\'';
						break;
					case 'number':
					case 'float':
						$sql.=$this->{$champs};
						break;
					case 'text':
					default:
						$sql.='\''.addslashes($this->{$champs}).'\'';
						break;
				}
				$sql.=',';
			}
		}
		$sql = substr($sql,0,-1);
		$sql.=' WHERE '.$this->primary_key.' = '.$this->{$this->primary_key};
		
		$req = $this->PDOdb->query($sql);
		if($req) {
			return 1;
		}else{
			return -1;
		}
	}

	public function delete() {
		$sql = 'DELETE FROM '.MAIN_DB_PREFIX.$this->table_element;
		$sql.=' WHERE '.$this->primary_key.' = '.$this->{$this->primary_key};

		$req = $this->PDOdb->query($sql);
		if($req) {
			return 1;
		}else{
			return -1;
		}
	}

	public function fetch($id) {
		$sql = "SELECT *";
		$sql.= " FROM ".MAIN_DB_PREFIX.$this->table_element;
		if(!empty($id)) {
			$sql.= " WHERE ".$this->primary_key.' = '.$id;
		}

		$req = $this->PDOdb->query($sql);
		if($res = $req->fetch(PDO::FETCH_OBJ)){
			$this->generate_vars($res);
			return 1;
		}else {
			return -1;
		}
	}
	
	public function fetchAll() {
	    $ret = array();
	    // Get user
	    $sql = "SELECT rowid";
	    $sql.= " FROM ".MAIN_DB_PREFIX.$this->table_element;
	    $sql.= " ORDER BY ".$this->defaultorder;
	    
	    $req = $this->PDOdb->query($sql);
	    while($res = $req->fetch(PDO::FETCH_OBJ)){
	        $class = get_class($this);
	        $object = new $class($this->PDOdb);
	        $object->fetch($res->rowid);
	        $ret[$object->rowid] = $object;
	    }
	    return $ret;
	}
	
	/*
	 * @function fetchAllFor
	 * 
	 * $TSearch    Array   array into each fields constructed like : array : column, operator, value
	 * 
	 * return $ret
	 */
	public function fetchAllFor($TSearch=array()) {
	    $ret = array();
	    // Get user
	    $sql = "SELECT rowid";
	    $sql.= " FROM ".MAIN_DB_PREFIX.$this->table_element;
	    $sql.= " WHERE 1 ";
	    foreach($TSearch as $TRestrict) {
	        $sql.= " AND ".$TRestrict['column']." ".$TRestrict['operator']." ".$TRestrict['value'];
	    }
	    $sql.= " ORDER BY ".$this->defaultorder;
	    
	    $req = $this->PDOdb->query($sql);
	    while($res = $req->fetch(PDO::FETCH_OBJ)){
	        $class = get_class($this);
	        $object = new $class($this->PDOdb);
	        $object->fetch($res->rowid);
	        $ret[$object->rowid] = $object;
	    }
	    return $ret;
	}
	
	public function get_editby() {
	    $ret = 'n/a';
	    $temp_user = new User($this->PDOdb);
	    if(!empty($this->fk_user_modif)) {
	        $temp_user->fetch($this->fk_user_modif);
	        $ret = '<a href="user.php?action=view&id='.$temp_user->rowid.'">';
	        $ret .='<span class="glyphicon '.$temp_user->picto.'"></span> ';
	        $ret .= $temp_user->lastname.' '.$temp_user->firstname;
	        $ret .='</a>';
	    }
	    return $ret;
	}
	
	public function get_createby() {
	    $ret = 'n/a';
	    $temp_user = new User($this->PDOdb);
	    if(!empty($this->fk_user_creat)) {
	        $temp_user->fetch($this->fk_user_creat);
	        $ret = '<a href="user.php?action=view&id='.$temp_user->rowid.'">';
	        $ret .='<span class="glyphicon '.$temp_user->picto.'"></span> ';
	        $ret .= $temp_user->lastname.' '.$temp_user->firstname;
	        $ret .='</a>';
	    }
	    return $ret;
	}
	
	/* STATICS FUNCTIONS */
	
	public static function select_all($name = null, $choice = null){
	    global $PDOdb;
	    
	    $res = null;
	    if(!empty($name)){
	        $staticObject = new static($PDOdb);
	        $TObjects = $staticObject->fetchAll();
	        $options = '<option value="-1">&nbsp;</option>';
	        foreach ($TObjects as $obj) {
	            $selected = false;
	            if($obj->rowid == $choice) {
	                $selected = true;
	            }
	            $options .= '<option value="'.$obj->rowid.'" '.(($selected)?'selected="selected"':'').'>'.$obj->libelle.'</option>';
	        }
	        $res = '<select name="'.$name.'" id ="'.$name.'">'.$options.'</select>';
	    }else{
	        $res = 'Erreur';
	    }
	    return $res;
	}
	
	public static function multiselect_all($name = null, $TChoices = null){
	    global $PDOdb;
	    
	    $res = null;
	    if(!empty($name)){
	        $staticObject = new static($PDOdb);
	        $TObjects = $staticObject->fetchAll();
	        $options = '';
	        foreach ($TObjects as $obj) {
	            $selected = false;
	            if(array_key_exists($obj->rowid, $TChoices)) {
	                $selected = true;
	            }
	            $options .= '<option value="'.$obj->rowid.'" '.(($selected)?'selected="selected"':'').'>'.$obj->libelle.'</option>';
	        }
	        $res = '<select multiple="multiple" name="'.$name.'[]" id ="'.$name.'">'.$options.'</select>';
	    }else{
	        $res = 'Erreur';
	    }
	    return $res;
	}

}
