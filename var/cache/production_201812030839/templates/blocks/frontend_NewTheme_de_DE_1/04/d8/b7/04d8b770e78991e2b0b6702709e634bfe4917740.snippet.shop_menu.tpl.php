<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:03:26
         compiled from "/Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11972129945c0d20ae563639-10177545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d8b770e78991e2b0b6702709e634bfe4917740' => 
    array (
      0 => '/Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11972129945c0d20ae563639-10177545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop' => 0,
    'languages' => 0,
    'language' => 0,
    'currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d20ae5d1175_98889601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d20ae5d1175_98889601')) {function content_5c0d20ae5d1175_98889601($_smarty_tpl) {?>
<!-- BLOCK BEGIN frontend_index_actions_active_shop, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl -->
    <?php if ($_smarty_tpl->tpl_vars['shop']->value&&count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
        <div class="top-bar--language navigation--entry">
            <!-- BLOCK BEGIN frontend_index_actions_active_shop_top_bar_language, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl -->
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
                    <form method="post" class="language--form">
                        <!-- BLOCK BEGIN frontend_index_actions_active_shop_language_form_content, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl -->
                            <div class="field--select">
                                <?php if ($_smarty_tpl->tpl_vars['shop']->value&&count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
                                    <div class="language--flag <?php echo $_smarty_tpl->tpl_vars['shop']->value->getLocale()->toString();?>
"><?php echo $_smarty_tpl->tpl_vars['shop']->value->getName();?>
</div>
                                <?php }?>
                                <!-- BLOCK BEGIN frontend_index_actions_active_shop_language_form_select, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl -->
                                    <div class="select-field">
                                        <select name="__shop" class="language--select" data-auto-submit="true">
                                            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value->getId()===$_smarty_tpl->tpl_vars['shop']->value->getId()){?>selected="selected"<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>

                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                <!-- BLOCK END frontend_index_actions_active_shop_language_form_select -->
                                <input type="hidden" name="__redirect" value="1">
                                <!-- BLOCK BEGIN frontend_index_actions_active_shop_inline, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl --><!-- BLOCK END frontend_index_actions_active_shop_inline -->
                            </div>
                        <!-- BLOCK END frontend_index_actions_active_shop_language_form_content -->
                    </form>
                <?php }?>
            <!-- BLOCK END frontend_index_actions_active_shop_top_bar_language -->
        </div>
    <?php }?>
<!-- BLOCK END frontend_index_actions_active_shop -->


<!-- BLOCK BEGIN frontend_index_actions_currency, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl -->
    <?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1){?>
        <div class="top-bar--currency navigation--entry">
            <!-- BLOCK BEGIN frontend_index_actions_currency_form, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl -->
                <form method="post" class="currency--form">
                    <!-- BLOCK BEGIN frontend_index_actions_currency_form_content, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl -->
                        <div class="field--select">
                            <!-- BLOCK BEGIN frontend_index_actions_currency_form_select, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/index/shop_menu.tpl -->
                                <div class="select-field">
                                    <select name="__currency" class="currency--select" data-auto-submit="true">
                                        <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value->getId()===$_smarty_tpl->tpl_vars['shop']->value->getCurrency()->getId()){?> selected="selected"<?php }?>>
                                                <?php if ($_smarty_tpl->tpl_vars['currency']->value->getSymbol()!=$_smarty_tpl->tpl_vars['currency']->value->getCurrency()){?><?php echo $_smarty_tpl->tpl_vars['currency']->value->getSymbol();?>
 <?php }?><?php echo $_smarty_tpl->tpl_vars['currency']->value->getCurrency();?>

                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            <!-- BLOCK END frontend_index_actions_currency_form_select -->
                        </div>
                    <!-- BLOCK END frontend_index_actions_currency_form_content -->
                </form>
            <!-- BLOCK END frontend_index_actions_currency_form -->
        </div>
    <?php }?>
<!-- BLOCK END frontend_index_actions_currency -->
<?php }} ?>