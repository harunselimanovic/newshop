<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:43
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/store/payment_status.js" */ ?>
<?php /*%%SmartyHeaderCode:2927447465c0d2173738089-49061857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f22d381b44ad20d354d4c3a51979c29e621ac2d' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/store/payment_status.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2927447465c0d2173738089-49061857',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2173742ef5_25539133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2173742ef5_25539133')) {function content_5c0d2173742ef5_25539133($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.PaymentStatus', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.PaymentStatus',
    storeId: 'base.PaymentStatus',
    model : 'Shopware.apps.Base.model.PaymentStatus',
    pageSize: 1000,
    autoLoad: false,
    remoteFilter: true,
    proxy:{
        type:'ajax',
        url:'<?php echo '/newshop/backend/base/getPaymentStatus';?>',
        reader:{
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
}).create();

<?php }} ?>