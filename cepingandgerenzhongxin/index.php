<?php
  require_once("../common/KD_Smarty.class.php");
  require_once("../common/User.class.php");
  $smarty = new KD_Smarty();
  $user = new User();
  if($user->isLogin()){
  	$smarty->assign("name","cepingandgerenzhongxin");
  	$smarty->display("index.html");
  } else {
  	$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
  	header("Location:login.php?url=$url");
  }
?>

