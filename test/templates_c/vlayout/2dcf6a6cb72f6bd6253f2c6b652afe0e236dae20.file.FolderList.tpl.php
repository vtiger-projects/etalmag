<?php /* Smarty version Smarty-3.1.7, created on 2015-10-21 19:54:13
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/FolderList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16721112355627ed65bc5288-53790260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dcf6a6cb72f6bd6253f2c6b652afe0e236dae20' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/FolderList.tpl',
      1 => 1438554774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16721112355627ed65bc5288-53790260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOLDERS' => 0,
    'FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5627ed65bfd39',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627ed65bfd39')) {function content_5627ed65bfd39($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['FOLDERS']->value){?><div id="foldersList" class="row-fluid"><div class="span10"><ul class="nav nav-list"><?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?><li><a class="mm_folder" id='_mailfolder_<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
' href='#<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
' onclick="MailManager.clearSearchString(); MailManager.folder_open('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
'); "><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount()){?><b><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
 (<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount();?>
)</b><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
<?php }?></a></li><?php } ?></ul></div></div><?php }?><?php }} ?>