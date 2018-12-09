<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:03:27
         compiled from "/Applications/MAMP/htdocs/shopware/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/php.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14125299495c0d20aff1a8b4-69467749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f00e596c3b38f3d1babba0dcc7d92f7811f9fdc' => 
    array (
      0 => '/Applications/MAMP/htdocs/shopware/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/php.tpl',
      1 => 1544364064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14125299495c0d20aff1a8b4-69467749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sProfiler' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d20aff3d807_45993770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d20aff3d807_45993770')) {function content_5c0d20aff3d807_45993770($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_convertMemory')) include '/Applications/MAMP/htdocs/shopware/custom/plugins/FroshProfiler/Resources/smarty/modifier.convertMemory.php';
?><div class="sf-toolbar-block sf-toolbar-block-time sf-toolbar-status-normal">
    <a>
        <div class="sf-toolbar-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path fill="#AAAAAA" d="M6,18.9V15h12v3.9c0,0.7-0.2,1.1-1,1.1H7C6.2,20,6,19.6,6,18.9z M20,1C20,1,20,1,20,1c-0.6,0-1,0.5-1,1.1
    l0,18c0,0.5-0.4,0.9-0.9,0.9H5.9C5.4,21,5,20.6,5,20.1l0-18C5,1.5,4.6,1,4,1c0,0,0,0,0,0C3.5,1,3,1.5,3,2.1l0,18
    C3,21.7,4.3,23,5.9,23h12.2c1.6,0,2.9-1.3,2.9-2.9l0-18C21,1.5,20.6,1,20,1z M18,9H6v5h12V9z"/>
</svg>
            <span class="sf-toolbar-value"><?php echo smarty_modifier_convertMemory($_smarty_tpl->tpl_vars['sProfiler']->value['php']['used_memory']);?>
</span>
        </div>
    </a>
    <div class="sf-toolbar-info">
        <div class="sf-toolbar-info-piece">
            <b>Peak memory usage</b>
            <span><?php echo smarty_modifier_convertMemory($_smarty_tpl->tpl_vars['sProfiler']->value['php']['used_memory']);?>
</span>
        </div>

        <div class="sf-toolbar-info-piece">
            <b>PHP memory limit</b>
            <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['php']['memory_limit'];?>
B</span>
        </div>
    </div>
</div>
<?php }} ?>