<?php /* Smarty version Smarty-3.1.6, created on 2014-08-26 08:41:02
         compiled from "res/template\common\widget\http\http.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175553fb235c3a1b21-24863912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4863583cc4c1777c84b294504ef7ed14064c384a' => 
    array (
      0 => 'res/template\\common\\widget\\http\\http.tpl',
      1 => 1409013656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175553fb235c3a1b21-24863912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fb235c3be08',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fb235c3be08')) {function content_53fb235c3be08($_smarty_tpl) {?><?php ob_start(); ?>
	require.async('common:widget/http/http.js', function(http) {
		http.init('<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
');
	});
<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::addScriptPool($script);}?>
	<?php }} ?>