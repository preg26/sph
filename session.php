<?php
require_once 'includes/preload.php';

$controller->check_user();
$page->name = 'session';
$page->title = 'Gestion des sessions';

$object = new Session($PDOdb);
if(!empty($id)) $object->fetch($id);

$jeu = new Jeu($PDOdb);
$TJeu = $jeu->fetchAll();
$lieu = new Lieu($PDOdb);
$TLieu = $lieu->fetchAll();
$periode = new Periode($PDOdb);
$TPeriode = $periode->fetchAll();
$coach = new User($PDOdb);
$TCoach = $coach->fetchAll();
$adherent = new Adherent($PDOdb);
$TAdherent = $adherent->fetchAll();

switch ($action) {
    case 'update':
        $object->set_vars();
    case 'create':
        $object->set_vars();
        $res = $object->save();
        if($res) {
            header('Location:./session.php?action=view&id='.$object->rowid);
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'delete':
        $res = $object->delete();
        if($res) {
            header('Location:./session.php');
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'add_adherent':
        $link = new Session_Adherent($PDOdb);
        $link->set_vars();
        $link->rowid = null;
        $res = $link->save();
        if($res) {
            header('Location:./session.php?action=view&id='.$id);
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'delete_adh':
        $id_adh = GETPOST('id_adh');
        $res = $object->remove_adherent($id_adh);
        if($res) {
            header('Location:./session.php?action=view&id='.$id);
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'add_coach':
        $link = new Session_Coach($PDOdb);
        $link->set_vars();
        $link->rowid = null;
        $res = $link->save();
        if($res) {
            header('Location:./session.php?action=view&id='.$id);
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'delete_coach':
        $id_coach = GETPOST('id_coach');
        $res = $object->remove_coach($id_coach);
        if($res) {
            header('Location:./session.php?action=view&id='.$id);
        } else {
            echo 'Erreur, veuillez contacter l\'administrateur';
        }
        exit;
        break;
    case 'checkin_save' :
        $checkin = new Session_Checkin($PDOdb);
        $checkin->set_vars();
        $res = $checkin->save();
        
        if($res) {
            // On save toutes les lignes
            foreach($_REQUEST['coach'] as $idcoach) {
                $checkin_det = new Session_Checkin_det($PDOdb);
                $checkin_det->set_vars();
                $checkin_det->fk_checkin = $checkin->rowid;
                $checkin_det->fk_user = $idcoach;
                $checkin_det->save();
                $checkin->TDet[] = $checkin_det;
            }
            foreach($_REQUEST['adherent'] as $idadherent) {
                $checkin_det = new Session_Checkin_det($PDOdb);
                $checkin_det->set_vars();
                $checkin_det->fk_checkin = $checkin->rowid;
                $checkin_det->fk_adherent = $idadherent;
                $checkin_det->save();
                $checkin->TDet[] = $checkin_det;
            }
            header('Location:./session.php?action=view&id='.$id);
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
    case 'checkin' :
        include 'tpl/session/checkin/card.tpl.php';
        break;
    case 'new' :
    case 'view' :
    case 'edit' :
        include 'tpl/session/card.tpl.php';
        break;
    case 'list':
    default :
        $idjeu = GETPOST('jeu');
        if(!empty($idjeu)) {
            $TObjects = $object->fetchAllForGame($idjeu);
        }else {
            $TObjects = $object->fetchAll();
        }
        include 'tpl/session/list.tpl.php';
        break;
}

include 'tpl/footer.tpl.php';