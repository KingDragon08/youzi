<?php
/* Smarty version 3.1.30, created on 2017-09-07 09:53:14
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/mingjiashikong/templates/master.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b0faea39a721_67145821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993d81e293e3ef075449d74ce0449f32002ddcd4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/mingjiashikong/templates/master.html',
      1 => 1504770393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../nav2.html' => 1,
    'file:../../footer.html' => 1,
  ),
),false)) {
function content_59b0faea39a721_67145821 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>名家时空</title>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../../nav2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="icp" style="background:#fff;">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="../index.php">首页</a></li>
                    <li><a href="index.php">名家时空</a></li>
                    <li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['master']->value->name;?>
</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="category-post-section mb20">
        <div class="container" style="background: #fff; padding-bottom: 20px; padding-top:20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['master']->value->introImg;?>
">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <article style="line-height: 1.8em;">
                                <?php echo $_smarty_tpl->tpl_vars['master']->value->intro;?>

                            </article>
                        </div>
                    </div>
                    <div class="row mt20">
                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['works']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <div class="col-lg4 col-sm-6 col-md-4">
                             <div class="thumbnail">
                                <a href="works.php?Id=<?php echo $_smarty_tpl->tpl_vars['works']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->Id;?>
" style="text-decoration: none;">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['works']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->coverImg;?>
" alt="缩略图"/>
                                    <div class="caption">
                                        <h3 style="word-break: break-all;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['works']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->name,12);?>
</h3>
                                        <p style="word-break: break-all;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['works']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->intro,66);?>
</p>
                                    </div>
                                </a>
                             </div>
                        </div>  
                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <ul class="list-group">
                        <li class="list-group-item active">书法名家</li>
                        <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['relative_masters']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <a href="?Id=<?php echo $_smarty_tpl->tpl_vars['relative_masters']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->Id;?>
" class="list-group-item" style="overflow-y: auto; padding-left:5px;">
                            <div style="float:left; width: 80px; margin-right: 10px;">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['relative_masters']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->coverImg;?>
" width="80">
                            </div>
                            <div style="float: left; width: calc(100% - 90px);">
                                <h4 class="list-group-item-heading">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['relative_masters']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->name,14);?>

                                </h4>
                                <p class="list-group-item-text">
                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['relative_masters']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->intro,34);?>

                                </p>
                            </div>
                        </a>
                        <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
