<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:05:34
         compiled from "/Applications/MAMP/htdocs/newshop/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/dump.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1959098325c0d212ea7e6b9-14890091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd95c34b33da80dac7fee4e31dc6bde31c8305b1' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/dump.tpl',
      1 => 1544364064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1959098325c0d212ea7e6b9-14890091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sProfiler' => 0,
    'sProfilerID' => 0,
    'dump' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d212eab20d7_78154229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d212eab20d7_78154229')) {function content_5c0d212eab20d7_78154229($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sProfiler']->value['dump']['count']){?>
<div class="sf-toolbar-block sf-toolbar-block-dump sf-toolbar-status-normal">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, 'panel' => 'dump', ))); ?>">
        <div class="sf-toolbar-icon">
            <!--
This file is taken from https://github.com/symfony/debug-bundle/blob/master/Resources/views/Profiler/icon.svg
Credits apparently to https://github.com/javiereguiluz
MIT License, see https://github.com/symfony/debug-bundle/blob/master/LICENSE
-->
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
    <path fill="#AAAAAA" d="M12,22.6c-5.8,0-10.5-4.7-10.5-10.5C1.5,6.3,6.2,1.5,12,1.5s10.5,4.7,10.5,10.5C22.5,17.9,17.8,22.6,12,22.6z M12,4.5c-4.2,0-7.5,3.4-7.5,7.5c0,4.2,3.4,7.5,7.5,7.5s7.5-3.4,7.5-7.5C19.5,7.9,16.2,4.5,12,4.5z"/>
    <path fill="#AAAAAA" d="M12,9.1c-0.8,0-1.5-0.7-1.5-1.5v-6c0-0.8,0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5v6C13.5,8.4,12.8,9.1,12,9.1zM13.5,22.4v-6c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5v6c0,0.8,0.7,1.5,1.5,1.5S13.5,23.2,13.5,22.4z M23.9,12c0-0.8-0.7-1.5-1.5-1.5h-6c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5h6C23.2,13.5,23.9,12.8,23.9,12z M9.1,12c0-0.8-0.7-1.5-1.5-1.5h-6c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5h6C8.4,13.5,9.1,12.8,9.1,12z"/>
</svg>

            <span class="sf-toolbar-value"><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['dump']['count'];?>
</span>
        </div>
    </a>
    <div class="sf-toolbar-info">

        <?php  $_smarty_tpl->tpl_vars['dump'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dump']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sProfiler']->value['dump']['html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dump']->key => $_smarty_tpl->tpl_vars['dump']->value){
$_smarty_tpl->tpl_vars['dump']->_loop = true;
?>
            <div class="sf-toolbar-info-piece">
                <span>
                    <?php if ($_smarty_tpl->tpl_vars['dump']->value['file']){?>
                        <?php if ($_smarty_tpl->tpl_vars['dump']->value['fileLink']){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['dump']->value['fileLink'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['dump']->value['file'];?>
"><?php echo $_smarty_tpl->tpl_vars['dump']->value['name'];?>
</a>
                        <?php }else{ ?>
                            <abbr title="<?php echo $_smarty_tpl->tpl_vars['dump']->value['file'];?>
"><?php echo $_smarty_tpl->tpl_vars['dump']->value['name'];?>
</abbr>
                        <?php }?>
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['dump']->value['name'];?>

                    <?php }?>
                </span>

                <span class="sf-toolbar-file-line">line <?php echo $_smarty_tpl->tpl_vars['dump']->value['line'];?>
</span>

                <?php echo $_smarty_tpl->tpl_vars['dump']->value['data'];?>

            </div>
        <?php } ?>

    </div>
</div>
<?php }?>
<?php }} ?>