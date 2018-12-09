<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:58
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/product_stream/view/common/settings.js" */ ?>
<?php /*%%SmartyHeaderCode:1225171335c0d2182ae10d4-20716093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3663a2bfe1f5eaa0a395a97acd33cca592d03e7' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/product_stream/view/common/settings.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225171335c0d2182ae10d4-20716093',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2182b08b54_10795550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2182b08b54_10795550')) {function content_5c0d2182b08b54_10795550($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.common.Settings', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.product-stream-settings',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings','default'=>'Settings','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'settings','default'=>'Settings','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'settings','default'=>'Settings','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    height: 170,
    bodyPadding: 10,
    cls: 'shopware-form',
    layout: 'anchor',
    mixins: {
        factory: 'Shopware.attribute.SelectionFactory'
    },

    initComponent: function() {
        var me = this;

        me.items = me.createItems();
        me.callParent(arguments);
    },

    createItems: function() {
        return [
            this.createNameField(),
            this.createDescriptionField(),
            this.createSortingCombo()
        ];
    },

    createSortingCombo: function() {
        var me = this;

        me.sortingCombo = Ext.create('Shopware.form.field.SingleSelection', {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sorting','default'=>'Sorting','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'sorting','default'=>'Sorting','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorting<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'sorting','default'=>'Sorting','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'sortingId',
            allowBlank: false,
            forceSelection: true,
            anchor: '100%',
            store: me.createEntitySearchStore(
                "Shopware\\Models\\Search\\CustomSorting",
                'Shopware.apps.Base.model.CustomSorting'
            )
        });

        return me.sortingCombo;
    },

    createNameField: function() {
        this.nameField = Ext.create('Ext.form.field.Text', {
            name: 'name',
            anchor: '100%',
            allowBlank: false,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            translatable: true,
        });

        return this.nameField;
    },

    createDescriptionField: function() {
        this.descriptionField = Ext.create('Ext.form.field.TextArea', {
            name: 'description',
            anchor: '100%',
            rows: 3,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'description','default'=>'Description','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'description','default'=>'Description','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'description','default'=>'Description','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            translatable: true,
        });

        return this.descriptionField;
    }
});
//<?php }} ?>