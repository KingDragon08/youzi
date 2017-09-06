<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/index.css" media="screen">
    <title>优字</title>
  </head>
  <body>
    <div class="full_page">
      <div class="video">
        <video src="assets/img/eg.mp4" autoplay="autoplay" loop="loop" preload="load"></video>
      </div>
      <div class="info">
        <div class="container">
          <p class="big_font">
            我是一些简单的文字信息我是一些简单的文字信息
            我是一些简单的文字信息我是一些简单的文字信息
          </p>
          <a href="#" class="learn_more_btn">了解更多</a>
        </div>
      </div>
      <?php require_once('nav.html'); ?>
    </div>

    <div class="container">
      <div class="head">名家时空</div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
      <?php 
        require_once("common/ezSQL/init.php");
        $sql = "select Id,name,coverImg,intro from youzi_master ".
                "order by Id desc limit 6";
        $masters = $db->get_results($sql);
        for($i=0; $i<count($masters); $i++){
      ?>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb20">
          <div class="col-lg-6">
            <img src="<?php echo $masters[$i]->coverImg; ?>" width="100%"/>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <p>姓名:<b><?php echo $masters[$i]->name ?></b></p>
            <p>简介:
              <small><?php echo mb_substr($masters[$i]->intro,0,80,'utf-8'); ?></small>
            </p>
            <a href="mingjiashikong/master.php?Id=<?php echo $masters[$i]->Id; ?>" class="btn btn-danger">了解更多</a>
          </div>
        </div>
      <?php
        }
      ?>
      </div>
    </div>


    <div class="container mt10">
      <div class="head">软笔教学中心</div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
        <?php  
          $sql = "select Id,name,coverImg,briefIntro from ".
                  "youzi_book where type=1 order by Id desc limit 6";
          $ruanbi = $db->get_results($sql);
          for($i=0; $i<count($ruanbi); $i++){
        ?>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb20">
            <div class="col-lg-6">
              <img src="<?php echo $ruanbi[$i]->coverImg;?>" width="100%"/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <p>书名:<b><?php echo $ruanbi[$i]->name;?></b></p>
              <p>简介:
                <small><?php echo mb_substr($ruanbi[$i]->briefIntro,0,80,'utf-8');?></small>
              </p>
              <a href="ruanbijiaoxuezhongxin/book.php?Id=<?php echo $ruanbi[$i]->Id;?>" class="btn btn-danger">配套视频</a>
            </div>
          </div>
        <?php
          }
        ?>
        
      </div>
    </div>
    <div class="container mt10">
      <div class="head">硬笔教学中心</div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
        
        <?php  
          $sql = "select Id,name,coverImg,briefIntro from ".
                  "youzi_book where type=2 order by Id desc limit 6";
          $yingbi = $db->get_results($sql);
          for($i=0; $i<count($yingbi); $i++){
        ?>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb20">
            <div class="col-lg-6">
              <img src="<?php echo $yingbi[$i]->coverImg;?>" width="100%"/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <p>书名:<b><?php echo $yingbi[$i]->name;?></b></p>
              <p>简介:
                <small><?php echo mb_substr($yingbi[$i]->briefIntro,0,80,'utf-8');?></small>
              </p>
              <a href="yingbijiaoxuezhongxin/book.php?Id=<?php echo $yingbi[$i]->Id;?>" class="btn btn-danger">配套视频</a>
            </div>
          </div>
        <?php
          }
        ?>


      </div>
    </div>
    <?php require_once("footer.html");?>
  </body>
</html>
