<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:06:41
         compiled from "/Applications/MAMP/htdocs/newshop/engine/Library/ExtJs/components/Ext.ux.RowExpander.js" */ ?>
<?php /*%%SmartyHeaderCode:11809216055c0d217173d372-08605541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c21f2d6801424adb15fda53b9aa9c985c2d72f7d' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/engine/Library/ExtJs/components/Ext.ux.RowExpander.js',
      1 => 1543822814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11809216055c0d217173d372-08605541',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d2171773d68_96263773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d2171773d68_96263773')) {function content_5c0d2171773d68_96263773($_smarty_tpl) {?>
/**
 * @class Ext.ux.RowExpander
 * @extends Ext.AbstractPlugin
 * Plugin (ptype = 'rowexpander') that adds the ability to have a Column in a grid which enables
 * a second row body which expands/contracts.  The expand/contract behavior is configurable to react
 * on clicking of the column, double click of the row, and/or hitting enter while a row is selected.
 *
 * @ptype rowexpander
 */
// feature idea to enable Ajax loading and then the content
// cache would actually make sense. Should we dictate that they use
// data or support raw html as well?

/**
 * @class Ext.ux.RowExpander
 * @extends Ext.AbstractPlugin
 * Plugin (ptype = 'rowexpander') that adds the ability to have a Column in a grid which enables
 * a second row body which expands/contracts.  The expand/contract behavior is configurable to react
 * on clicking of the column, double click of the row, and/or hitting enter while a row is selected.
 *
 * @ptype rowexpander
 */
