<?php /* Smarty version 2.6.25, created on 2012-03-17 00:10:59
         compiled from zhuanti_class_edit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=zhuanti_class&a=save" method="post">
                <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
"/>
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['data']['id']; ?>
"/>
                <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                <div class="box-header">
                    <h4><?php if ($this->_tpl_vars['action'] == 'modify'): ?>修改<?php else: ?></>添加<?php endif; ?>专题分类</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">分类名称：</th>
                            <td><input type="text" name="name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" class="textinput w270" /></td>
                        </tr>                                          
                        <tr>
                            <th class="w120">外链地址：</th>
                            <td><input type="text" name="url" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" class="textinput w270" /></td>
                        </tr>                                          
                        <tr>
                        <tr>
                            <th  style="vertical-align:top;">所属专题：</th>
                            <td>                               
                                <select name="zhuanti">
                                    <option value="0">请选择……</option>
                                    <?php $_from = $this->_tpl_vars['zhuanti_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                    <option value="<?php echo $this->_tpl_vars['i']['id']; ?>
"<?php if ($this->_tpl_vars['data']['zhuanti'] == $this->_tpl_vars['i']['id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                        </tr>                        
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" /></a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>