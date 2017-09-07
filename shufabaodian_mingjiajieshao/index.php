<?php
  require_once("../common/KD_Smarty.class.php");
  $smarty = new KD_Smarty();
  $db = $smarty->db;
  $page = isset($_GET['page'])?intval($_GET['page']):1;
  $page_size = 12;
  $start = ($page - 1) * $page_size;
  $sql = "select Id,coverImg,tag,title,createTime,briefIntro from youzi_article "."where type=4 order by Id desc limit $start,$page_size";
  $articles = $db->get_results($sql);
  $sql = "select count(Id) from youzi_article where type=4";
  $total_page = ceil($db->get_var($sql)/$page_size);
  $page_list = array();
  for($i=1; $i<=$total_page; $i++){
  	$page_list[] = $i;
  }
  $smarty->assign("articles",$articles);
  $smarty->assign("page_list",$page_list);
  $smarty->assign("current_page",$page);
  $smarty->assign("name","shufabaodian");
  $smarty->display("index.html");
?>