Ext.define('Ext.ux.RowExpander', {
    extend: 'Ext.AbstractPlugin',

    requires: [
        'Ext.grid.feature.RowBody',
        'Ext.grid.feature.RowWrap'
    ],

    alias: 'plugin.rowexpander',

    rowBodyTpl: null,

    /**
     * cfg Boolean expandOnEnter
     * true to toggle selected row(s) between expanded/collapsed when the enter
     * key is pressed (defaults to true).
     */
    expandOnEnter: true,

    /**
     * cfg Boolean expandOnDblClick
     * true to toggle a row between expanded/collapsed when double clicked
     * (defaults to true).
     */
    expandOnDblClick: true,

    /**
     * cfg Boolean selectRowOnExpand
     * true to select a row when clicking on the expander icon
     * (defaults to false).
     */
    selectRowOnExpand: false,

    rowBodyTrSelector: '.x-grid-rowbody-tr',
    rowBodyHiddenCls: 'x-grid-row-body-hidden',
    rowCollapsedCls: 'x-grid-row-collapsed',

    rowsExpanded: new Ext.util.MixedCollection(),

    renderer: function(value, metadata, record, rowIdx, colIdx) {
        if (colIdx === 0) {
            metadata.tdCls = 'x-grid-td-expander';
        }
        return '<div class="x-grid-row-expander">&#160;</div>';
    },

    /**
     * @event expandbody
     * Fired through the grid's View
     * @param [HTMLElement] rowNode The tr element which owns the expanded row.
     * @param [Ext.data.Model] record The record providing the data.
     * @param [HTMLElement] expandRow The tr element containing the expanded data.
     */
    /**
     * @event collapsebody
     * Fired through the grid's View.
     * @param [HTMLElement] rowNode The tr element which owns the expanded row.
     * @param [Ext.data.Model] record The record providing the data.
     * @param [HTMLElement] expandRow The tr element containing the expanded data.
     */

    constructor: function() {
        this.callParent(arguments);
        var grid = this.getCmp();
        this.recordsExpanded = {};
        // <debug>
        if (!this.rowBodyTpl) {
            Ext.Error.raise("The 'rowBodyTpl' config is required and is not defined.");
        }
        // </debug>
        // TODO: if XTemplate/Template receives a template as an arg, should
        // just return it back!
        var rowBodyTpl = Ext.create('Ext.XTemplate', this.rowBodyTpl),
            features = [{
                ftype: 'rowbody',
                columnId: this.getHeaderId(),
                recordsExpanded: this.recordsExpanded,
                rowBodyHiddenCls: this.rowBodyHiddenCls,
                rowCollapsedCls: this.rowCollapsedCls,
                getAdditionalData: this.getRowBodyFeatureData,
                getRowBodyContents: function(data) {
                    return rowBodyTpl.applyTemplate(data);
                }
            },{
                ftype: 'rowwrap'
            }];

        if (grid.features) {
            grid.features = features.concat(grid.features);
        } else {
            grid.features = features;
        }

        // NOTE: features have to be added before init (before Table.initComponent)
    },

    init: function(grid) {
        this.callParent(arguments);

        // Columns have to be added in init (after columns has been used to create the
        // headerCt). Otherwise, shared column configs get corrupted, e.g., if put in the
        // prototype.
        grid.headerCt.insert(0, this.getHeaderConfig());
        grid.on('render', this.bindView, this, { single: true });
    },

    getHeaderId: function() {
        if (!this.headerId) {
            this.headerId = Ext.id();
        }
        return this.headerId;
    },

    getRowBodyFeatureData: function(data, idx, record, orig) {
        var o = Ext.grid.feature.RowBody.prototype.getAdditionalData.apply(this, arguments),
            id = this.columnId;
        o.rowBodyColspan = o.rowBodyColspan - 1;
        o.rowBody = this.getRowBodyContents(data);
        o.rowCls = this.recordsExpanded[record.internalId] ? '' : this.rowCollapsedCls;
        o.rowBodyCls = this.recordsExpanded[record.internalId] ? '' : this.rowBodyHiddenCls;
        o[id + '-tdAttr'] = ' valign="top" rowspan="2" ';
        if (orig[id+'-tdAttr']) {
            o[id+'-tdAttr'] += orig[id+'-tdAttr'];
        }
        return o;
    },

    bindView: function() {
        var view = this.getCmp().getView(),
            viewEl;

        if (!view.rendered) {
            view.on('render', this.bindView, this, { single: true });
        } else {
            viewEl = view.getEl();
            if (this.expandOnEnter) {
                this.keyNav = Ext.create('Ext.KeyNav', viewEl, {
                    'enter' : this.onEnter,
                    scope: this
                });
            }
            if (this.expandOnDblClick) {
                view.on('itemdblclick', this.onDblClick, this);
            }
            this.view = view;
        }
    },

    onEnter: function(e) {
        var view = this.view,
            ds   = view.store,
            sm   = view.getSelectionModel(),
            sels = sm.getSelection(),
            ln   = sels.length,
            i = 0,
            rowIdx;

        for (; i < ln; i++) {
            rowIdx = ds.indexOf(sels[i]);
            this.toggleRow(rowIdx);
        }
    },

    toggleRow: function(rowIdx) {
        var rowNode = this.view.getNode(rowIdx),
            row = Ext.get(rowNode),
            nextBd = Ext.get(row).down(this.rowBodyTrSelector),
            record = this.view.getRecord(rowNode),
            grid = this.getCmp();

        if (row.hasCls(this.rowCollapsedCls)) {
            row.removeCls(this.rowCollapsedCls);
            nextBd.removeCls(this.rowBodyHiddenCls);
            this.rowsExpanded.add(rowIdx.id, rowIdx);

            this.recordsExpanded[record.internalId] = true;
            this.view.fireEvent('expandbody', rowNode, record, nextBd.dom);
        } else {
            row.addCls(this.rowCollapsedCls);
            nextBd.addCls(this.rowBodyHiddenCls);
            this.rowsExpanded.removeAtKey(rowIdx.id);
            this.recordsExpanded[record.internalId] = false;
            this.view.fireEvent('collapsebody', rowNode, record, nextBd.dom);
        }
    },

    /**
     * Helper function which collapse all expanded rows and
     * fire for each expanded row the collapsebody event.
     */
    collapseAll: function() {
        var me = this;

        if (me.rowsExpanded.length === 0) {
            return;
        }
        //iterate all expanded rows. The collection contains the tr item
        me.rowsExpanded.each(function(item) {
            var rowNode = me.view.getNode(item),
                row = Ext.get(rowNode),
                nextBd = Ext.get(row).down(me.rowBodyTrSelector),
                record = me.view.getRecord(rowNode);

            //add the collapsed class and fire the event
            row.addCls(me.rowCollapsedCls);
            nextBd.addCls(me.rowBodyHiddenCls);

            if (record !== Ext.undefined) {
                me.recordsExpanded[record.internalId] = false;
                me.view.fireEvent('collapsebody', rowNode, record, nextBd.dom);
            }
        });

        //at least clear the collection.
        me.rowsExpanded.clear();
    },

    onDblClick: function(view, cell, rowIdx, cellIndex, e) {

        this.toggleRow(rowIdx);
    },

    getHeaderConfig: function() {
        var me                = this,
            toggleRow         = Ext.Function.bind(me.toggleRow, me),
            selectRowOnExpand = me.selectRowOnExpand;

        return {
            id: this.getHeaderId(),
            width: 24,
            sortable: false,
            resizable: false,
            draggable: false,
            hideable: false,
            menuDisabled: true,
            cls: Ext.baseCSSPrefix + 'grid-header-special',
            renderer: function(value, metadata) {
                metadata.tdCls = Ext.baseCSSPrefix + 'grid-cell-special';

                return '<div class="' + Ext.baseCSSPrefix + 'grid-row-expander">&#160;</div>';
            },
            processEvent: function(type, view, cell, recordIndex, cellIndex, e) {
                if (type == "mousedown" && e.getTarget('.x-grid-row-expander')) {
                    var row = e.getTarget('.x-grid-row');
                    toggleRow(row);
                    return selectRowOnExpand;
                }
            }
        };
    }
});



<?php }} ?>