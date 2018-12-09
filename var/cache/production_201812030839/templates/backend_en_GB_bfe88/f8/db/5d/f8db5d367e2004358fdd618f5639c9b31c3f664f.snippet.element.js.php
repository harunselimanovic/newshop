<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:07:01
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/theme/model/element.js" */ ?>
<?php /*%%SmartyHeaderCode:4206009815c0d2185a7c6d9-26822499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8db5d367e2004358fdd618f5639c9b31c3f664f' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/theme/model/element.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4206009815c0d2185a7c6d9-26822499',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2185a9b142_35111833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2185a9b142_35111833')) {function content_5c0d2185a9b142_35111833($_smarty_tpl) {?>/**
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

/**
 * Shopware Application
 *
 * @category  Shopware
 * @package   Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */

//

//

Ext.define('Shopware.apps.Theme.model.Element', {
    extend: 'Shopware.data.Model',

    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'type', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'helpText', type: 'string', mapping: 'help' },
        { name: 'position', type: 'int' },
        { name: 'defaultValue', useNull: true },
        { name: 'selection', useNull: true },
        { name: 'fieldLabel', type: 'string', useNull: true },
        { name: 'supportText', type: 'string', useNull: true },
        { name: 'allowBlank', type: 'boolean', defaultValue: true },
        { name: 'attributes' },

        //no type definition for auto typing
        { name: 'tab' },

        //mapping fields which used only for the form field generation
        { name: 'value', mapping: 'defaultValue' },
        { name: 'xtype', type: 'string', mapping: 'type' },
        { name: 'elementId', type: 'int', mapping: 'id' }
    ],

    associations: [
        {
            type: 'hasMany',
            model: 'Shopware.apps.Theme.model.ConfigValue',
            name: 'getConfigValues',
            associationKey: 'values'
        }
    ]
});


//
<?php }} ?>