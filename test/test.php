<?php 
	header('Content-type:text/html;charset=utf-8');
	$ret = array();
	if(isset($_POST['dataURL'])){
		$base64_image_content = $_POST['dataURL'];
		//匹配出图片的格式
		if (preg_match('/^(data:\s*image\/(\w+);base64,)/', 
			$base64_image_content, $result))
		{
			$type = $result[2];
			$new_file = "upload/".date('Ymd',time())."/";
			if(!file_exists($new_file))
			{
				//检查是否有该文件夹，如果没有就创建，并给予最高权限
				mkdir($new_file, 0777);
			}
			// $new_file = $new_file.time().".jpg";
			$new_file = $new_file."temp.jpg";
			if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content))))
			{
				$ret['status'] = 1;
				$ret['file'] = $new_file;
				$source = "../assets/img/ai.jpg";
				$target = $new_file;
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
					$score =  ($counter * 1.0 / 160000) * 100;
					$ret['score'] = $score;
				}
			}
			else
			{
				$ret['status'] = 2;
				$ret['score'] = 0;
			}
		}

	} else {
		$ret['status'] = 0;	
		$ret['score'] = 0;
	}
	
	echo json_encode($ret);
?>
