<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:43
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/store/position_status.js" */ ?>
<?php /*%%SmartyHeaderCode:4798147425c0d21737dd256-81953742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48ec6d9681a9c55e518b663fb680f67f22d3db15' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/store/position_status.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4798147425c0d21737dd256-81953742',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d217387b5c0_02885805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d217387b5c0_02885805')) {function content_5c0d217387b5c0_02885805($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.PositionStatus', {
    /**
     * Define that this component is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',
   /**
    * Auto load the store after the component
    * is initialized
    * @boolean
    */
    autoLoad: false,

    /**
     * Define the used model for this store
     * @string
     */
    model : 'Shopware.apps.Base.model.PositionStatus',
    alternateClassName: 'Shopware.store.PositionStatus',
    storeId: 'base.PositionStatus',
    pageSize: 1000,
    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url:'<?php echo '/newshop/backend/base/getDetailStatus';?>',

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }

});

<?php }} ?>