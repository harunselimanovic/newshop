<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:03:28
         compiled from "/Applications/MAMP/htdocs/shopware/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2463807795c0d20b0001fa7-19771842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52e93a60f3e3372d563b187a6c5e232cbb0015ab' => 
    array (
      0 => '/Applications/MAMP/htdocs/shopware/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/user.tpl',
      1 => 1544364064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2463807795c0d20b0001fa7-19771842',
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
  'unifunc' => 'content_5c0d20b00350a6_97820211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d20b00350a6_97820211')) {function content_5c0d20b00350a6_97820211($_smarty_tpl) {?><div class="sf-toolbar-block sf-toolbar-block-security sf-toolbar-status-normal">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, 'panel' => 'security', ))); ?>">
        <div class="sf-toolbar-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
    <path fill="#AAAAAA" d="M21,20.4V22H3v-1.6c0-3.7,2.4-6.9,5.8-8c-1.7-1.1-2.9-3-2.9-5.2c0-3.4,2.7-6.1,6.1-6.1s6.1,2.7,6.1,6.1c0,2.2-1.2,4.1-2.9,5.2C18.6,13.5,21,16.7,21,20.4z"></path>
</svg>
            <span class="sf-toolbar-value"><?php if (!empty($_smarty_tpl->tpl_vars['sProfiler']->value['user']['loggedin'])){?><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['user']['billingaddress']['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['user']['billingaddress']['lastname'];?>
<?php }else{ ?>Guest<?php }?></span>
        </div>
    </a>
    <?php if (!empty($_smarty_tpl->tpl_vars['sProfiler']->value['user']['loggedin'])){?>
        <div class="sf-toolbar-info">
            <div class="sf-toolbar-info-piece">
                <b>Logged in as</b>
                <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['user']['billingaddress']['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['user']['billingaddress']['lastname'];?>
</span>
            </div>
            <div class="sf-toolbar-info-piece">
                <b>ID:</b>
                <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['user']['additional']['user']['id'];?>
</span>
            </div>
            <div class="sf-toolbar-info-piece">
                <b>Customernumber:</b>
                <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['user']['additional']['user']['customernumber'];?>
</span>
            </div>
            <div class="sf-toolbar-info-piece">
                <b>Actions</b>
                <span><a href="<?php echo 'http://localhost:8888/shopware/account/logout';?>">Logout</a></span>
            </div>
        </div>
    <?php }?>
</div>
<?php }} ?>