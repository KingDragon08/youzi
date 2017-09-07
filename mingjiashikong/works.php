<?php
  require_once("../common/KD_Smarty.class.php");
  $smarty = new KD_Smarty();
  $db = $smarty->db;

  //判断作品是否存在
  $Id = isset($_GET['Id'])?intval($_GET['Id']):1;
  $sql = "select count(Id) from youzi_works4master where Id=$Id";
  if($db->get_var($sql)){
  	//获取作品的详细信息
  	$sql = "select * from youzi_works4master where Id=$Id";
  	$works = $db->get_row($sql);
  	$smarty->assign("works",$works);
  	//获取名家信息
  	$sql = "select a.* from youzi_master a left join youzi_works4master b ".
            "on a.Id=b.masterId where b.Id=$Id";
  	$master = $db->get_row($sql);
  	$smarty->assign("master",$master);
  } else {
  	header("HTTP/1.1 404 Not Found");  
    header("Status: 404 Not Found");  
    exit;
  }

  $smarty->assign("name","mingjiashikong");
  $smarty->display("works.html");
?>

