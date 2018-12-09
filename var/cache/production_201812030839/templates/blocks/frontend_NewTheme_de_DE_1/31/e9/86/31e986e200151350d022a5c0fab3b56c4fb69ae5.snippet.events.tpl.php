<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:03:28
         compiled from "/Applications/MAMP/htdocs/shopware/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15667557245c0d20b006b9d0-12573001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e986e200151350d022a5c0fab3b56c4fb69ae5' => 
    array (
      0 => '/Applications/MAMP/htdocs/shopware/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/events.tpl',
      1 => 1544364064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15667557245c0d20b006b9d0-12573001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sProfilerID' => 0,
    'sProfiler' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d20b007e859_86189389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d20b007e859_86189389')) {function content_5c0d20b007e859_86189389($_smarty_tpl) {?><div class="sf-toolbar-block sf-toolbar-block-db sf-toolbar-status-normal">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, 'panel' => 'events', ))); ?>">
        <div class="sf-toolbar-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path fill="#AAAAAA" d="M19.2,20.8c0.4,0.7,0.1,1.6-0.6,2c-0.2,0.1-0.5,0.2-0.7,0.2c-0.5,0-1-0.3-1.3-0.8l-3.7-6.7
    c-0.3,0.1-0.7,0.1-1,0.1c-0.3,0-0.6,0-0.9-0.1l-3.7,6.7C6.9,22.7,6.4,23,5.8,23c-0.2,0-0.5-0.1-0.7-0.2c-0.7-0.4-1-1.3-0.6-2
    l3.8-6.9c-0.5-0.7-0.9-1.6-0.9-2.6C7.5,8.9,9.4,7,11.8,7s4.3,1.9,4.3,4.3c0,0.9-0.3,1.8-0.8,2.5L19.2,20.8z M5.2,11
    C5.2,11,5.2,11,5.2,11c0.6,0,1-0.3,1-0.8c0-2.1,1.6-3.8,3.7-4.1c0.5-0.1,0.9-0.6,0.8-1.2C10.6,4.4,10.1,4,9.6,4
    c-3.1,0.5-5.3,3-5.3,6.1C4.2,10.7,4.7,11,5.2,11z M13.6,6c2.1,0.3,3.7,2.1,3.8,4.2c0,0.5,0.5,0.8,1,0.8c0,0,0,0,0,0
    c0.6,0,1-0.3,1-0.8c0-3.1-2.4-5.6-5.5-6.1c-0.5-0.1-1.1,0.3-1.1,0.8C12.6,5.5,13,5.9,13.6,6z M9,3c0.5-0.1,0.9-0.6,0.8-1.1
    C9.7,1.3,9.2,1,8.7,1.1C4.5,1.8,1.4,5.5,1.3,9.8c0,0.6,0.4,1.2,1,1.2c0,0,0,0,0,0c0.5,0,1-0.6,1-1.2C3.3,6.5,5.7,3.5,9,3z M14.7,1
    c-0.5-0.1-1.1,0.3-1.1,0.9S13.9,3,14.4,3c3.3,0.5,5.8,3.4,5.8,6.8c0,0.5,0.5,1.2,1,1.2c0,0,0,0,0,0c0.6,0,1-0.7,1-1.2
    C22.2,5.5,19,1.6,14.7,1z"/>
</svg>

            <span class="sf-toolbar-value">Events</span>
        </div>
    </a>
    <div class="sf-toolbar-info">
        <div class="sf-toolbar-info-piece">
            <b>registered events</b>
            <span class="sf-toolbar-status"><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['events']['eventAmount'];?>
</span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>called events</b>
            <span class="sf-toolbar-status"><?php echo count($_smarty_tpl->tpl_vars['sProfiler']->value['events']['calledEvents']);?>
</span>
        </div>
    </div>
</div><?php }} ?>