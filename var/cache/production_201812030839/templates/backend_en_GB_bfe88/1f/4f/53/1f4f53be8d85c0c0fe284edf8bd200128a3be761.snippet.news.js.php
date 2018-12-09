<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:54
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/index/model/news.js" */ ?>
<?php /*%%SmartyHeaderCode:18158810115c0d217e2148b2-26337974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f4f53be8d85c0c0fe284edf8bd200128a3be761' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/index/model/news.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18158810115c0d217e2148b2-26337974',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d217e228a15_18662484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d217e228a15_18662484')) {function content_5c0d217e228a15_18662484($_smarty_tpl) {?>/**
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

//
Ext.define('Shopware.apps.Index.model.News', {
    extend: 'Ext.data.Model',
    fields: [
        //
        { name: 'pubDate', type: 'date', dateFormat:'Y-m-dTH:i:s' },
        { name: 'title' },
        { name: 'link' },
        { name: 'linkHash' },
        {
            name: 'visited',
            type: 'boolean',
            convert: function(value, record) {
                var visited = window.localStorage.getItem('widget-settings-shopware-news-cache-visited');
                if (!visited) {
                    return false;
                }

                var visitedLinks = Ext.decode(visited) || {};

                return !!visitedLinks[record.data.linkHash];
            }
        }
    ]
});
//
<?php }} ?>