<?php
  require_once("../common/KD_Smarty.class.php");
  $smarty = new KD_Smarty();

  $db = $smarty->db;
  $page = isset($_GET['page'])?intval($_GET['page']):1;
  $type = isset($_GET['Id'])?intval($_GET['Id']):1;
  $page_size = 12;
  $start = ($page - 1) * $page_size;
  $start = $start>=0?$start:0;
  $sql = "select a.*,b.Id as userId,b.nickName,b.avatar,c.name as typeName, ".
  			"COUNT(d.Id) as totalReply,c.Id as typeId ".
  			"from youzi_forum a left join youzi_user b on a.userId=b.Id left ".
  			"join youzi_forum_type c on a.type=c.Id ".
  			"left join youzi_forum_reply d on a.Id=d.forumId ".
        "where a.type=$type group by a.Id ".
  			"order by a.isZhiding desc, a.isXianxiahuodong desc, ".
  			"a.isJinghua desc, a.Id desc limit $start,$page_size";
  $topics = $db->get_results($sql);
  $sql = "select count(Id) from youzi_forum where type=$type";
  $total_page = ceil($db->get_var($sql)/$page_size);
  $page_list = array();
  for($i=1; $i<=$total_page; $i++){
  	$page_list[] = $i;
  }
  $sql = "select name from youzi_forum_type where Id=$type";
  $typeName = $db->get_var($sql);
  $smarty->assign("typeName",$typeName);
  $smarty->assign("current_page",$page);
  $smarty->assign("page_list",$page_list);
  $smarty->assign("topics",$topics);
  $smarty->assign("name","kunfenyumishequ");
  $smarty->display("type.html");
?>

