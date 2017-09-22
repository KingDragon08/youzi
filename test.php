<?php 
$source = "assets/img/ai.jpg";
$target = "test/upload/20170922/1506091326.jpg";
// $target = "assets/img/ai.jpg";
$img_source = imagecreatefromjpeg($source);
$img_target = imagecreatefromjpeg($target);

if($img_source && $img_target){
	$counter = 0;
	for($i=0; $i<400; $i++){
		for($j=0; $j<400; $j++){
			$rgb_source = imagecolorat($img_source, $i, $j);
			$rgb_target = imagecolorat($img_target, $i, $j);
			$r_source = ($rgb_source >> 16) & 0xFF;
			$g_source = ($rgb_source >> 8) & 0xFF;
			$b_source = $rgb_source & 0xFF;
			$a_source = (($r_source*38+$g_source*75+$b_source*15)>>7)/(1<<4);

			$r_target = ($rgb_target >> 16) & 0xFF;
			$g_target = ($rgb_target >> 8) & 0xFF;
			$b_target = $rgb_target & 0xFF;
			$a_target = (($r_target*38+$g_target*75+$b_target*15)>>7)/(1<<4);			
			//echo $a_source.','.$a_target.'<br/>';
			if($a_source!=0){
				$ratio = $a_target / $a_source;	
			} else {
				$ratio = $a_target<=1.6 ? 1:0;
			}
			
			if($ratio<=1.1 && $ratio>=0.9){
				$counter++;
			}
		}
	}
	echo $counter * 1.0 / 160000;
}
exit();

require_once("smarty/libs/Smarty.class.php");
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');

$smarty->assign('name','KingDragon');

$smarty->display('index.tpl');
?>