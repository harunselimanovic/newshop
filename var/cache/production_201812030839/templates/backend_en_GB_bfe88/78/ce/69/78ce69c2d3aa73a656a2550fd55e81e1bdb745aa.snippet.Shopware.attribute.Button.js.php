<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:45
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/attribute/Shopware.attribute.Button.js" */ ?>
<?php /*%%SmartyHeaderCode:7740337025c0d2175ac65e0-74856086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78ce69c2d3aa73a656a2550fd55e81e1bdb745aa' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/attribute/Shopware.attribute.Button.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7740337025c0d2175ac65e0-74856086',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2175adfa09_44874481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2175adfa09_44874481')) {function content_5c0d2175adfa09_44874481($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

//
//
Ext.define('Shopware.attribute.Button', {
    extend: 'Ext.button.Button',

    table: null,
    allowTranslation: true,
    backendAttributes: [],
    hidden: true,
    iconCls: 'sprite-attributes',
    text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'attribute_button','namespace'=>'backend/attributes/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'attribute_button','namespace'=>'backend/attributes/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'attribute_button','namespace'=>'backend/attributes/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    cls: 'secondary small',

    initComponent: function() {
        var me = this;

        me.attributeWindow = Ext.create('Shopware.attribute.Window', {
            table: me.table,
            allowTranslation: me.allowTranslation
        });

        me.attributeWindow.attributeForm.on('config-loaded', function(fields) {
            me.backendAttributes = fields;
            me.switchButton();
        });

        me.handler = function() {
            me.openAttributes(me.record);
        };

        me.callParent(arguments);
    },

    openAttributes: function(record) {
        var me = this;

        me.attributeWindow = Ext.create('Shopware.attribute.Window', {
            table: me.table,
            allowTranslation: me.allowTranslation
        });
        me.attributeWindow.show();
        me.attributeWindow.loadAttribute(record);
    },

    setRecord: function(record) {
        this.record = record;
        this.switchButton();
    },

    switchButton: function() {
        var me = this;
        me.hide();

        if (me.backendAttributes.length <= 0 || !me.record) {
            return;
        }
        me.show();
    }
});
//<?php }} ?>