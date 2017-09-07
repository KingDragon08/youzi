<?php
  require_once("../common/KD_Smarty.class.php");
  $smarty = new KD_Smarty();
  $db = $smarty->db;
  $page = isset($_GET['page'])?intval($_GET['page']):1;
  $page_size = 12;
  $start = ($page - 1) * $page_size;
  $sql = "select Id,name,coverImg,intro from youzi_master ".
  			"order by Id desc limit $start,$page_size";
  $masters = $db->get_results($sql);
  $sql = "select count(Id) from youzi_master";
  $total_page = ceil($db->get_var($sql)/$page_size);
  $page_list = array();
  for($i=1; $i<=$total_page; $i++){
  	$page_list[] = $i;
  }
  $smarty->assign("masters",$masters);
  $smarty->assign("page_list",$page_list);
  $smarty->assign("current_page",$page);
  $smarty->assign("name","mingjiashikong");
  $smarty->display("index.html");
?>

