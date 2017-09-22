<?php
  require_once("../common/KD_Smarty.class.php");
  require_once("../common/User.class.php");
  $smarty = new KD_Smarty();
  $url = $_GET['url'];
  //处理登陆提交的表单
  if(isset($_POST['name']) && isset($_POST['password'])){
  	$name = $_POST['name'];
  	$password = $_POST['password'];
  	$user = new User();
  	$token = md5($password);
  	if($user->checkLogin($name,$token)){
  		echo 1;
  	} else {
  		$smarty->assign("error",1);
  	}
  }
  $smarty->assign("name","cepingandgerenzhongxin");
  $smarty->display("test.html");

?>

