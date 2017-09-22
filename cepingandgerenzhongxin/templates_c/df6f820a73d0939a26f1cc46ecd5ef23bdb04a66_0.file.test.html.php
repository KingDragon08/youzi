<?php
/* Smarty version 3.1.30, created on 2017-09-08 14:21:55
  from "/Applications/XAMPP/xamppfiles/htdocs/youzi/cepingandgerenzhongxin/templates/test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b28b63ef7841_26393324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6f820a73d0939a26f1cc46ecd5ef23bdb04a66' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/youzi/cepingandgerenzhongxin/templates/test.html',
      1 => 1504873314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b28b63ef7841_26393324 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
	body,html{
	    padding: 0;
	    margin: 0;
	    font-size: 14px;
	    color: #000000;
	}
	table{
	    border-collapse: collapse;
	    width: 100%;
	    table-layout: fixed;
	}
	thead{
	    background: #3d444c;
	    color: #ffffff;
	}
	td,th{
	    border: 1px solid #e1e1e1;
	    padding: 0;
	    height: 30px;
	    line-height: 30px;
	    text-align: center;
	}
	</style>
</head>
<body>
	<table id="jsTrolley">
	    <thead><tr><th>名称</th><th>价格</th><th>操作</th></tr></thead>
	    <tbody>
	        <tr><td>产品1</td><td>10.00</td><td><a href="javascript:void(0);">删除</a></td></tr>
	        <tr><td>产品2</td><td>30.20</td><td><a href="javascript:void(0);">删除</a></td></tr>
	        <tr><td>产品3</td><td>20.50</td><td><a href="javascript:void(0);">删除</a></td></tr>
	    </tbody>
	    <tfoot><tr><th>总计</th><td colspan="2">60.70(3件商品)</td></tr></tfoot>
	</table>
	<?php echo '<script'; ?>
 type="text/javascript">
	function add(items) {
		var tbody = document.getElementsByTagName("tbody")[0];
		var sum = 0;
		var trs = tbody.getElementsByTagName("tr");
		for(var i=0; i<trs.length; i++){
			sum += parseFloat(trs[i].getElementsByTagName("td")[1].innerHTML);
		}
		for(var i=0; i<items.length; i++){
			var item = items[i];
			var tr = document.createElement("tr");
			var s = "<td>"+item.name+"</td><td>"+item.price.toFixed(2)+"</td><td><a href=\"javascript:void(0);\">删除</a></td>";
			tr.innerHTML = s;
			tbody.append(tr);
			sum += item.price;
		}
		var tfoot = document.getElementsByTagName("tfoot")[0];
		tfoot.getElementsByTagName("td")[0].innerHTML = sum.toFixed(2)+"("+tbody.getElementsByTagName("tr").length+"件商品)";
		bind();
	}

	function bind() {
	    var a = document.getElementsByTagName("a");
	    for(var i=0; i<a.length; i++){
	    	a[i].onclick = function(){
	    		this.parentNode.parentNode.remove();
	    		re_render();
	    	}
	    }
	}

	function re_render(){
		var tbody = document.getElementsByTagName("tbody")[0];
		var sum = 0;
		var trs = tbody.getElementsByTagName("tr");
		for(var i=0; i<trs.length; i++){
			sum += parseFloat(trs[i].getElementsByTagName("td")[1].innerHTML);
		}
		var tfoot = document.getElementsByTagName("tfoot")[0];
		tfoot.getElementsByTagName("td")[0].innerHTML = sum.toFixed(2)+"("+trs.length+"件商品)";
	}
	<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
