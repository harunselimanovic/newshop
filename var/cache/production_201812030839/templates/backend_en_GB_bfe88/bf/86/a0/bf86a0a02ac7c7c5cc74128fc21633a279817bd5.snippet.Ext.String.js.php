<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:41
         compiled from "/Applications/MAMP/htdocs/newshop/engine/Library/ExtJs/overrides/Ext.String.js" */ ?>
<?php /*%%SmartyHeaderCode:19538042155c0d217127aaa6-88218965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf86a0a02ac7c7c5cc74128fc21633a279817bd5' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/engine/Library/ExtJs/overrides/Ext.String.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19538042155c0d217127aaa6-88218965',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d21712993a8_84655862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d21712993a8_84655862')) {function content_5c0d21712993a8_84655862($_smarty_tpl) {?>/**
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
 */

/** @lends Ext.String */
Ext.override(Ext.String, {
    /**
     * Return the text content of the element
     *
     * @returns string
     */
    getText: function(value) {
        var me = this,
            elementNode;

        elementNode = document.createElement('div');
        elementNode.innerHTML = value;

        return me._getText([elementNode]);
    },

    /**
     * Utility function for retrieving the text value of an array of DOM nodes
     *
     * @param { Array|Element } elem
     * @private
     */
    _getText: function(elem) {
        var node,
            ret = '',
            i = 0,
            nodeType = elem.nodeType;

        if (!nodeType) {
            while ((node = elem[i++])) {
                ret += this._getText(node);
            }
        } else if (nodeType === 1 || nodeType === 9 || nodeType === 11) {
            if (typeof elem.textContent === 'string') {
                return elem.textContent;
            } else {
                for (elem = elem.firstChild; elem; elem = elem.nextSibling) {
                    ret += this._getText(elem);
                }
            }
        } else if (nodeType === 3 || nodeType === 4) {
            return elem.nodeValue;
        }

        return ret;
    }
});
<?php }} ?>