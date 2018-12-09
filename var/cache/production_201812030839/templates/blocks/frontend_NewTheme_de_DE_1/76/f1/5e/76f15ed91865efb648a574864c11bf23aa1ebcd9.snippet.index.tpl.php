<?php /* Smarty version Smarty-3.1.12, created on 2018-12-09 15:05:34
         compiled from "/Applications/MAMP/htdocs/newshop/custom/plugins/FroshProfiler/Resources/views/@Toolbar/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21298435115c0d212e8f7bc4-59800028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f15ed91865efb648a574864c11bf23aa1ebcd9' => 
    array (
      0 => '/Applications/MAMP/htdocs/newshop/custom/plugins/FroshProfiler/Resources/views/@Toolbar/index.tpl',
      1 => 1544364064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21298435115c0d212e8f7bc4-59800028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sUsedSnippets' => 0,
    'snippet' => 0,
    'sProfilerCollectors' => 0,
    'sProfilerCollector' => 0,
    'sProfilerID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5c0d212e934e25_75685160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d212e934e25_75685160')) {function content_5c0d212e934e25_75685160($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['sUsedSnippets']->value)){?>
    
    <a class="btn is--primary btn-snippet-fixed" href="#" onclick="$.modal.open($('#usedSnippets').html(), {width: $(window).width(), height: $(window).height() - 100, title: 'Used snippets'}); return false;">Used snippets on this site (<?php echo count($_smarty_tpl->tpl_vars['sUsedSnippets']->value);?>
)</a>
    <div id="usedSnippets" style="display: none">
        <table class="table-fill">
            <thead>
            <tr>
                <td>Namespace</td>
                <td>Name</td>
                <td>Content</td>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['snippet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['snippet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sUsedSnippets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['snippet']->key => $_smarty_tpl->tpl_vars['snippet']->value){
$_smarty_tpl->tpl_vars['snippet']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['snippet']->value['namespace'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['snippet']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['snippet']->value['content'];?>
</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
<?php }?>

<style>.sf-minitoolbar{background-color:#222;border-top-left-radius:4px;bottom:0;display:none;height:30px;padding:6px 6px 0;position:fixed;right:0;z-index:99999}.sf-minitoolbar a{display:block}.sf-minitoolbar svg,.sf-minitoolbar img{max-height:24px;max-width:24px}.sf-toolbarreset *{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;vertical-align:baseline}.sf-toolbarreset{background-color:#222;bottom:0;box-shadow:0 -1px 0 rgba(0,0,0,0.2);color:#EEE;font:11px Arial,sans-serif;left:0;margin:0;padding:0 36px 0 0;position:fixed;right:0;text-align:left;z-index:99999}.sf-toolbarreset abbr{border:dashed #777;border-width:0 0 1px}.sf-toolbarreset svg,.sf-toolbarreset img{max-height:24px;max-width:24px}.sf-toolbarreset .hide-button{background:#444;cursor:pointer;position:absolute;top:0;right:0;width:36px;height:36px;text-align:center;justify-content:center;display:flex;align-items:center}.sf-toolbarreset .hide-button i{font-size:24px;color:#fff}.sf-toolbarreset .hide-button svg{max-height:18px}.sf-toolbar-block{cursor:default;display:block;float:left;height:36px;margin-right:0;white-space:nowrap}.sf-toolbar-block>a,.sf-toolbar-block>a:hover{display:block;text-decoration:none}.sf-toolbar-block span{display:inline-block}.sf-toolbar-block .sf-toolbar-value{color:#F5F5F5;font-size:13px;line-height:36px;padding:0}.sf-toolbar-block .sf-toolbar-label,.sf-toolbar-block .sf-toolbar-class-separator{color:#AAA;font-size:12px}.sf-toolbar-block .sf-toolbar-info{border-collapse:collapse;display:table;z-index:100000}.sf-toolbar-block hr{border-top:1px solid #777;margin:4px 0;padding-top:4px}.sf-toolbar-block .sf-toolbar-info-piece{border-bottom:solid transparent 3px;display:table-row}.sf-toolbar-block .sf-toolbar-info-piece-additional,.sf-toolbar-block .sf-toolbar-info-piece-additional-detail{display:none}.sf-toolbar-block .sf-toolbar-info-group{margin-bottom:4px;padding-bottom:2px;border-bottom:1px solid #333333}.sf-toolbar-block .sf-toolbar-info-group:last-child{margin-bottom:0;padding-bottom:0;border-bottom:none}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status{padding:2px 5px;margin-bottom:0}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status+.sf-toolbar-status{margin-left:4px}.sf-toolbar-block .sf-toolbar-info-piece:last-child{margin-bottom:0}.sf-toolbar-block .sf-toolbar-info-piece a{color:#99CDD8;text-decoration:underline}.sf-toolbar-block .sf-toolbar-info-piece a:hover{text-decoration:none}.sf-toolbar-block .sf-toolbar-info-piece b{color:#AAA;display:table-cell;font-size:11px;padding:4px 8px 4px 0}.sf-toolbar-block .sf-toolbar-info-piece span{color:#F5F5F5;font-size:12px}.sf-toolbar-block .sf-toolbar-info{background-color:#444;bottom:36px;color:#F5F5F5;display:none;padding:9px 0;position:absolute}.sf-toolbar-block .sf-toolbar-info:empty{visibility:hidden}.sf-toolbar-block .sf-toolbar-status{display:inline-block;color:#FFF;background-color:#666;padding:3px 6px;margin-bottom:2px;vertical-align:middle;min-width:6px;min-height:13px}.sf-toolbar-block .sf-toolbar-status-green{background-color:rgba(117,158,43,0.8)}.sf-toolbar-block .sf-toolbar-status-red{background-color:rgba(200,43,43,0.8)}.sf-toolbar-block .sf-toolbar-status-yellow{background-color:#bd8400}.sf-toolbar-block.sf-toolbar-status-green{background-color:rgba(117,158,43,0.8);color:#FFF}.sf-toolbar-block.sf-toolbar-status-red{background-color:rgba(200,43,43,0.8);color:#FFF}.sf-toolbar-block.sf-toolbar-status-yellow{background-color:#bd8400;color:#FFF}.sf-toolbar-block-request .sf-toolbar-status{color:#FFF;display:inline-block;font-size:14px;height:36px;line-height:36px;padding:0 10px}.sf-toolbar-block-request .sf-toolbar-info-piece a{text-decoration:none}.sf-toolbar-block-request .sf-toolbar-info-piece a:hover{text-decoration:underline}.sf-toolbar-status-green .sf-toolbar-label,.sf-toolbar-status-yellow .sf-toolbar-label,.sf-toolbar-status-red .sf-toolbar-label{color:#FFF}.sf-toolbar-status-green svg path,.sf-toolbar-status-red svg path,.sf-toolbar-status-yellow svg path{fill:#FFF}.sf-toolbar-block-config:not(.shopware-block) svg path{fill:#FFF}.sf-toolbar-block .sf-toolbar-icon{display:block;height:36px;padding:0 7px}.sf-toolbar-block-request .sf-toolbar-icon{padding-left:0;padding-right:0}.sf-toolbar-block .sf-toolbar-icon img,.sf-toolbar-block .sf-toolbar-icon svg{border-width:0;position:relative;top:8px}.sf-toolbar-block .sf-toolbar-icon img+span,.sf-toolbar-block .sf-toolbar-icon svg+span{margin-left:4px}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value{margin-left:4px}.sf-toolbar-block:hover{position:relative}.sf-toolbar-block:hover .sf-toolbar-icon{background-color:#444;position:relative;z-index:10002}.sf-toolbar-block:hover .sf-toolbar-info{display:block;padding:10px;max-height:480px;word-wrap:break-word;overflow:hidden;overflow-y:auto}.sf-toolbar-info-piece b.sf-toolbar-ajax-info{color:#F5F5F5}.sf-toolbar-ajax-requests{width:100%}.sf-toolbar-ajax-requests td{background-color:#444;border-bottom:1px solid #777;color:#F5F5F5;font-size:12px;padding:4px}.sf-toolbar-ajax-requests tr:last-child td{border-bottom:0}.sf-toolbar-ajax-requests th{background-color:#222;border-bottom:0;color:#AAA;font-size:11px;padding:4px}.sf-ajax-request-url{max-width:300px;line-height:9px;overflow:hidden;text-overflow:ellipsis}.sf-toolbar-ajax-requests .sf-ajax-request-url a{text-decoration:none}.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover{text-decoration:underline}.sf-ajax-request-duration{text-align:right}.sf-ajax-request-loading{-webkit-animation:sf-blink .5s ease-in-out infinite;-o-animation:sf-blink .5s ease-in-out infinite;-moz-animation:sf-blink .5s ease-in-out infinite;animation:sf-blink .5s ease-in-out infinite}@-webkit-keyframes sf-blink{0%{background:#222}50%{background:#444}100%{background:#222}}@-moz-keyframes sf-blink{0%{background:#222}50%{background:#444}100%{background:#222}}@keyframes sf-blink{0%{background:#222}50%{background:#444}100%{background:#222}}.sf-toolbar-block-dump pre.sf-dump{background-color:#222;border-color:#777;border-radius:0;margin:6px 0 12px 0}.sf-toolbar-block-dump pre.sf-dump:last-child{margin-bottom:0}.sf-toolbar-block-dump .sf-toolbar-info{max-width:none;width:100%;position:fixed;box-sizing:border-box;left:0;}.sf-toolbar-block-dump .sf-toolbar-info-piece{display:block}.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line{color:#AAA;margin-left:4px}.sf-toolbar-block-dump .sf-toolbar-info img{display:none}.sf-toolbar-icon .sf-toolbar-label,.sf-toolbar-icon .sf-toolbar-value{display:none}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label{display:inline-block}.sf-toolbar-block .sf-toolbar-info-piece-additional-detail{color:#AAA;font-size:12px}.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail{color:#FFF}@media (min-width:768px){.sf-toolbar-icon .sf-toolbar-label,.sf-toolbar-icon .sf-toolbar-value{display:inline}.sf-toolbar-block .sf-toolbar-icon img,.sf-toolbar-block .sf-toolbar-icon svg{width:32px;top:6px}.sf-toolbar-block-config:hover .sf-toolbar-info{right:0}.sf-toolbar-block-time .sf-toolbar-icon svg+span,.sf-toolbar-block-memory .sf-toolbar-icon svg+span{margin-left:0}.sf-toolbar-block .sf-toolbar-icon{padding:0 10px}.sf-toolbar-block-time .sf-toolbar-icon{padding-right:5px}.sf-toolbar-block-memory .sf-toolbar-icon{padding-left:5px}.sf-toolbar-block-request .sf-toolbar-icon{padding-left:0;padding-right:0}.sf-toolbar-block-request .sf-toolbar-status+.sf-toolbar-label{margin-left:4px}.sf-toolbar-block-request .sf-toolbar-label+.sf-toolbar-value{margin-right:10px}.sf-toolbar-block-request:hover .sf-toolbar-info{max-width:none}.sf-toolbar-block .sf-toolbar-info-piece b{font-size:12px}.sf-toolbar-block .sf-toolbar-info-piece span{font-size:13px}.sf-toolbar-block-right{float:right;margin-left:0;margin-right:0}}@media (min-width:1024px){.sf-toolbar-block .sf-toolbar-info-piece-additional,.sf-toolbar-block .sf-toolbar-info-piece-additional-detail{display:inline-block}.sf-toolbar-block .sf-toolbar-info-piece-additional:empty,.sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty{display:none}}.icon-toolbar{font-size:20px;color:#fff;position:relative;bottom:-2px;left:-2px}.table-fill{width:100%}.btn-snippet-fixed{position:fixed;bottom:50px;right:20px;z-index:2999}
</style>
<div class="sf-toolbarreset clear-fix">
    <?php  $_smarty_tpl->tpl_vars['sProfilerCollector'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sProfilerCollector']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sProfilerCollectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sProfilerCollector']->key => $_smarty_tpl->tpl_vars['sProfilerCollector']->value){
$_smarty_tpl->tpl_vars['sProfilerCollector']->_loop = true;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['sProfilerCollector']->value->getToolbarTemplate())){?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sProfilerCollector']->value->getToolbarTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
    <?php } ?>
    <a class="hide-button" title="Close Toolbar" onclick="closeToolbar()">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path fill="#AAAAAA" d="M21.1,18.3c0.8,0.8,0.8,2,0,2.8c-0.4,0.4-0.9,0.6-1.4,0.6s-1-0.2-1.4-0.6L12,14.8l-6.3,6.3
    c-0.4,0.4-0.9,0.6-1.4,0.6s-1-0.2-1.4-0.6c-0.8-0.8-0.8-2,0-2.8L9.2,12L2.9,5.7c-0.8-0.8-0.8-2,0-2.8c0.8-0.8,2-0.8,2.8,0L12,9.2
    l6.3-6.3c0.8-0.8,2-0.8,2.8,0c0.8,0.8,0.8,2,0,2.8L14.8,12L21.1,18.3z"/>
</svg>
    </a>
</div>
<script type="application/javascript">
    function applyProfilerHeader() {
        if (window.CSRF) {
            var ajaxBeforeSend = window.CSRF._ajaxBeforeSend;

            window.CSRF._ajaxBeforeSend = function (event, request) {
                ajaxBeforeSend.apply(window.CSRF, arguments);
                request.setRequestHeader('X-Profiler', '<?php echo $_smarty_tpl->tpl_vars['sProfilerID']->value;?>
');
            };
        }
    }

    applyProfilerHeader();

    if (typeof document.asyncReady !== 'undefined') {
        document.asyncReady(applyProfilerHeader);
    }


    function closeToolbar()
    {
        document.querySelector('.sf-toolbarreset').remove();
        document.cookie = "disableProfile=1";
    }
</script>
<?php }} ?>