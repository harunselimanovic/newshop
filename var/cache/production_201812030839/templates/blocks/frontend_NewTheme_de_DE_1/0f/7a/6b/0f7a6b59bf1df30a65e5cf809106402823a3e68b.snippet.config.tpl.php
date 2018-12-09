<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:05:34
         compiled from "/Applications/MAMP/htdocs/newshop/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18885756585c0d212eab8280-99107901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f7a6b59bf1df30a65e5cf809106402823a3e68b' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/config.tpl',
      1 => 1544364064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18885756585c0d212eab8280-99107901',
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
  'unifunc' => 'content_5c0d212eae4625_40676912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d212eae4625_40676912')) {function content_5c0d212eae4625_40676912($_smarty_tpl) {?><div class="sf-toolbar-block sf-toolbar-block-config shopware-block sf-toolbar-status-normal sf-toolbar-block-right">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, 'panel' => 'config', ))); ?>">
        <div class="sf-toolbar-icon">
            <span class="sf-toolbar-label shopware-icon">
                <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#189EFF;}
</style>
<g id="XMLID_985_">
	<path id="XMLID_987_" class="st0" d="M188.4,203.1c-6.8-5.1-16.9-9-27.5-13.2c-12.7-4.9-27.1-10.5-37.8-19.1
		c-12.2-9.7-18.2-22-18.2-37.5c0-13.9,5.8-25.8,16.7-34.5c12.3-9.7,30.8-14.8,53.7-14.8c6.3,0,12.4,0.4,18,1.2
		c0.5,0.1,1-0.2,1.2-0.6c0.2-0.5,0.1-1-0.3-1.3c-14.4-13-33.1-20.1-52.5-20.1c-21,0-40.7,8.2-55.6,23c-14.8,14.8-23,34.6-23,55.5
		s8.2,40.7,23,55.5c14.8,14.8,34.6,23,55.6,23c16.9,0,33.1-5.3,46.7-15.4c0.3-0.2,0.5-0.6,0.5-0.9
		C188.9,203.6,188.7,203.3,188.4,203.1z"/>
	<path id="XMLID_986_" class="st0" d="M219.9,134.5c0-0.3-0.2-0.6-0.4-0.8c-16.4-13.6-29.6-19.2-45.8-19.2c-8.6,0-15.2,1.7-19.6,5.1
		c-3.8,2.9-5.8,7.1-5.8,11.9c0,13.5,16.5,19.6,35.6,26.8c9.8,3.7,20,7.5,29.4,12.6c0.2,0.1,0.4,0.1,0.6,0.1c0.1,0,0.3,0,0.4-0.1
		c0.3-0.1,0.6-0.4,0.7-0.6c3.6-9.1,5.4-18.8,5.4-28.6C220.3,139.4,220.2,137,219.9,134.5z"/>
</g>
</svg>

            </span>
            <span class="sf-toolbar-value"><?php if ($_smarty_tpl->tpl_vars['sProfiler']->value['php']['shopware_version']=='___VERSION___'){?>Git Version<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['php']['shopware_version'];?>
<?php }?></span>
        </div>
    </a>
    <div class="sf-toolbar-info">
        <div class="sf-toolbar-info-group">
            <div class="sf-toolbar-info-piece">
                <b>Environment</b>
                <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['php']['env'];?>
</span>
            </div>
        </div>

        <div class="sf-toolbar-info-group">
            <div class="sf-toolbar-info-piece sf-toolbar-info-php">
                <b>PHP version</b>
                <span>
                    <?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['php']['version'];?>

                    &nbsp; <a href="<?php echo 'http://localhost:8888/shopware/profiler/php';?>" target="_blank">View phpinfo()</a>
                </span>
            </div>

            <div class="sf-toolbar-info-piece sf-toolbar-info-php-ext">
                <b>PHP Extensions</b>
                <span class="sf-toolbar-status <?php if ($_smarty_tpl->tpl_vars['sProfiler']->value['php']['xdebug']){?>sf-toolbar-status-green<?php }else{ ?>sf-toolbar-status-red<?php }?>">xdebug</span>
                <span class="sf-toolbar-status <?php if ($_smarty_tpl->tpl_vars['sProfiler']->value['php']['accel']){?>sf-toolbar-status-green<?php }else{ ?>sf-toolbar-status-red<?php }?>">accel</span>
            </div>

            <div class="sf-toolbar-info-piece">
                <b>PHP SAPI</b>
                <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['php']['sapi'];?>
</span>
            </div>
        </div>
    </div>
</div><?php }} ?>