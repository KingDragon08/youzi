<?php
/* Smarty version 3.1.30, created on 2017-09-08 10:49:09
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/cepingandgerenzhongxin/templates/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b259851e0713_95680985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6984e71f561821829a8bf298eb8b36c335cc3edf' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/cepingandgerenzhongxin/templates/login.html',
      1 => 1504860546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../nav2.html' => 1,
    'file:../../footer.html' => 1,
  ),
),false)) {
function content_59b259851e0713_95680985 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="css/ceping.css">
    <title>测评与个人中心－登录</title>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../../nav2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="icp" style="background:#fff;">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="../index.php">首页</a></li>
                    <li><a href="javascript:;">测评与个人中心</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="category-post-section" style="background: #fff; padding-bottom: 30px;">
        <div class="container">
            <form action="" method="post" onsubmit="return check();">
                <div>
                    <div class="input_group_div">
                      <i class="glyphicon glyphicon-user f20 gray">&nbsp;</i>
                      <input type="tel" name="name" class="input" id="f_username" placeholder="请输入你的手机号" maxlength="20">
                    </div>
                    <div class="input_group_div">
                      <i class="glyphicon glyphicon-lock f20 gray">&nbsp;</i>
                      <input type="password" name="password" class="input" id="f_new_password" placeholder="请输入密码" maxlength="20">
                    </div>
                    <input type="submit" name="f_submit" id="f_submit" class="btn btn-primary lear_more" value="立即登录" style="width:350px; height:40px; display: block; margin: 0 auto;">
                </div>
            </form>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/toast.min.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['error']->value == 1) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        
        $("body").toast({
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "background":"#d9534f",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut",
          "position":"absolute",
          "top":"10%",
          "content":"登录失败,请检查账号和密码是否正确",
        });

        function check(){
            // return false;
        }

        
    <?php echo '</script'; ?>
>
    <?php }?>
</body>

</html><?php }
}
