<?php /* Smarty version Smarty-3.1.7, created on 2015-08-06 12:25:54
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Users/DeleteUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117004864155c35252238c37-43769358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d72515fcb41275c7869a743a95401208aee4198' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Users/DeleteUser.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117004864155c35252238c37-43769358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'USERID' => 0,
    'DELETE_USER_NAME' => 0,
    'OCCUPY_COMPLETE_WIDTH' => 0,
    'USER_LIST' => 0,
    'USER_ID' => 0,
    'USER_MODEL' => 0,
    'PERMANENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c3525232e67',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c3525232e67')) {function content_55c3525232e67($_smarty_tpl) {?>
<div id="massEditContainer" class='modelContainer'><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><h3 id="massEditHeader"><?php echo vtranslate('Transfer records to user',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal" id="deleteUser" name="deleteUser" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
" /><div name='massEditContent'><div class="modal-body tabbable"><div class="tab-content massEditContent"><table class="massEditTable table table-bordered"><tr><td class="fieldLabel alignMiddle"><?php echo vtranslate('User to be deleted',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td class="fieldValue"><?php echo $_smarty_tpl->tpl_vars['DELETE_USER_NAME']->value;?>
</td></tr><tr><td class="fieldLabel alignMiddle"><?php echo vtranslate('Transfer records to user',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td class="fieldValue"><select class="chzn-select <?php if ($_smarty_tpl->tpl_vars['OCCUPY_COMPLETE_WIDTH']->value){?> row-fluid <?php }?>" name="tranfer_owner_id" data-validation-engine="validate[ required]" ><?php  $_smarty_tpl->tpl_vars['USER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['USER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_MODEL']->key => $_smarty_tpl->tpl_vars['USER_MODEL']->value){
$_smarty_tpl->tpl_vars['USER_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_MODEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</option><?php } ?></select></td></tr><?php if (!$_smarty_tpl->tpl_vars['PERMANENT']->value){?><tr><td colspan="2" style="padding-left: 20px;"><label class='checkbox'><input type="checkbox" class="checkbox" name="deleteUserPermanent" value="1" >&nbsp;<?php echo vtranslate('LBL_DELETE_USER_PERMANENTLY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td></tr><?php }?></table></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>
<?php }} ?>