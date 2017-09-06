<?php
  require_once("../common/KD_Smarty.class.php");
  $smarty = new KD_Smarty();
  $db = $smarty->db;
  
  $Id = isset($_GET['Id'])?intval($_GET['Id']):1;
  $sql = "select * from youzi_videos4teaching where Id=$Id and type=1";
  $article = $db->get_row($sql);
  if($article){
    $smarty->assign("title",$article->title);
    $smarty->assign("article",$article);
    $sql = "select Id,title,briefIntro,coverImg from youzi_videos4teaching where type=1 and Id in (select Id from youzi_videos4teaching where type=1 and Id>$Id) limit 4";
    $relative_articles = $db->get_results($sql);
    $smarty->assign("relative_articles",$relative_articles);
  } else {
    header("HTTP/1.1 404 Not Found");  
    header("Status: 404 Not Found");  
    exit;
  }

  $smarty->assign("name","yingbijiaoxuezhongxin");
  $smarty->display("article.html");
?>

