<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:45
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.MailFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:12005941215c0d21758620f1-48284755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0879585e3ecb05316221e4cf3d472a283f4c996' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.MailFieldHandler.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12005941215c0d21758620f1-48284755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2175867ff2_70930986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2175867ff2_70930986')) {function content_5c0d2175867ff2_70930986($_smarty_tpl) {?>/**
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

Ext.define('Shopware.attribute.MailFieldHandler', {
    extend: 'Shopware.attribute.AbstractEntityFieldHandler',
    entity: "Shopware\\Models\\Mail\\Mail",
    singleSelectionClass: 'Shopware.form.field.MailSingleSelection',
    multiSelectionClass: 'Shopware.form.field.MailGrid'
});<?php }} ?>