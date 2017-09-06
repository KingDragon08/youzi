<?php
  require_once("../common/KD_Smarty.class.php");
  $smarty = new KD_Smarty();
  $smarty->assign("name","mingjiashikong");
  $smarty->display("index.html");
?>

