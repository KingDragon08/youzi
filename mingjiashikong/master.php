<?php
  require_once("../common/KD_Smarty.class.php");
  $smarty = new KD_Smarty();
  $db = $smarty->db;

  //判断名家是否存在
  $Id = isset($_GET['Id'])?intval($_GET['Id']):1;
  $sql = "select count(Id) from youzi_master where Id=$Id";
  if($db->get_var($sql)){
  	//获取名家的详细信息
  	$sql = "select * from youzi_master where Id=$Id";
  	$master = $db->get_row($sql);
  	$smarty->assign("master",$master);
  	//获取名家作品
  	$sql = "select * from youzi_works4master where masterId=$Id";
  	$works = $db->get_results($sql);
  	$smarty->assign("works",$works);
  	//获取相关名家－其实就是往后数8个
  	$sql = "select * from youzi_master limit $Id,8";
  	$relative_masters = $db->get_results($sql);
  	$smarty->assign("relative_masters",$relative_masters);
  } else {
  	header("HTTP/1.1 404 Not Found");  
    header("Status: 404 Not Found");  
    exit;
  }

  $smarty->assign("name","mingjiashikong");
  $smarty->display("master.html");
?>

