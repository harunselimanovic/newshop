<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:43
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/model/template.js" */ ?>
<?php /*%%SmartyHeaderCode:6943398635c0d2173226f23-84001366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3c71c3551d271161adac65f6a5d5ecfb38f5ddb' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/model/template.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6943398635c0d2173226f23-84001366',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d21732374f4_22306939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d21732374f4_22306939')) {function content_5c0d21732374f4_22306939($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Global Stores and Models
 */
//
Ext.define('Shopware.apps.Base.model.Template', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Template',

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty : 'id',

    /**
    * The fields used for this model
    * @array
    */
    fields: [
        //
        { name: 'id', type : 'int' },
        { name: 'name', type: 'string' },
        { name: 'template', type : 'string' }
    ]
});
//
<?php }} ?>