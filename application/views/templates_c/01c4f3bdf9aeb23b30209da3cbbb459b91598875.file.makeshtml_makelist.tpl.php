<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 18:38:45
         compiled from "application/views/templates/makeshtml_makelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41623004355522fea0b0295-79973456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01c4f3bdf9aeb23b30209da3cbbb459b91598875' => 
    array (
      0 => 'application/views/templates/makeshtml_makelist.tpl',
      1 => 1431513523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41623004355522fea0b0295-79973456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55522fea148834_78235220',
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'makelist' => 0,
    'i' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55522fea148834_78235220')) {function content_55522fea148834_78235220($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-search" style="padding-left:20px"></i>
						<h3>生成操作</h3>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
makeshtml/makeaction?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" method="post">
							<div class="control-group">
								页面 &nbsp;&nbsp;
						  		<select class="input-large focused" name="makename">
									<option value="">请选择待生成的页面</option>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['makelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['action'];?>
,<?php echo $_smarty_tpl->tpl_vars['i']->value['filename'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
 -- (方法名 : <?php echo $_smarty_tpl->tpl_vars['i']->value['action'];?>
) -- (文件名 : <?php echo $_smarty_tpl->tpl_vars['i']->value['filename'];?>
)</option>
									<?php } ?>
						  		</select> 
						  		&nbsp;&nbsp;  
								<input name="submit" type="submit" value="生成" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>页面列表</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
article/articlelist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">返回列表</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>文件名</th>
									<th>URL</th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<tr>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['filename'];?>
</td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
</a><?php }else{ ?>无<?php }?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<!--<?php echo $_smarty_tpl->getSubTemplate ("page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
-->
			</div>
		</div>
	</div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>