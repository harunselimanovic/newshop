<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:05:33
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Frontend/Bare/frontend/_includes/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20833787785c0d212da1b1b4-83093249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0e8b7ea445b8029050f01cb4a821564989d8dee' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Frontend/Bare/frontend/_includes/messages.tpl',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20833787785c0d212da1b1b4-83093249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'icon' => 0,
    'borderRadius' => 0,
    'bold' => 0,
    'visible' => 0,
    'hasBorderRadius' => 0,
    'isVisible' => 0,
    'iconCls' => 0,
    'isBold' => 0,
    'content' => 0,
    'list' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d212da96679_38465877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d212da96679_38465877')) {function content_5c0d212da96679_38465877($_smarty_tpl) {?>


<!-- BLOCK BEGIN frontend_global_messages_icon_class, File: /Applications/MAMP/htdocs/newshop/themes/Frontend/Bare/frontend/_includes/messages.tpl -->
    <?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--check', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['type']->value=='error'){?>
        <?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--cross', null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='success'){?>
        <?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--check', null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='warning'){?>
        <?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--warning', null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--info', null, 0);?>
    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['icon']->value)&&count($_smarty_tpl->tpl_vars['icon']->value)){?>
        <?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['icon']->value, null, 0);?>
    <?php }?>
<!-- BLOCK END frontend_global_messages_icon_class -->


<!-- BLOCK BEGIN frontend_global_messages_border_radius, File: /Applications/MAMP/htdocs/newshop/themes/Frontend/Bare/frontend/_includes/messages.tpl -->
    <?php $_smarty_tpl->tpl_vars['hasBorderRadius'] = new Smarty_variable(true, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['borderRadius']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasBorderRadius'] = new Smarty_variable($_smarty_tpl->tpl_vars['borderRadius']->value, null, 0);?>
    <?php }?>
<!-- BLOCK END frontend_global_messages_border_radius -->


<!-- BLOCK BEGIN frontend_global_messages_bold, File: /Applications/MAMP/htdocs/newshop/themes/Frontend/Bare/frontend/_includes/messages.tpl -->
    <?php $_smarty_tpl->tpl_vars['isBold'] = new Smarty_variable(false, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['bold']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isBold'] = new Smarty_variable($_smarty_tpl->tpl_vars['bold']->value, null, 0);?>
    <?php }?>
<!-- BLOCK END frontend_global_messages_bold -->


<!-- BLOCK BEGIN frontend_global_messages_visible, File: /Applications/MAMP/htdocs/newshop/themes/Frontend/Bare/frontend/_includes/messages.tpl -->
    <?php $_smarty_tpl->tpl_vars['isVisible'] = new Smarty_variable(true, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['visible']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isVisible'] = new Smarty_variable($_smarty_tpl->tpl_vars['visible']->value, null, 0);?>
    <?php }?>
<!-- BLOCK END frontend_global_messages_visible -->


<!-- BLOCK BEGIN frontend_global_messages_container, File: /Applications/MAMP/htdocs/newshop/themes/Frontend/Bare/frontend/_includes/messages.tpl -->
    <div class="alert is--<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php if ($_smarty_tpl->tpl_vars['hasBorderRadius']->value&&$_smarty_tpl->tpl_vars['hasBorderRadius']->value===true){?> is--rounded<?php }?><?php if ($_smarty_tpl->tpl_vars['isVisible']->value===false){?> is--hidden<?php }?>">

        
        <!-- BLOCK BEGIN frontend_global_messages_icon, File: /Applications/MAMP/htdocs/newshop/themes/Frontend/Bare/frontend/_includes/messages.tpl -->
            <div class="alert--icon">
                <i class="icon--element <?php echo $_smarty_tpl->tpl_vars['iconCls']->value;?>
"></i>
            </div>
        <!-- BLOCK END frontend_global_messages_icon -->

        
        <!-- BLOCK BEGIN frontend_global_messages_content, File: /Applications/MAMP/htdocs/newshop/themes/Frontend/Bare/frontend/_includes/messages.tpl -->
            <div class="alert--content<?php if ($_smarty_tpl->tpl_vars['isBold']->value){?> is--strong<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['content']->value&&!$_smarty_tpl->tpl_vars['list']->value){?>
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                <?php }else{ ?>
                    <ul class="alert--list">
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['entry']->iteration=0;
 $_smarty_tpl->tpl_vars['entry']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['entry']->iteration++;
 $_smarty_tpl->tpl_vars['entry']->index++;
 $_smarty_tpl->tpl_vars['entry']->first = $_smarty_tpl->tpl_vars['entry']->index === 0;
 $_smarty_tpl->tpl_vars['entry']->last = $_smarty_tpl->tpl_vars['entry']->iteration === $_smarty_tpl->tpl_vars['entry']->total;
?>
                            <li class="list--entry<?php if ($_smarty_tpl->tpl_vars['entry']->first){?> is--first<?php }?><?php if ($_smarty_tpl->tpl_vars['entry']->last){?> is--last<?php }?>"><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
                        <?php } ?>
                    </ul>
                <?php }?>
            </div>
        <!-- BLOCK END frontend_global_messages_content -->
    </div>
<!-- BLOCK END frontend_global_messages_container --><?php }} ?>