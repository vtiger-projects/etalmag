<?php /* Smarty version Smarty-3.1.7, created on 2015-08-19 19:37:17
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/GetPDFActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73770105955d4daed5b83f5-71034136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4517581af2a8b38b496fc7b0ef7d8845004d76c8' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/GetPDFActions.tpl',
      1 => 1439038474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73770105955d4daed5b83f5-71034136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ENABLE_EMAILMAKER' => 0,
    'ENABLE_PDFMAKER' => 0,
    'PDFTEMPLATEID' => 0,
    'TEMPLATE_LANGUAGES' => 0,
    'CURRENT_LANGUAGE' => 0,
    'lang_key' => 0,
    'MODULE' => 0,
    'ID' => 0,
    'PDFMAKER_MOD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55d4daed677fa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4daed677fa')) {function content_55d4daed677fa($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/html/crm/libraries/Smarty/libs/plugins/function.html_options.php';
?>
<?php if ($_smarty_tpl->tpl_vars['ENABLE_EMAILMAKER']->value!='true'){?>
    <?php $_smarty_tpl->tpl_vars["EMAIL_FUNCTION"] = new Smarty_variable("sendPDFmail", null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars["EMAIL_FUNCTION"] = new Smarty_variable("sendEMAILMakerPDFmail", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ENABLE_PDFMAKER']->value=='true'){?>
<div class="row-fluid">
	<div class="span10">
            <ul class="nav nav-list">
		<input type="hidden" name="template_id" id="template_id" value="<?php echo $_smarty_tpl->tpl_vars['PDFTEMPLATEID']->value;?>
"/>
                <?php if (sizeof($_smarty_tpl->tpl_vars['TEMPLATE_LANGUAGES']->value)>1){?>
			<li>   	
			    <select name="template_language" id="template_language" class="detailedViewTextBox" style="width:130%;" size="1">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['TEMPLATE_LANGUAGES']->value,'selected'=>$_smarty_tpl->tpl_vars['CURRENT_LANGUAGE']->value),$_smarty_tpl);?>

			    </select>
			</li>
		<?php }else{ ?>
			<?php  $_smarty_tpl->tpl_vars["lang"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lang"]->_loop = false;
 $_smarty_tpl->tpl_vars["lang_key"] = new Smarty_Variable;
 $_from = ($_smarty_tpl->tpl_vars['TEMPLATE_LANGUAGES']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["lang"]->key => $_smarty_tpl->tpl_vars["lang"]->value){
$_smarty_tpl->tpl_vars["lang"]->_loop = true;
 $_smarty_tpl->tpl_vars["lang_key"]->value = $_smarty_tpl->tpl_vars["lang"]->key;
?>
		    	<input type="hidden" name="template_language" id="template_language" value="<?php echo $_smarty_tpl->tpl_vars['lang_key']->value;?>
"/>
			<?php } ?>
		<?php }?>
                
		<li>
		    <a href="javascript:;" onclick="if((navigator.userAgent.match(/iPad/i)!= null)||(navigator.userAgent.match(/iPhone/i)!= null)||(navigator.userAgent.match(/iPod/i)!= null)) window.open('index.php?module=PDFMaker&relmodule=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=CreatePDFFromTemplate&record=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&language='+document.getElementById('template_language').value); else document.location.href='index.php?module=PDFMaker&relmodule=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=CreatePDFFromTemplate&record=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&language='+document.getElementById('template_language').value;" class="webMnu" style="padding-left:10px;"><img src="layouts/vlayout/modules/PDFMaker/images/actionGeneratePDF.gif" hspace="5" align="absmiddle" border="0" style="border-radius:3px;" /> <?php echo vtranslate('LBL_EXPORT','PDFMaker');?>
</a>
		</li>
                <li>
                    <a href="javascript:PDFMakerCommon.showPDFBreakline('<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
');" class="webMnu" style="padding-left:10px;"><img src="layouts/vlayout/modules/PDFMaker/images/PDF_bl.png" hspace="5" align="absmiddle" border="0" style="border-radius:3px;" /><?php echo vtranslate('LBL_PRODUCT_BREAKLINE','PDFMaker');?>
</a>                
                    <div id="PDFBreaklineDiv" style="display:none; width:350px; position:absolute;" class="layerPopup"></div>                
                </li>
                <li>
                    <a href="javascript:PDFMakerCommon.showproductimages('<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
');" class="webMnu" style="padding-left:10px;"><img src="layouts/vlayout/modules/PDFMaker/images/PDF_img.png" hspace="5" align="absmiddle" border="0" style="border-radius:3px;" /> <?php echo vtranslate('LBL_PRODUCT_IMAGE','PDFMaker');?>
</a>                
                </li>
            </ul>
	</div>
	<br clear="all"/>
 	<div id="alert_doc_title" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['PDFMAKER_MOD']->value['ALERT_DOC_TITLE'];?>
</div>
</div>
<?php }else{ ?>
<div class="row-fluid">
	<div class="span10">
		<ul class="nav nav-list">
			<li><a href="index.php?module=PDFMaker&view=List"><?php echo vtranslate('LBL_PLEASE_FINISH_INSTALLATION','PDFMaker');?>
</a></li>
		</ul>
	</div>
</div>
<?php }?>
<?php }} ?>