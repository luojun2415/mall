<?php /* Smarty version Smarty-3.1.6, created on 2014-08-26 08:49:43
         compiled from "res/template\default\page\Product\Flex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:774053fbd9a7c97433-60389503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43c00bc82db1f581ef711036e3fa82526ec5df75' => 
    array (
      0 => 'res/template\\default\\page\\Product\\Flex.tpl',
      1 => 1409013658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '774053fbd9a7c97433-60389503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fbd9a7d30fc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fbd9a7d30fc')) {function content_53fbd9a7d30fc($_smarty_tpl) {?><?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("default:widget/plist/plist.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['products']->value), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."default:widget/plist/plist.tpl".'"', E_USER_ERROR);}FISResource::load("default:widget/plist/plist.tpl", $_smarty_tpl->smarty);?><?php }} ?>