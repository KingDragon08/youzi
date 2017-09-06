<?php
/* Smarty version 3.1.30, created on 2017-09-05 11:08:58
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/youziribao/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ae69aa84fa44_81293948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9ac326fbfa4a3fa820f2ec0c3e1c22ecb27c336' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/youziribao/templates/index.html',
      1 => 1504602517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../nav2.html' => 1,
    'file:../../footer.html' => 1,
  ),
),false)) {
function content_59ae69aa84fa44_81293948 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Applications/XAMPP/xamppfiles/htdocs/youzi/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/Applications/XAMPP/xamppfiles/htdocs/youzi/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '165155027159ae69aa7f37a5_88214775';
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
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../../nav2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="icp" style="background:#fff;">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="../index.php">首页</a></li>
                    <li><a href="javascript:;">优字日报</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="category-post-section">
        <div class="container">
            <div class="row">

            <?php
$__section_article_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_article']) ? $_smarty_tpl->tpl_vars['__smarty_section_article'] : false;
$__section_article_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['articles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_article_0_total = $__section_article_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_article'] = new Smarty_Variable(array());
if ($__section_article_0_total != 0) {
for ($__section_article_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] = 0; $__section_article_0_iteration <= $__section_article_0_total; $__section_article_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']++){
?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="post-box">
                        <div class="image-box">
                            <img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->coverImg)===null||$tmp==='' ? 'http://via.placeholder.com/370x292?text=image' : $tmp);?>
" alt="image">
                            <a href="#" class="add-sign-big color-navy-blue">
                            <img src="images/big-plus.png" alt="big-plus"/>
                        </a>
                        </div>
                        <ul class="comments-social">
                            <li class="dropdown">
                                <a href="#">
                                    <img src="images/more-icon.png">
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <img src="images/qrcode.png">
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="post-box-inner">
                            <a href="article.php?Id=<?php echo $_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->Id;?>
" class="box-read-more">
                            <img src="images/arrow.png" alt="arrow"/> 
                            了解更多
                            </a>
                            <div class="box-content">
                                <span><?php echo $_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->tag;?>
</span>
                                <a href="#" class="block-title">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->title,30);?>

                            </a>
                                <p class="time">
                                    <i class="fa fa-clock-o"></i>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->createTime,'%Y-%m-%d');?>

                                </p>
                                <p>
                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->briefIntro,80);?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}
}
if ($__section_article_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_article'] = $__section_article_0_saved;
}
?>
                
                
            </div>
        </div>
    </div>

    <ul class="pagination" style="margin-bottom: 20px;">
        <li style="display:inline-block;"><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>

    <?php $_smarty_tpl->_subTemplateRender("file:../../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
