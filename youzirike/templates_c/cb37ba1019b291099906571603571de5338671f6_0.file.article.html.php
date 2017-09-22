<?php
/* Smarty version 3.1.30, created on 2017-09-06 07:12:48
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/youzirike/templates/article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59af83d07a85d5_62010403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb37ba1019b291099906571603571de5338671f6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/youzirike/templates/article.html',
      1 => 1504674097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../nav2.html' => 1,
    'file:../../footer.html' => 1,
  ),
),false)) {
function content_59af83d07a85d5_62010403 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/Applications/XAMPP/xamppfiles/htdocs/youzi/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/Applications/XAMPP/xamppfiles/htdocs/youzi/smarty/libs/plugins/modifier.truncate.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/index.css" media="screen">
    <link rel="stylesheet" href="../assets/css/yingbi.css" media="screen">
    <link rel="stylesheet" href="../assets/css/style.css" media="screen">
    <link rel="stylesheet" href="../assets/css/toast.css" media="screen">
    <title>优字日课</title>
    <style type="text/css">
        /**/
        .h10{height:10px;}
        #kd_qrcode table{margin:0 auto;}
        video{width: 100%; height: auto;}
        video::-webkit-media-controls-enclosure {overflow:hidden;}
        video::-webkit-media-controls-panel {width: calc(100% + 30px);}
        /**/
    </style>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../../nav2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="icp" style="background:#fff;">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="../index.php">首页</a></li>
                    <li><a href="index.php">优字日课</a></li>
                    <li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                </ol>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="container mt20">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #fff; padding-bottom: 20px; margin-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                        <h5>
                            作者：<?php echo $_smarty_tpl->tpl_vars['article']->value->author;?>
&nbsp;&nbsp;&nbsp;&nbsp;
                            标签：<?php echo $_smarty_tpl->tpl_vars['article']->value->tag;?>
&nbsp;&nbsp;&nbsp;&nbsp;
                            时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->createTime,'%Y-%m-%d');?>

                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <span style="cursor: pointer;" data-toggle="modal" data-target="#qrcode">分享二维码</span>
                        </h5>
                        <div class="h10"></div>
                        <video id="video" src="<?php echo $_smarty_tpl->tpl_vars['article']->value->video;?>
" controls="controls"></video>
                        <div class="h10"></div>
                        <div class="row" style="margin-left: 0;">
                            <button class="btn btn-info" onclick="judge(0.5)">0.5倍速率</button>
                            <button class="btn btn-info" onclick="judge(0.8)">0.8倍速率</button>
                            <button class="btn btn-info" onclick="judge(1.0)">1.0倍速率</button>
                            <button class="btn btn-info" onclick="judge(1.2)">1.2倍速率</button>
                            <button class="btn btn-info" onclick="judge(1.5)">1.5倍速率</button>
                            <button class="btn btn-info" onclick="judge(2.0)">2.0倍速率</button>
                        </div>
                        <div class="h10"></div>
                        <h3><?php echo $_smarty_tpl->tpl_vars['article']->value->title;?>
</h3>
                        <div class="h10"></div>
                        <section style="text-indent: 2em; line-height: 1.8em;">
                            <?php echo $_smarty_tpl->tpl_vars['article']->value->briefIntro;?>

                        </section>
                        <hr>
                        <article style="text-indent: 2em; line-height: 1.8em;">
                            <?php echo $_smarty_tpl->tpl_vars['article']->value->intro;?>

                        </article>
                    </div>
            </div>
        </div>
    </div>

    <div class="container mt20">
        <div class="container">
        <div class="row">
            <?php
$__section_item_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_item']) ? $_smarty_tpl->tpl_vars['__smarty_section_item'] : false;
$__section_item_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['relative_articles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_item_0_total = $__section_item_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_item'] = new Smarty_Variable(array());
if ($__section_item_0_total != 0) {
for ($__section_item_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] = 0; $__section_item_0_iteration <= $__section_item_0_total; $__section_item_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']++){
?>
            <div class="col-lg3 col-sm-6 col-md-3">
                 <div class="thumbnail">
                    <a href="article.php?Id=<?php echo $_smarty_tpl->tpl_vars['relative_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]->Id;?>
" style="text-decoration: none;">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['relative_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]->coverImg;?>
" alt="缩略图"/>
                        <div class="caption">
                            <h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['relative_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]->title,12);?>
</h3>
                            <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['relative_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]->briefIntro,66);?>
</p>
                        </div>
                    </a>
                 </div>
            </div>  
            <?php
}
}
if ($__section_item_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_item'] = $__section_item_0_saved;
}
?>
        </div>
    </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="modal fade" id="qrcode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">微信扫码分享到朋友圈</h4>
                </div>
                <div class="modal-body" id="kd_qrcode" style="margin:0 atuo;"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/jquery.qrcode.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/toast.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        // 
        $("#kd_qrcode").qrcode({text:location.href,render:"table"});
        function judge(rate){
            document.getElementById("video").playbackRate = rate;
            showMessage("当前播放速率调整为:"+rate);
        }
        // 
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
