<?php
require_once 'includes/preload.php';

$page->TJavascript[] = 'js/huebee.pkgd.min.js';
$page->TCss[] = 'css/huebee.css';

$controller->check_user();
$page->name = 'lieu';
$page->title = 'Gestion des lieux';

$object = new Lieu($PDOdb);
if(!empty($id)) $object->fetch($id);

switch ($action) {
    case 'update':
    case 'create':
        $object->set_vars();
        $res = $object->save();
        if($res) {
            header('Location:./lieu.php');
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'delete':
        $res = $object->delete();
        if($res) {
            header('Location:./lieu.php');
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
        include 'tpl/lieu/card.tpl.php';
        break;
    case 'list':
    default :
        $TObjects = $object->fetchAll();
        include 'tpl/lieu/list.tpl.php';
        break;
}

include 'tpl/footer.tpl.php';