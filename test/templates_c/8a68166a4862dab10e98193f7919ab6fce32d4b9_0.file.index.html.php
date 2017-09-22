<?php
/* Smarty version 3.1.30, created on 2017-09-22 17:13:17
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/test/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c5288d078582_37708887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a68166a4862dab10e98193f7919ab6fce32d4b9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/test/templates/index.html',
      1 => 1506093186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../nav2.html' => 1,
    'file:../../footer.html' => 1,
  ),
),false)) {
function content_59c5288d078582_37708887 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-slider.css">
    <link rel="stylesheet" href="../assets/css/index.css" media="screen">
    <link rel="stylesheet" href="../assets/css/yingbi.css" media="screen">
    <link rel="stylesheet" href="./css/index.css" media="screen">
    <title>自测中心</title>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../../nav2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="icp" style="background:#fff;">
        <div class="container">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="../index.php">首页</a></li>
                    <li><a href="javascript:;">自测中心</a></li>
                </ol>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt20">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
              </span>
                </div>
            </div>
        </div>
    </div>
    <div class="canvax_bg">
        <div class="bg" style="background-image: url('../assets/img/ai.jpg');">
            <div class="ctr">
                <div class="btn btn-primary" onclick="upload()">1.选择文件</div>
                <div class="btn btn-primary" onclick="go()">2.提交作品</div>
                <div class="btn btn-primary" onclick="kd()">3.提交成绩</div>
                <div class="h20">&nbsp;</div>
                <p class="cc">
                    <input id="ex1" data-slider-id="ex1Slider" type="text" data-slider-min="1" data-slider-max="120" data-slider-step="1" data-slider-value="100" /> 缩放
                </p>
                <div class="h20">&nbsp;</div>
                <p class="cc">
                    <input id="ex2" data-slider-id="ex2Slider" type="text" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0" /> 旋转
                </p>
                <div class="h20">&nbsp;</div>
                <p class="white">当前成绩：<font id="score">0.00</font></p>
            </div>
        </div>
        <canvas id="canvas">not support canvas</canvas>
    </div>
    <div class="file">
        <img src="" id="myImg" />
        <input type="file" name="file" id="file" accept="image/*" onchange="changeImg(event)" />
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/bootstrap.slider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    var width = 0;
    var height = 0;
    var tempWidth = 0;
    var tempHeight = 0;
    var moveLeft = 0;
    var moveTop = 0;
    var deg = 0;
    var img = -1;
    var canvas = -1;
    var canvas_context = -1;

    var config = {};
    var isMove = false;
    var imgStatus = {
        'scale': 1.0,
        'rotate': 0
    };
    var lastStatus = {};
    var currentStatus = {};
    var ctx = canvas_context;
    var step = 1;

    function upload() {
        document.getElementById("file").click();
    }

    function changeImg(e) {
        step = 2;
        var file = e.target.files.item(0);
        if (!(/^image\/.*$/i.test(file.type))) {
            alert("不是图片文件");
        }
        var freader = new FileReader();
        freader.readAsDataURL(file);
        freader.onload = function(e) {
            var src = e.target.result;
            $("#myImg").attr("src", e.target.result);
            img = document.getElementById("myImg");
            canvas = document.getElementById("canvas");
            canvas.width = 400;
            canvas.height = 400;
            canvas_context = canvas.getContext("2d");
            ctx = canvas_context;
            ctx.globalAlpha = 0.7;

            canvas.onmousedown = function(e) {
                isMove = true;
                canvas.style.cursor = "move";
                var box = windowToCanvas(e.clientX, e.clientY);
                lastStatus.mouseX = box.x;
                lastStatus.mouseY = box.y;
            }

            canvas.onmouseout = function(e) {
                isMove = false;
                canvas.style.cursor = "default";
            }

            canvas.onmouseup = function(e) {
                isMove = false;
                canvas.style.cursor = "default";
            }

            canvas.onmousemove = function(e) {
                if (isMove) {
                    var box = windowToCanvas(e.clientX, e.clientY);
                    drawImgByMove(box.x, box.y, 0.7);
                }
            }


            $(".cc").each(function() {
                $(this).show();
            });
            img.onload = function() {
                config = {
                    width: 400,
                    height: 400,
                    imgSrc: e.target.result,
                    maxScale: 1.2,
                    minScale: 0.01
                };
                lastStatus = {
                    "imgX": -1 * img.width / 2,
                    "imgY": -1 * img.height / 2,
                    'mouseX': 0,
                    'mouseY': 0,
                    'translateX': 200,
                    'translateY': 200,
                    'scale': 1.0,
                    'rotate': 0
                };
                drawImgByStatus(canvas.width/2, canvas.height/2, 0.7);
            }
        }
    }

    function drawImgByStatus(x, y, alpha) {
        var imgX = lastStatus.imgX - (x - lastStatus.translateX) / lastStatus.scale;
        var imgY = lastStatus.imgY - (y - lastStatus.translateY) / lastStatus.scale;
        ctx.globalAlpha = alpha;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.save();
        ctx.translate(x, y);
        ctx.rotate(imgStatus.rotate * Math.PI / 180);
        ctx.scale(imgStatus.scale, imgStatus.scale);
        ctx.drawImage(img, imgX, imgY, img.width, img.height);
        ctx.restore();

        lastStatus = {
            'imgX': imgX,
            'imgY': imgY,
            'translateX': x,
            'translateY': y,
            'scale': imgStatus.scale,
            'rotate': imgStatus.rotate
        };
    }

    function drawImgByMove(x, y, alpha) {
        lastStatus.translateX = lastStatus.translateX + (x - lastStatus.mouseX);
        lastStatus.translateY = lastStatus.translateY + (y - lastStatus.mouseY);
        ctx.globalAlpha = alpha;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.save();
        ctx.translate(lastStatus.translateX, lastStatus.translateY);
        ctx.rotate(imgStatus.rotate * Math.PI / 180);
        ctx.scale(imgStatus.scale, imgStatus.scale);
        ctx.drawImage(img, lastStatus.imgX, lastStatus.imgY, img.width, img.height);
        ctx.restore();

        lastStatus.mouseX = x;
        lastStatus.mouseY = y;
    }




    window.onload = function() {

        $('#ex1').slider({
            formatter: function(value) {
                return "缩放: " + value + "%";
            }
        }).on('change', function(e) {
            var scale = e.value.newValue / 100;
            imgStatus.scale = scale;
            drawImgByStatus(canvas.width/2, canvas.height/2, 0.7);
        });

        $('#ex2').slider({
            formatter: function(value) {
                return "旋转: " + value + "度";
            }
        }).on('change', function(e) {
            deg = e.value.newValue;
            imgStatus.rotate = deg;
            drawImgByStatus(canvas.width/2, canvas.height/2, 0.7);
        });


    }

    //提交作品，用于计算成绩
    function go(){
      if(step<2){
        alert("请先选择文件");
        return;
      }
      drawImgByStatus(canvas.width / 2, canvas.height / 2, 1.0);
      var dataURL = canvas.toDataURL('image/jpeg');
      //提交到后台 
      $.ajax({
        url:'test.php',
        method:'post',
        dataType:'json',
        data:{
          dataURL:dataURL
        },
        success:function(result){
          if(result.status==1){
            $("#score").text(result.score.toFixed(2));
          }
        },
        error:function(e){
          console.log('error');
          console.log(e);
        }
      });
    }

    //提交成绩
    function kd(){
      if(step<3){
        alert("请先“选择文件”并至少完成一次“提交作品”");
        return;
      }
    }

    /**
     * 计算相对于canvas左上角的坐标值
     */
    function windowToCanvas(x, y) {
        var box = canvas.getBoundingClientRect();
        return {
            'x': x - box.left,
            'y': y - box.top
        };
    }
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
