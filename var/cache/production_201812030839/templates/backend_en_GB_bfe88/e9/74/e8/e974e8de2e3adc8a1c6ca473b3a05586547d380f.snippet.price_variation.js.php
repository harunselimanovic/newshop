<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:07:00
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/article/controller/price_variation.js" */ ?>
<?php /*%%SmartyHeaderCode:10481261635c0d21846ef025-01901209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e974e8de2e3adc8a1c6ca473b3a05586547d380f' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/article/controller/price_variation.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10481261635c0d21846ef025-01901209',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d21847278d1_38957250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d21847278d1_38957250')) {function content_5c0d21847278d1_38957250($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Article
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Controller - Price Variation
 * The price variation controller handles all events of the views in the price variation namespace.
 */
//
//
Ext.define('Shopware.apps.Article.controller.PriceVariation', {

    /**
     * The parent class that this class extends.
     * @string
     */
    extend:'Ext.app.Controller',

    snippets: {
        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        failure: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'failure'/'title','default'=>'Failure','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'variant'/'failure'/'title','default'=>'Failure','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'variant'/'failure'/'title','default'=>'Failure','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            onlyOneCanBeChecked: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media'/'failure'/'only_one_node','default'=>'You can only activate one configurator option per configurator group.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'media'/'failure'/'only_one_node','default'=>'You can only activate one configurator option per configurator group.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only one configurator option can be activated per configurator group.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'media'/'failure'/'only_one_node','default'=>'You can only activate one configurator option per configurator group.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }

    },

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @return void
     */
    init:function () {
        var me = this;
        me.control({
            //global event of the configurator tab
            'article-detail-window article-variant-configurator': {
                openPriceVariation: me.onOpenListPriceVariation
            },
            'article-price-variation-mapping-window': {
                displayNewPriceVariationWindow: me.onDisplayNewPriceVariationWindow,
                closeListPriceVariation: me.onCloseListPriceVariation
            },
            'article-price-variation-rule-window': {
                optionCheck: me.onOptionCheck,
                assignConfiguratorOptions: me.onAssignConfiguratorOptions
            }
        });
        me.callParent(arguments);
    },

    /**
     * Event listener function which fired when the user wants to list price variations.
     * The event will be fired over the toolbar button in the configurator tab.
     */
    onOpenListPriceVariation: function() {
        var me = this,
            article = me.subApplication.article;

        // Load variations
        var variationsStore = Ext.create('Shopware.apps.Article.store.Variation');
        variationsStore.getProxy().extraParams.configuratorSetId = article.get('configuratorSetId');
        variationsStore.load({
            callback: function()  {
                me.getView('variant.configurator.PriceVariation').create({
                    article: article,
                    variationsStore: variationsStore
                });
            }
        });
    },

    /**
     * Fired when the user wants to add a new variation
     * Displays the configurator options tree window
     *
     * @param window
     */
    onDisplayNewPriceVariationWindow: function(window) {
        var me = this,
            mainWindow = me.subApplication.articleWindow,
            configuratorGroupStore = mainWindow.configuratorGroupStore;

        me.getView('variant.configurator.PriceVariationRule').create({
            store: window.variationsStore,
            configuratorGroupStore: configuratorGroupStore
        }).show();
    },

    /**
     * Event listener function of the mapping window. Fired when the user
     * clicks the cancel button.
     */
    onCloseListPriceVariation: function(mappingWindow) {
        mappingWindow.destroy();
    },

    /**
     * Event listener function of the configurator option window. Fired when the user select/deselect a tree node.
     * The user can only select one node per configurator group. So we have to check
     * if the checked node is the only node in the configurator group which is checked.
     *
     * @param node
     * @param checked
     * @return Boolean
     */
    onOptionCheck: function(node, checked) {
        var me = this, onlyOneChecked = true,
            groupNode = null;

        //first we check if the checked parameter is true and the node has a parent node.
        if (checked && node && node.parentNode) {
            //if this is the case the parent node is the configurator group node.
            groupNode = node.parentNode;
            //we have to iterate the child nodes of the group node.
            Ext.each(groupNode.childNodes, function(childNode) {
                //if the queue node not equals the checked node we have to check the "checked" property
                if (childNode !== node && childNode.get('checked')) {
                    //if the checked property is set to true, an other node was already checked in the group
                    onlyOneChecked = false;
                    return false;
                }
            });
            //if the checked node isn't the only checked we have to remove the checked property.
            if (!onlyOneChecked) {
                node.set('checked', false);
                Shopware.Notification.createGrowlMessage(me.snippets.failure.title, me.snippets.failure.onlyOneCanBeChecked, me.snippets.growlMessage);
            }
        }
        return onlyOneChecked;
    },

    /**
     * Event listener function of the "newRule" window. Fired when the user selects
     * some options in the tree panel and clicks the save button to save the new mapping rule.
     *
     * @param variationsWindow
     */
    onAssignConfiguratorOptions: function(variationsWindow) {
        var me = this,
            tree = variationsWindow.configuratorTree,
            nodes = tree.getChecked();

        if (nodes.length === 0) {
            return false;
        }

        var record = Ext.create('Shopware.apps.Article.model.PriceVariation');
        var store = Ext.create('Ext.data.Store', {
            model: 'Shopware.apps.Article.model.ConfiguratorOption'
        });
        Ext.each(nodes, function(node) {
            store.add(node);
        });

        record['getOptionsStore'] = store;
        record.set('configuratorSetId', me.subApplication.article.get('configuratorSetId'));

        record.save({
            callback: function(updated) {
                variationsWindow.store.add(updated);
                variationsWindow.destroy();
            }
        });
    }
});
//
<?php }} ?>