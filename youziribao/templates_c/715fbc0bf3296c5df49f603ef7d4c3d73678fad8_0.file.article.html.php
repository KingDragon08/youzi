<?php
/* Smarty version 3.1.30, created on 2017-09-06 05:05:16
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/youziribao/templates/article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59af65ec8be0e9_16127051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '715fbc0bf3296c5df49f603ef7d4c3d73678fad8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/youziribao/templates/article.html',
      1 => 1504667115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../nav2.html' => 1,
    'file:../../footer.html' => 1,
  ),
),false)) {
function content_59af65ec8be0e9_16127051 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>优字日报</title>
    <style type="text/css">
        /**/
        .h10{height:10px;}
        #kd_qrcode table{margin:0 auto;}
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
                    <li><a href="index.php">优字日报</a></li>
                    <li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container mt20">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12" style="background-color: #fff; padding-bottom: 20px; margin-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                        <h3><?php echo $_smarty_tpl->tpl_vars['article']->value->title;?>
</h3>
                        <div class="h10"></div>
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
                        <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value->coverImg;?>
">
                        <div class="h10"></div>
                        <section style="text-indent: 2em; line-height: 1.8em;">
                            <?php echo $_smarty_tpl->tpl_vars['article']->value->briefIntro;?>

                        </section>
                        <hr>
                        <article style="text-indent: 2em; line-height: 1.8em;">
                            <?php echo $_smarty_tpl->tpl_vars['article']->value->content;?>

                        </article>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 hidden-sm hidden-xs">
                    <ul class="list-group">
                        <li class="list-group-item active">相关文章</li>
                        <?php
$__section_item_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_item']) ? $_smarty_tpl->tpl_vars['__smarty_section_item'] : false;
$__section_item_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['relative_articles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_item_0_total = $__section_item_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_item'] = new Smarty_Variable(array());
if ($__section_item_0_total != 0) {
for ($__section_item_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] = 0; $__section_item_0_iteration <= $__section_item_0_total; $__section_item_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']++){
?>
                        <a href="?Id=<?php echo $_smarty_tpl->tpl_vars['relative_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]->Id;?>
" class="list-group-item" style="overflow-y: auto; padding-left:5px;">
                            <div style="float:left; width: 80px; margin-right: 10px;">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['relative_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]->coverImg;?>
" width="80">
                            </div>
                            <div style="float: left; width: calc(100% - 90px);">
                                <h4 class="list-group-item-heading">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['relative_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]->title,14);?>

                                </h4>
                                <p class="list-group-item-text">
                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['relative_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]->briefIntro,34);?>

                                </p>
                            </div>
                        </a>
                        <?php
}
}
if ($__section_item_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_item'] = $__section_item_0_saved;
}
?>
                    </ul>
                </div>
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
 type="text/javascript">
        // 
        $("#kd_qrcode").qrcode({text:location.href,render:"table"});
        // 
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
