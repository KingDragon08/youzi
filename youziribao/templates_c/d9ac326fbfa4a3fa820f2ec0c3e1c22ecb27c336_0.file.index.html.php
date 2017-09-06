<?php
/* Smarty version 3.1.30, created on 2017-09-06 06:40:44
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/youziribao/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59af7c4c7028d5_21892357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9ac326fbfa4a3fa820f2ec0c3e1c22ecb27c336' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/youziribao/templates/index.html',
      1 => 1504672834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../nav2.html' => 1,
    'file:../../footer.html' => 1,
  ),
),false)) {
function content_59af7c4c7028d5_21892357 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Applications/XAMPP/xamppfiles/htdocs/youzi/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/Applications/XAMPP/xamppfiles/htdocs/youzi/smarty/libs/plugins/modifier.date_format.php';
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
    <?php $_smarty_tpl->_subTemplateRender("file:../../nav2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                                        <div class="qrcode" data-url="article.php?Id=<?php echo $_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->Id;?>
"></div>
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
                                <a href="article.php?Id=<?php echo $_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->Id;?>
" class="block-title">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->title,20);?>

                                </a>
                                <p class="time">
                                    <i class="fa fa-clock-o"></i>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->createTime,'%Y-%m-%d');?>

                                </p>
                                <p>
                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]->briefIntro,50);?>

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
        <li style="display:inline-block;"><a href="?page=1">&laquo;</a></li>
        <?php
$__section_page_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_page']) ? $_smarty_tpl->tpl_vars['__smarty_section_page'] : false;
$__section_page_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page_list']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_page_1_total = $__section_page_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_page'] = new Smarty_Variable(array());
if ($__section_page_1_total != 0) {
for ($__section_page_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] = 0; $__section_page_1_iteration <= $__section_page_1_total; $__section_page_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']++){
?>
        <?php if ($_smarty_tpl->tpl_vars['page_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)] == $_smarty_tpl->tpl_vars['current_page']->value) {?>
            <li class="active">
                <a href="?page=<?php echo $_smarty_tpl->tpl_vars['page_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['page_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)];?>
</a>
            </li>
        <?php } else { ?>
            <li>
                <a href="?page=<?php echo $_smarty_tpl->tpl_vars['page_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['page_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)];?>
</a>
            </li>
        <?php }?>
        
        <?php
}
}
if ($__section_page_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_page'] = $__section_page_1_saved;
}
?>
        <li><a href="?page=<?php echo count($_smarty_tpl->tpl_vars['page_list']->value);?>
">&raquo;</a></li>
    </ul>

    <?php $_smarty_tpl->_subTemplateRender("file:../../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/jquery.qrcode.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $().ready(function(){
        var base_url = location.href;
        $(".qrcode").each(function(){
            var url = base_url + $(this).attr("data-url");
            // 
            $(this).qrcode({text:url,render:"table"});
            // 
        });
    });
<?php echo '</script'; ?>
>




</html><?php }
}
