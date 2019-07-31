<?php
require_once 'includes/preload.php';

$page->TJavascript[] = 'js/huebee.pkgd.min.js';
$page->TCss[] = 'css/huebee.css';

$controller->check_user();
$page->name = 'jeu';
$page->title = 'Gestion des jeux disponibles';

$object = new Jeu($PDOdb);
if(!empty($id)) $object->fetch($id);

switch ($action) {
    case 'update':
    case 'create':
        $object->set_vars();
        $res = $object->save();
        if($res) {
            header('Location:./jeu.php');
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
	case 'delete':
	    $res = $object->delete();
	    if($res) {
	        header('Location:./jeu.php');
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
        include 'tpl/jeu/card.tpl.php';
        break;
    case 'list':
    default :
        $TObjects = $object->fetchAll();
        include 'tpl/jeu/list.tpl.php';
        break;
}

include 'tpl/footer.tpl.php';