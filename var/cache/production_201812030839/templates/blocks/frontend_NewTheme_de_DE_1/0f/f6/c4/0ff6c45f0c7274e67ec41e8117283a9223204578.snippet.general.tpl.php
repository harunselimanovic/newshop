<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:03:27
         compiled from "/Applications/MAMP/htdocs/shopware/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9115361455c0d20afebfcb5-42325166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ff6c45f0c7274e67ec41e8117283a9223204578' => 
    array (
      0 => '/Applications/MAMP/htdocs/shopware/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/general.tpl',
      1 => 1544364064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9115361455c0d20afebfcb5-42325166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sProfilerID' => 0,
    'sProfiler' => 0,
    'sProfilerTime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d20aff0bfe6_97310698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d20aff0bfe6_97310698')) {function content_5c0d20aff0bfe6_97310698($_smarty_tpl) {?><?php if (!is_callable('smarty_function_controllerName')) include '/Applications/MAMP/htdocs/shopware/engine/Library/Enlight/Template/Plugins/function.controllerName.php';
?><div class="sf-toolbar-block sf-toolbar-block-request sf-toolbar-status-normal">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, ))); ?>">
        <div class="sf-toolbar-icon"><span class="sf-toolbar-status <?php if ($_smarty_tpl->tpl_vars['sProfiler']->value['response']['httpResponse']==200){?>sf-toolbar-status-green<?php }else{ ?>sf-toolbar-status-red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['response']['httpResponse'];?>
</span>
            <span class="sf-toolbar-label">@</span>
            <span class="sf-toolbar-value sf-toolbar-info-piece-additional"><?php echo smarty_function_controllerName(array(),$_smarty_tpl);?>
</span>
        </div>
    </a>
    <div class="sf-toolbar-info">
        <div class="sf-toolbar-info-piece">
            <b>HTTP status</b>
            <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['response']['httpResponse'];?>
</span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Controller</b>
                <span>
                    Shopware_Controllers_<?php echo ucfirst($_smarty_tpl->tpl_vars['sProfiler']->value['request']['moduleName']);?>
_<?php echo ucfirst($_smarty_tpl->tpl_vars['sProfiler']->value['request']['controllerName']);?>
&nbsp;::&nbsp;<?php echo ucfirst($_smarty_tpl->tpl_vars['sProfiler']->value['request']['actionName']);?>

                </span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Controller class</b>
            <span>Shopware_Controllers_<?php echo ucfirst($_smarty_tpl->tpl_vars['sProfiler']->value['request']['moduleName']);?>
 _<?php echo ucfirst($_smarty_tpl->tpl_vars['sProfiler']->value['request']['controllerName']);?>
</span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Is logged in?</b>
            <span><?php if (!empty($_smarty_tpl->tpl_vars['sProfiler']->value['user']['loggedin'])){?>yes<?php }else{ ?>no<?php }?></span>
        </div>
    </div>
</div>
<div class="sf-toolbar-block sf-toolbar-block-time sf-toolbar-status-normal">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, 'panel' => 'time', ))); ?>">
        <div class="sf-toolbar-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path fill="#AAAAAA" d="M15.1,4.3c-2.1-0.5-4.2-0.5-6.2,0C8.6,4.3,8.2,4.1,8.2,3.8V3.4c0-1.2,1-2.3,2.3-2.3h3c1.2,0,2.3,1,2.3,2.3
    v0.3C15.8,4.1,15.4,4.3,15.1,4.3z M20.9,14c0,4.9-4,8.9-8.9,8.9s-8.9-4-8.9-8.9s4-8.9,8.9-8.9S20.9,9.1,20.9,14z M16.7,15
    c0-0.6-0.4-1-1-1H13V8.4c0-0.6-0.4-1-1-1s-1,0.4-1,1v6.2c0,0.6,0.4,1.3,1,1.3h3.7C16.2,16,16.7,15.6,16.7,15z"/>
</svg>


            <span class="sf-toolbar-value"><?php echo $_smarty_tpl->tpl_vars['sProfilerTime']->value;?>
</span>
            <span class="sf-toolbar-label">s</span>
        </div>
    </a>
    <div class="sf-toolbar-info">
        <div class="sf-toolbar-info-piece">
            <b>Total time</b>
            <span><?php echo $_smarty_tpl->tpl_vars['sProfilerTime']->value;?>
</span>
            <span>s</span>
        </div>
    </div>
</div>
<?php }} ?>