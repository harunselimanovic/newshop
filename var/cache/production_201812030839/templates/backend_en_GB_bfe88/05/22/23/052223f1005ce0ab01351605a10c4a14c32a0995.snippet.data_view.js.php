<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:59
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/article/view/image/data_view.js" */ ?>
<?php /*%%SmartyHeaderCode:5220304085c0d21832320f7-86404871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '052223f1005ce0ab01351605a10c4a14c32a0995' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/article/view/image/data_view.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5220304085c0d21832320f7-86404871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2183249364_54150114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2183249364_54150114')) {function content_5c0d2183249364_54150114($_smarty_tpl) {?>/**
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

//
//
Ext.define('Shopware.apps.Article.view.image.DataView', {
    extend: 'Ext.view.View',
    itemSelector: '.article-thumb-wrap',
    name: 'image-listing',
    emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image/list/empty_text','default'=>'No media found','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'image/list/empty_text','default'=>'No media found','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No media found<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'image/list/empty_text','default'=>'No media found','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    multiSelect: true,
    padding: '10 10 20',
    flex: 1,
    autoScroll: true,

    initComponent: function () {
        this.dragViewSelectorPlugin = Ext.create('Ext.ux.DataView.DragSelector', {});
        this.plugins = [ this.dragViewSelectorPlugin ];

        this.listeners = {
            scope: this,
            itemclick: this.onItemClick
        };

        this.callParent(arguments);
    },

    refresh: function () {
        this.callParent(arguments);

        if (!this.dragViewSelectorPlugin.proxy) {
            return;
        }

        // Fixes an ExtJS issue, have a look at https://www.sencha.com/forum/showthread.php?226676-4-1-1-rc2-Ext-ux-DataView-DragSelector-bugs
        this.dragViewSelectorPlugin.proxy.destroy();
        delete this.dragViewSelectorPlugin.proxy;
    },

    /**
     * Event handler which will be fired when the user clicks an image in the media grid component. If the user clicks on the
     * gear icon, it will open up the assignment configuration window.
     *
     * @param { Ext.data.Record } record
     * @param { HTMLElement } el
     * @param { Number } index
     * @param { Event } event
     */
    onItemClick: function(record, el, index, event) {
        var target = event.target,
            $target = Ext.get(target);

        // Check if the user clicked on the actual settings gear, otherwise just select the media
        if (!$target || !$target.hasCls('mapping-config')) {
            return;
        }

        this.fireEvent('openSettingsForm', record);
    }
});
//
<?php }} ?>