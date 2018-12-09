<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:03:26
         compiled from "/Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/compare/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16940467115c0d20aeb329c3-99109438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a95621e72110c194c42fc87c0351eb78148837c4' => 
    array (
      0 => '/Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/compare/index.tpl',
      1 => 1543822814,
      2 => 'file',
    ),
    '3c441a203d3e9578e60a1b8b14844458a696757b' => 
    array (
      0 => '/Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/frontend/compare/index.tpl',
      1 => 1543822814,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '16940467115c0d20aeb329c3-99109438',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d20aeb96371_71700320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d20aeb96371_71700320')) {function content_5c0d20aeb96371_71700320($_smarty_tpl) {?><!-- BLOCK BEGIN widgets_compare_index, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/widgets/compare/index.tpl -->
    <?php /*  Call merged included template "frontend/compare/index.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/compare/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16940467115c0d20aeb329c3-99109438');
content_5c0d20aeb3e579_06874721($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/compare/index.tpl" */?>
<!-- BLOCK END widgets_compare_index -->
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:03:26
         compiled from "/Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/frontend/compare/index.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5c0d20aeb3e579_06874721')) {function content_5c0d20aeb3e579_06874721($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sComparisons']->value){?>
    <!-- BLOCK BEGIN frontend_top_navigation_menu_entry, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/frontend/compare/index.tpl -->
        <i class="icon--compare"></i>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'CompareInfoCount','namespace'=>'frontend/compare/index')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'CompareInfoCount','namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'CompareInfoCount','namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <span class="compare--quantity">(<?php echo count($_smarty_tpl->tpl_vars['sComparisons']->value);?>
)</span>
    <!-- BLOCK END frontend_top_navigation_menu_entry -->
    <!-- BLOCK BEGIN frontend_compare_product_list_dropdown, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/frontend/compare/index.tpl -->
        <ul class="compare--list is--rounded" data-product-compare-menu="true" role="menu">
            <?php  $_smarty_tpl->tpl_vars['compare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['compare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sComparisons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['compare']->key => $_smarty_tpl->tpl_vars['compare']->value){
$_smarty_tpl->tpl_vars['compare']->_loop = true;
?>
                <!-- BLOCK BEGIN frontend_compare_product_dropdown_entry, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/frontend/compare/index.tpl -->
                    <li class="compare--entry" role="menuitem">
                        <!-- BLOCK BEGIN frontend_compare_product_dropdown_article_name, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/frontend/compare/index.tpl -->
                            <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'detail', 'sArticle' => $_smarty_tpl->tpl_vars['compare']->value['articleId'], ))); ?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compare']->value['articlename'], ENT_QUOTES, 'utf-8', true);?>
" class="compare--link"><?php echo $_smarty_tpl->tpl_vars['compare']->value['articlename'];?>
</a>
                        <!-- BLOCK END frontend_compare_product_dropdown_article_name -->

                        <!-- BLOCK BEGIN frontend_compare_product_dropdown_article_link, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/frontend/compare/index.tpl -->
                            <form action="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'delete_article', 'articleID' => $_smarty_tpl->tpl_vars['compare']->value['articleID'], ))); ?>" method="post">
                                <button type="submit" class="btn btn--item-delete">
                                    <i class="icon--cross compare--icon-remove"></i>
                                </button>
                            </form>
                        <!-- BLOCK END frontend_compare_product_dropdown_article_link -->
                    </li>
                <!-- BLOCK END frontend_compare_product_dropdown_entry -->
            <?php } ?>
            <!-- BLOCK BEGIN frontend_compare_product_dropdown_action_start, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/frontend/compare/index.tpl -->
                <li>
                    <a href="<?php echo 'http://localhost:8888/shopware/compare/overlay';?>" data-modal-title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'CompareInfoCount','namespace'=>'frontend/compare/index')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'CompareInfoCount','namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'CompareInfoCount','namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" rel="nofollow" class="btn--compare btn--compare-start btn is--primary is--full is--small is--icon-right">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'CompareActionStart','namespace'=>'frontend/compare/index')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'CompareActionStart','namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleich starten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'CompareActionStart','namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <i class="icon--arrow-right"></i>
                    </a>
                </li>
            <!-- BLOCK END frontend_compare_product_dropdown_action_start -->
            <!-- BLOCK BEGIN frontend_compare_product_dropdown_action_delete, File: /Applications/MAMP/htdocs/shopware/themes/Frontend/Bare/frontend/compare/index.tpl -->
                <li>
                    <form action="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'delete_all', ))); ?>" method="post">
                        <button type="submit" class="btn--compare-delete btn--compare btn is--secondary is--small is--full">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'CompareActionDelete','namespace'=>'frontend/compare/index')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'CompareActionDelete','namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleich löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'CompareActionDelete','namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </button>
                    </form>
                </li>
            <!-- BLOCK END frontend_compare_product_dropdown_action_delete -->
        </ul>
    <!-- BLOCK END frontend_compare_product_list_dropdown -->
<?php }?>
<?php }} ?>