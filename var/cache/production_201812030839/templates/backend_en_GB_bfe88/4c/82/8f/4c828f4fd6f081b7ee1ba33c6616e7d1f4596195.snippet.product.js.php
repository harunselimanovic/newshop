<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:58
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/product_stream/model/product.js" */ ?>
<?php /*%%SmartyHeaderCode:2537138095c0d2182a0d6d8-21725576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c828f4fd6f081b7ee1ba33c6616e7d1f4596195' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/product_stream/model/product.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2537138095c0d2182a0d6d8-21725576',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2182a21115_77855000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2182a21115_77855000')) {function content_5c0d2182a21115_77855000($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.model.Product', {
    extend: 'Ext.data.Model',
    fields: [
        //
        { name : 'id', type: 'int', useNull: true },
        { name : 'number', type: 'string' },
        { name : 'name', type: 'string' },
        { name : 'stock', type: 'int' },
        { name : 'cheapestPrice' }
    ]
});
//<?php }} ?>