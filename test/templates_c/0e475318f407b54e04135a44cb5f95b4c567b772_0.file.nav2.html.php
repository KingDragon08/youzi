<?php
/* Smarty version 3.1.30, created on 2017-09-22 06:01:38
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/nav2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c48b22d8f210_74557627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e475318f407b54e04135a44cb5f95b4c567b772' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/nav2.html',
      1 => 1504592510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c48b22d8f210_74557627 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="sub">
        <ul>
          <li>
            <a href="../yingbijiaoxuezhongxin/">教学用书与视频</a>
          </li>
          <li>
            <a href="../yingbijiaoxuezhongxin_youzishipinke/">优字视频课</a>
          </li>
        </ul>
      </div>
    </li>
    <li>
      <a href="../ruanbijiaoxuezhongxin/" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ruanbijiaoxuezhongxin') {?>class="active"<?php }?>>软笔教学中心</a>
      <div class="sub">
        <ul>
          <li>
            <a href="../ruanbijiaoxuezhongxin/">教学用书与视频</a>
          </li>
          <li>
            <a href="../ruanbijiaoxuezhongxin_youzishipinke/">优字视频课</a>
          </li>
        </ul>
      </div>
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
      <div class="sub">
        <ul>
          <li>
            <a href="../shufabaodian/">书法常识</a>
          </li>
          <li>
            <a href="../shufabaodian_liniankaoti/">历年考题</a>
          </li>
          <li>
            <a href="../shufabaodian_mingjiajieshao/">名家介绍</a>
          </li>
        </ul>
      </div>
    </li>
    <li>
      <a href="../kunfenyumishequ" <?php if ($_smarty_tpl->tpl_vars['name']->value == 'kunfenyumishequ') {?>class="active"<?php }?>>昆粉玉米社区</a>
    </li>
  </ul>
</div>
<?php }
}
