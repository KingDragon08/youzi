<?php
  require_once("../common/KD_Smarty.class.php");
  $smarty = new KD_Smarty();
  $smarty->assign("name","test");
  $smarty->display("index.html");
?>

