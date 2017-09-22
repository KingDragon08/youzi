<?php
/* Smarty version 3.1.30, created on 2017-09-08 05:00:02
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/kunfenyumishequ/templates/type.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b207b2855029_38623745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afbbf65f0577a1904a1044c3ff849a6da5533cf0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/kunfenyumishequ/templates/type.html',
      1 => 1504839594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../nav2.html' => 1,
    'file:../../footer.html' => 1,
  ),
),false)) {
function content_59b207b2855029_38623745 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>昆粉玉米社区</title>
    <style type="text/css">
        /**/
        .icon{width: 100px; height: 100px; float: left; margin-right: 15px;
            background-repeat: no-repeat; background-position: center center;
            background-size: cover; text-align: center; font-size: 14px;
            display: block; cursor: pointer;
        }
        a.icon{text-decoration: none;}
        .content{width: calc(100% - 115px); height: 100px; float: left; display: block;}
        a.content{text-decoration: none; color:#333;}
        .list-group-item:hover{cursor: pointer; background: #f2f2f2;}
        i.glyphicon{cursor: pointer;}
        /**/
    </style>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../../nav2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="icp" style="background:#fff;">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-7">
                    <ol class="breadcrumb">
                        <li><a href="../index.php">首页</a></li>
                        <li><a href="index.php">昆粉玉米社区</a></li>
                        <li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['typeName']->value;?>
</a></li>
                    </ol>
                </div>
                <div class="col-lg-3">
                    <form name="s" method="get" action="search.php" id="s">
                        <div class="input-group" style="margin-top: 21px;">
                                <input type="text" class="form-control" name="keyword" placeholder="输入关键字检索">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-search" onclick="check()"></i>
                                </span>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1" style="margin-top: 21px;">
                    <div class="btn btn-info">
                        <i class="glyphicon glyphicon-edit"></i>
                        发布新帖
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="list-group mt20">
              
              <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['topics']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
              <div class="list-group-item mb10" style="height: 150px;">
                <a class="icon" href="../user/zone.php?Id=<?php echo $_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->userId;?>
">
                    <div style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->avatar;?>
)" class="icon">&nbsp;</div>
                    <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->nickName,14);?>
</p>
                </a>
                <div class="content" onclick="location.href='topic.php?Id=<?php echo $_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->Id;?>
'">
                    <h4 class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->title;?>
</h4>
                    <p class="list-group-item-text">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->intro,220);?>

                    </p>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->isZhiding == 1) {?>
                        <span class="label label-danger">置顶</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->isJinghua == 1) {?>
                        <span class="label label-danger">精华</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->isXianxiahuodong == 1) {?>
                        <span class="label label-danger">线下活动</span>
                        <?php }?>
                        <span>
                            <a class="label label-info" href="type.php?Id=<?php echo $_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->typeId;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->typeName;?>

                            </a>
                        </span>
                    </p>
                    <p>
                        <span class="label label-primary">
                            发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->createTime,'%Y-%m-%d');?>

                        </span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="label label-primary">
                            最后回复时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->lastReplyTime,'%Y-%m-%d');?>

                        </span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="label label-primary">
                            总回复数：<?php echo $_smarty_tpl->tpl_vars['topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->totalReply;?>

                        </span>
                    </p>
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
 type="text/javascript">
function check(){
    var keyword = $("input.form-control").val();
    if(keyword.length>0){
        $("#s").submit();
    }
}
<?php echo '</script'; ?>
>
</html><?php }
}
