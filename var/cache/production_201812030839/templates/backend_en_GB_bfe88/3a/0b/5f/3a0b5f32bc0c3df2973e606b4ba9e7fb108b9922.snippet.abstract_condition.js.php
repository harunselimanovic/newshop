<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:58
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/abstract_condition.js" */ ?>
<?php /*%%SmartyHeaderCode:6925963555c0d2182c1e857-26394872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0b5f32bc0c3df2973e606b4ba9e7fb108b9922' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/abstract_condition.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6925963555c0d2182c1e857-26394872',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2182c2f208_20048335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2182c2f208_20048335')) {function content_5c0d2182c2f208_20048335($_smarty_tpl) {?>/**
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
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.condition_list.condition.AbstractCondition', {
    alternateClassName: 'ProductStream.filter.AbstractCondition',

    getLabel: function() {
        throw 'Unimplemented method.';
    },

    isSingleton: function() {
        throw 'Unimplemented method.';
    },

    create: function(callback, container, conditions) {
        throw 'Unimplemented method.';
    },

    load: function(key, value, container) {
        throw 'Unimplemented method.';
    }
});
//<?php }} ?>