<?php /* Smarty version Smarty-3.1.6, created on 2014-08-26 19:50:54
         compiled from "res/template\default\page\Api\City\Choose.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1388253fc69b1b55781-61849710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0862a56f8c5500359efca392d798f49625ba8b7f' => 
    array (
      0 => 'res/template\\default\\page\\Api\\City\\Choose.tpl',
      1 => 1409053848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388253fc69b1b55781-61849710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fc69b1c7139',
  'variables' => 
  array (
    'areaName' => 0,
    'cities' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fc69b1c7139')) {function content_53fc69b1c7139($_smarty_tpl) {?><div class="mt pop_city"><strong>选择您所在的换卡城市：</strong><span>您在  [ <b id="defCity"><?php echo $_smarty_tpl->tpl_vars['areaName']->value;?>
</b> ]</span><i id="closeButton" onclick="closeChangeSub()"></i> 
          </div>
          <div class="city_list">
<ul>
<li>
<h4>热门</h4>
			<div class="hotcity">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cities']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
				<a  href="javascript:void(0)"  data-id="<?php echo $_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->Name;?>
</a>			
			<?php endfor; endif; ?>
			</div>
</li>

</ul>
</div><?php }} ?>