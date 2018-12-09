<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:07:01
         compiled from "/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/theme/view/list/theme.js" */ ?>
<?php /*%%SmartyHeaderCode:5154514245c0d2185bda767-34407016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78128beec6bf9a84d076c29a2bfb10b324dab5da' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/themes/Backend/ExtJs/backend/theme/view/list/theme.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5154514245c0d2185bda767-34407016',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2185c65844_35829136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2185c65844_35829136')) {function content_5c0d2185c65844_35829136($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.view.list.Theme', {
    alias: 'widget.theme-listing',
    region: 'center',
    autoScroll: true,
    extend: 'Ext.panel.Panel',

    initComponent: function () {
        var me = this;

        me.items = [
            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'uploadTheme'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
            me.createDropZone(),
            /*<?php }?>*/
            me.createInfoView()
        ];

        me.callParent(arguments);
    },

    createDropZone: function () {
        var me = this;

        me.dropZone = Ext.create('Shopware.app.FileUpload', {
            requestURL: '<?php echo '/newshop/backend/Theme/upload';?>',
            enablePreviewImage: false,
            showInput: false,
            dropZoneText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'drop_zone','default'=>'Upload single theme using drag+drop (zip)','namespace'=>'backend/theme/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'drop_zone','default'=>'Upload single theme using drag+drop (zip)','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload single theme using drag+drop (zip)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'drop_zone','default'=>'Upload single theme using drag+drop (zip)','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        me.dropZone.snippets.messageTitle = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'upload_title','default'=>'Theme Manager','namespace'=>'backend/theme/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'upload_title','default'=>'Theme Manager','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme Manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'upload_title','default'=>'Theme Manager','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        me.dropZone.snippets.messageText = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'upload_message','default'=>'Theme uploaded successfully','namespace'=>'backend/theme/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'upload_message','default'=>'Theme uploaded successfully','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme uploaded successfully<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'upload_message','default'=>'Theme uploaded successfully','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';

        return me.dropZone;
    },

    createInfoView: function () {
        var me = this;

        me.infoView = Ext.create('Ext.view.View', {
            itemSelector: '.thumbnail',
            tpl: me.createTemplate(),
            store: me.store,
            cls: 'theme-listing',
            listeners: {
                render: Ext.bind(me.onAddInfoViewEvents, me)
            }
        });

        return me.infoView;
    },

    createTemplate: function () {
        var me = this;

        return new Ext.XTemplate(
            '{[this.getRows(values)]}',
            '<div class="x-clear"></div>', {

                getRows: function (values) {
                    var me = this,
                        templatesByVersion = {
                            'shopware5': [],
                        },
                        output = '';

                    Ext.each(values, function(item) {
                        templatesByVersion['shopware5'].push(item);
                    });

                    Ext.iterate(templatesByVersion, function(name, values) {
                        output += me.getRow(name, values);
                    });

                    return output;
                },

                getRow: function (name, values) {
                    var me = this,
                        snippets = {
                            'shopware5': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'designed_for_shopware5','default'=>'Designed for Shopware 5','namespace'=>'backend/theme/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'designed_for_shopware5','default'=>'Designed for Shopware 5','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Designed for Shopware 5<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'designed_for_shopware5','default'=>'Designed for Shopware 5','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                        };

                    if(values.length <= 0) {
                        return '';
                    }

                    return [
                        '<div class="theme--outer-container">',
                        '<div class="x-grid-group-hd x-grid-group-hd-collapsible">',
                        '<div class="x-grid-group-title">' + snippets[name] + '</div>',
                        '</div>',
                        '<div class="theme--container">',
                        me.getItem(values),
                        '<div class="x-clear"></div>',
                        '</div></div>'
                    ].join('');
                },

                getItem: function (values) {
                    var items = [];

                    Ext.each(values, function(theme) {
                        var itemTpl = '';

                        if(theme.enabled) {
                            itemTpl += '<div class="thumbnail enabled">';
                            itemTpl += '<div class="hint enabled"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'enabled','default'=>'Enabled','namespace'=>'backend/theme/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'enabled','default'=>'Enabled','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enabled<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'enabled','default'=>'Enabled','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></div>';
                        } else if(theme.preview) {
                            itemTpl += '<div class="thumbnail previewed">';
                            itemTpl += '<div class="hint preview"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'preview_hint','default'=>'Preview','namespace'=>'backend/theme/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'preview_hint','default'=>'Preview','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'preview_hint','default'=>'Preview','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></div>';
                        } else {
                            itemTpl += '<div class="thumbnail">'
                        }

                        itemTpl += '<div class="thumb"><div class="inner-thumb">';

                        if(theme.screen) {
                            itemTpl += Ext.String.format('<img src="[0]" alt="[1]" />', theme.screen, theme.name);
                        }

                        if(theme.hasConfig) {
                            itemTpl += '<div class="mapping-config">&nbsp;</div>';
                        }

                        itemTpl += '<span class="x-editable">' + theme.name + '</span>';
                        itemTpl += '</div></div></div>';

                        items.push(itemTpl);
                    });

                    return items.join('');
                }
            }
        );
    },

    onAddInfoViewEvents: function() {
        var me = this,
            view = me.infoView,
            viewEl = view.getEl();

        viewEl.on('click', function(evt, target) {
            var el = Ext.get(target), parent, themeContainer;

            if(!el.hasCls('x-grid-group-title')) {
                return;
            }
            parent = el.parent('.theme--outer-container');
            themeContainer = parent.down('.theme--container');

            if(parent.hasCls('x-grid-group-hd-collapsed')) {
                parent.removeCls('x-grid-group-hd-collapsed');
                themeContainer.setStyle('display', 'block');
            } else {
                parent.addCls('x-grid-group-hd-collapsed');
                themeContainer.setStyle('display', 'none');
            }
        });
    }
});

//

<?php }} ?>