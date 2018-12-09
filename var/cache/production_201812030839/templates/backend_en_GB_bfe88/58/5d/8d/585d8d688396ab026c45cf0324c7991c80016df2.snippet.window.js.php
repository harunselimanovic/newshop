<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:59
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/order/view/batch/window.js" */ ?>
<?php /*%%SmartyHeaderCode:13578635005c0d2183248304-12012027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '585d8d688396ab026c45cf0324c7991c80016df2' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/order/view/batch/window.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13578635005c0d2183248304-12012027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2183264cb6_68705962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2183264cb6_68705962')) {function content_5c0d2183264cb6_68705962($_smarty_tpl) {?>/**
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
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order list main window.
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.view.batch.Window', {
    /**
     * Define that the order main window is an extension of the enlight application window
     *
     * @type { String }
     */
    extend:'Enlight.app.Window',
    /**
     * Set base css class prefix and module individual css class for css styling
     *
     * @type { String }
     */
    cls: Ext.baseCSSPrefix + 'order-batch-window',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     *
     * @type { String }
     */
    alias:'widget.order-batch-window',
    /**
     * Define window width
     *
     * @type { Number }
     */
    width: 600,
    /**
     * Define window height
     *
     * @type { String }
     */
    height:'90%',

    /**
     * @type { Boolean }
     */
    autoScroll: true,
    /**
     * Display no footer button for the detail window
     *
     * @type { Boolean }
     */
    footerButton:false,
    /**
     * As the window has two possible modes (expert and normal), stateful property might result in problems
     * depending on mode the user chooses
     *
     * @type { Boolean }
     */
    stateful:false,
    /**
     * The unique id for this object to use for state management purposes.
     */
    stateId:'shopware-order-batch-window',

    /**
     * @type { String }
     */
    title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title','default'=>'Batch processing','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window_title','default'=>'Batch processing','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Orders<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window_title','default'=>'Batch processing','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Set layout for this component to hbox
     *
     * @type { Object }
     */
    layout: {
        align: 'stretch',
        type: 'hbox'
    },

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
     */
    initComponent: function () {
        var me = this;

        me.items = Ext.create('Shopware.apps.Order.view.batch.Form', {
            flex: 1,
            records: me.records,
            orderStatusStore: me.orderStatusStore,
            paymentStatusStore: me.paymentStatusStore
        });

        me.callParent(arguments);
    }

});
//
<?php }} ?>