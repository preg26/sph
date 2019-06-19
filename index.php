<?php
require_once 'includes/preload.php';

$page->TJavascript[] = 'js/spe-index.js';
$page->TJavascript[] = 'js/huebee.pkgd.min.js';
$page->TCss[] = 'css/huebee.css';

$controller->check_user();
$page->name = 'index';
$page->title = 'Gestion des adhérants';


switch ($action) {
	case 'new' :
		$payment->set_vars();
		$payment->save();
		header('Location:./index.php?id=' . $id . '&year=' . $year . '&posy=' . $posy);
		break;
	case 'edit' :
		$payment->set_vars();
		if (! empty($payment->status) && ($payment->datep == '1970-01-01' || empty($payment->datep))) $payment->status = 0;
		$payment->save();
		//var_dump($_POST);exit;
		header('Location:./index.php?id=' . $id . '&year=' . $year . '&posy=' . $posy);
		break;
	case 'delete' :
		$payment->set_vars();
		$payment->delete();
		header('Location:./index.php?id=' . $id . '&year=' . $year . '&posy=' . $posy);
		break;
	default :
		$action = 'view';
		break;
}

// Cas vue interface pour login
if ($action == 'view') {
	include 'tpl/header.tpl.php';
	include 'tpl/menu.tpl.php';
	include 'tpl/index.tpl.php';
	include 'tpl/footer.tpl.php';
}