<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:42
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/application/Shopware.model.DataOperation.js" */ ?>
<?php /*%%SmartyHeaderCode:17209107255c0d217223cc36-82905687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9197d59f06d9a0721bb34a4885fe01f169dbb5a0' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/application/Shopware.model.DataOperation.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17209107255c0d217223cc36-82905687',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2172254d59_88846255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2172254d59_88846255')) {function content_5c0d2172254d59_88846255($_smarty_tpl) {?>
//
//

Ext.define('Shopware.model.DataOperation', {

    extend:'Ext.data.Model',

    phantom: true,

    fields:[
        { name: 'success', type: 'boolean' },
        { name: 'request' },
        { name: 'error', type: 'string' },
        { name: 'operation' },
    ]
});
//
<?php }} ?>