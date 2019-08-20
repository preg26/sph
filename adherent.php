<?php
require_once 'includes/preload.php';

$controller->check_user();
$page->name = 'adherent';
$page->title = 'Gestion des Adhérents';

$object = new Adherent($PDOdb);
if(!empty($id)) $object->fetch($id);

switch ($action) {
    case 'valid':
        $object->statut = 1;
        $res = $object->save();
        if($res) {
            header('Location:./adherent.php?action=view&id='.$id);
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'paid':
        $object->statut = 2;
        $res = $object->save();
        if($res) {
            header('Location:./adherent.php?action=view&id='.$id);
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'update':
    case 'create':
        $object->set_vars();
        $res = $object->save();
        if($res) {
            header('Location:./adherent.php');
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'delete':
        $res = $object->delete();
        if($res) {
            header('Location:./adherent.php');
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
        include 'tpl/adherent/card.tpl.php';
        break;
    case 'list':
    default :
        $TObjects = $object->fetchAll();
        include 'tpl/adherent/list.tpl.php';
        break;
}

include 'tpl/footer.tpl.php';