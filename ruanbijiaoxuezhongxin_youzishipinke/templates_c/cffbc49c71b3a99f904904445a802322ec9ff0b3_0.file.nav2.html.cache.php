<?php
/* Smarty version 3.1.30, created on 2017-08-27 23:35:25
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/nav2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a33b1d6732b1_95315400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cffbc49c71b3a99f904904445a802322ec9ff0b3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/nav2.html',
      1 => 1503868175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a33b1d6732b1_95315400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '92771698159a33b1d638e42_03465587';
?>
<div class="nav hidden-md hidden-sm hidden-xs" style="position:relative;">
  <div class="logo">LOGO</div>
  <ul>
    <li>
      <a href="../index.php">首页</a>
    </li>
    <li>
      <a href="../youziribao/" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'youziribao') {?>class="active"<?php }?>>优字日报</a>
    </li>
    <li>
      <a href="../yingbijiaoxuezhongxin/" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'yingbijiaoxuezhongxin') {?>class="active"<?php }?>>硬笔教学中心</a>
    </li>
    <li>
      <a href="../ruanbijiaoxuezhongxin/" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ruanbijiaoxuezhongxin') {?>class="active"<?php }?>>软笔教学中心</a>
    </li>
    <li>
      <a href="../cepingandgerenzhongxin" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'cepingandgerenzhongxin') {?>class="active"<?php }?>>测评与个人中心</a>
    </li>
    <li>
      <a href="../youzirike" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'youzirike') {?>class="active"<?php }?>>优字日课</a>
    </li>
    <li>
      <a href="../mingjiashikong" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'mingjiashikong') {?>class="active"<?php }?>>名家时空</a>
    </li>
    <li>
      <a href="../shufabaodian" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'shufabaodian') {?>class="active"<?php }?>>书法宝典</a>
    </li>
    <li>
      <a href="../kunfenyumishequ" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'kunfenyumishequ') {?>class="active"<?php }?>>昆粉玉米社区</a>
    </li>
  </ul>
</div>
<?php }
}
