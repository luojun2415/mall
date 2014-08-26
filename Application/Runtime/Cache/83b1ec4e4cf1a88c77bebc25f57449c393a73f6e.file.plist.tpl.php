<?php /* Smarty version Smarty-3.1.6, created on 2014-08-26 08:42:34
         compiled from "res/template\default\widget\plist\plist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1375153fb32cc257c57-67642348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b1ec4e4cf1a88c77bebc25f57449c393a73f6e' => 
    array (
      0 => 'res/template\\default\\widget\\plist\\plist.tpl',
      1 => 1409013726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1375153fb32cc257c57-67642348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fb32cc3c4ba',
  'variables' => 
  array (
    'data' => 0,
    'product' => 0,
    'tagName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fb32cc3c4ba')) {function content_53fb32cc3c4ba($_smarty_tpl) {?><ul>
	<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&count($_smarty_tpl->tpl_vars['data']->value)>0){?>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<li>
			<div class="list_cn por_relative">
				<u><a href='<?php echo $_smarty_tpl->tpl_vars['product']->value->ProductUrl;?>
' target="_blank"><?php echo $_smarty_tpl->tpl_vars['product']->value->ProductName;?>
</a></u>
				<div class="list_pic">
					<a href='<?php echo $_smarty_tpl->tpl_vars['product']->value->ProductUrl;?>
' target="_blank">
						<img src='<?php echo $_smarty_tpl->tpl_vars['product']->value->ThumbnailUrl;?>
'/>
					</a>
				</div>
				<div class="list_text">
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value->MinAttributeValue,$_smarty_tpl->tpl_vars['product']->value->MaxAttributeValue)){?> 
					<p>面值：
						<?php if ($_smarty_tpl->tpl_vars['product']->value->MinAttributeValue==$_smarty_tpl->tpl_vars['product']->value->MaxAttributeValue){?>
							<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MaxAttributeValue);?>

						<?php }else{ ?>
							<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MinAttributeValue);?>
 - <?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MaxAttributeValue);?>
	
						<?php }?>
					</p>
					<p class="orange text_v">积分：￥
						<?php if ($_smarty_tpl->tpl_vars['product']->value->MinXFPrice==$_smarty_tpl->tpl_vars['product']->value->MaxXFPrice){?>
							<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MaxXFPrice);?>

						<?php }else{ ?>
							<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MinXFPrice);?>
 - <?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MaxXFPrice);?>
	
						<?php }?>
					</p>
					<?php }?>
				</div>
				
			</div>
		</li>
		<?php } ?>
	<?php }?>
</ul>
<div id='tName' style='display:none'><?php echo $_smarty_tpl->tpl_vars['tagName']->value;?>
</div>	<?php }} ?>