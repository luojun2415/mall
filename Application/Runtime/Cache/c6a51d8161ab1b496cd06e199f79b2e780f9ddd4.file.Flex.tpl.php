<?php /* Smarty version Smarty-3.1.6, created on 2014-08-27 09:05:19
         compiled from "res/template\default\page\Api\Product\Flex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2538153fbe3b5dc1947-67856304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a51d8161ab1b496cd06e199f79b2e780f9ddd4' => 
    array (
      0 => 'res/template\\default\\page\\Api\\Product\\Flex.tpl',
      1 => 1409101418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2538153fbe3b5dc1947-67856304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fbe3b5e0e9d',
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fbe3b5e0e9d')) {function content_53fbe3b5e0e9d($_smarty_tpl) {?><?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("default:widget/plist/plist.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['products']->value), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."default:widget/plist/plist.tpl".'"', E_USER_ERROR);}FISResource::load("default:widget/plist/plist.tpl", $_smarty_tpl->smarty);?><?php }} ?>