<?php
require_once 'includes/preload.php';

$controller->check_user();
$page->name = 'adherant';
$page->title = 'Gestion des adhérants';

$object = new Adherant($PDOdb);
if(!empty($id)) $object->fetch($id);

switch ($action) {
    case 'valid':
        $object->statut = 1;
        $res = $object->save();
        if($res) {
            header('Location:./adherant.php?action=view&id='.$id);
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'paid':
        $object->statut = 2;
        $res = $object->save();
        if($res) {
            header('Location:./adherant.php?action=view&id='.$id);
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'update':
        $object->set_vars();
    case 'create':
        $object->set_vars();
        $res = $object->save();
        if($res) {
            header('Location:./adherant.php');
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'delete':
        $res = $object->delete();
        if($res) {
            header('Location:./adherant.php');
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
        include 'tpl/adherant/card.tpl.php';
        break;
    case 'list':
    default :
        $TObjects = $object->fetchAll();
        include 'tpl/adherant/list.tpl.php';
        break;
}

include 'tpl/footer.tpl.php';