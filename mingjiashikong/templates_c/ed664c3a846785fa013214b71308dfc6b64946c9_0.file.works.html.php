<?php
/* Smarty version 3.1.30, created on 2017-09-07 09:53:52
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/mingjiashikong/templates/works.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b0fb103d1da9_60483388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed664c3a846785fa013214b71308dfc6b64946c9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/mingjiashikong/templates/works.html',
      1 => 1504770827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../nav2.html' => 1,
    'file:../../footer.html' => 1,
  ),
),false)) {
function content_59b0fb103d1da9_60483388 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li><a href="master.php?Id=<?php echo $_smarty_tpl->tpl_vars['master']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['master']->value->name;?>
</a></li>
                    <li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['works']->value->name;?>
</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="category-post-section mb20">
        <div class="container" style="background: #fff; padding-bottom: 20px; padding-top:20px; text-align: center;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['works']->value->worksImg;?>
" style="width: 100%;" />
            <h4>作品简介</h4>
            <article style="line-height: 1.8em; word-break: break-all; text-align: left;">
                <?php echo $_smarty_tpl->tpl_vars['works']->value->intro;?>

            </article>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['master']->value->coverImg;?>
"/>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <article style="line-height: 1.8em; text-align: left;">
                        <?php echo $_smarty_tpl->tpl_vars['master']->value->intro;?>

                    </article>
                </div>
            </div>

        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
