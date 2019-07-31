<?php
	require_once 'includes/preload.php';
	
	$controller->check_user();
	$page->name = 'user';
	$page->title = 'Gestion des utilisateurs';
	
	$object = new User($PDOdb);
	if(!empty($id)) $object->fetch($id);
	
	switch ($action) {
	    case 'update':
	        $ex_pass = $object->pass_crypted;
	        $object->set_vars();
	        if(empty($object->pass_crypted)) $object->pass_crypted = $ex_pass;
	    case 'create':
	        $object->set_vars();
	        $res = $object->save();
	        if($res) {
	            header('Location:./user.php');
	        } else {
	            echo 'Erreur, veuillez contacter l\'administrateur';
	        }
	        exit;
	        break;
	    case 'delete':
	        $res = $object->delete();
	        if($res) {
	            header('Location:./user.php');
	        } else {
	            echo 'Erreur, veuillez contacter l\'administrateur';
	        }
	        exit;
	        break;
	}
	
	// Cas vue interface pour type
	include 'tpl/header.tpl.php';
	include 'tpl/menu.tpl.php';
	
	switch($action) {
	    case 'new' :
	    case 'view' :
	    case 'edit' :
	        include 'tpl/user/card.tpl.php';
	        break;
	    case 'list':
	    default :
	        $TObjects = $object->fetchAll();
	        include 'tpl/user/list.tpl.php';
	        break;
	}
	
	include 'tpl/footer.tpl.php';