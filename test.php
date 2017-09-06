<?php 
require_once("smarty/libs/Smarty.class.php");
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');

$smarty->assign('name','KingDragon');

$smarty->display('index.tpl');
?>