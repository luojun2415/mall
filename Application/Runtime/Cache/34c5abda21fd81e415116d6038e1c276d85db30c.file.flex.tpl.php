<?php /* Smarty version Smarty-3.1.6, created on 2014-08-25 20:57:48
         compiled from "res/template\default\page\product\flex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2168653fb32cc1f8051-81350757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34c5abda21fd81e415116d6038e1c276d85db30c' => 
    array (
      0 => 'res/template\\default\\page\\product\\flex.tpl',
      1 => 1408934628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2168653fb32cc1f8051-81350757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fb32cc23ea1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fb32cc23ea1')) {function content_53fb32cc23ea1($_smarty_tpl) {?><?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("default:widget/plist/plist.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['products']->value), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."default:widget/plist/plist.tpl".'"', E_USER_ERROR);}FISResource::load("default:widget/plist/plist.tpl", $_smarty_tpl->smarty);?><?php }} ?>