<?php /* Smarty version 2.6.25, created on 2016-11-25 10:50:22
         compiled from template_form.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post">
                <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['sys']['goback']; ?>
"/>
                <?php if ($this->_tpl_vars['form']['id']): ?><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['form']['id']; ?>
"/><?php endif; ?>

                <div class="box-content">
                    <!--<div class="pb5">
                        <input type="button" value="备份当前模板" onclick="self.location = '?c=template_manage&a=backup&filename=<?php echo $this->_tpl_vars['form']['tpl_file']; ?>
'" /> 
                        <input type="button" value="恢复到备份模板" onclick="self.location = '?c=template_manage&a=restore&filename=<?php echo $this->_tpl_vars['form']['tpl_file']; ?>
'" /> 
                    </div>-->
                    <div class="pb5">
                        模板文件：<input type="text" name="tpl_file" value="<?php echo $this->_tpl_vars['tpl_file']; ?>
" /> (为空时系统默认分配一个文件名)
                        <input type="hidden" name="tpl_file_old" value="<?php echo $this->_tpl_vars['tpl_file']; ?>
" />
                    </div>
                    <div>
                        <textarea name="content" style="width:98%; height:420px; border:1px solid #ccc; overflow:hidden; overflow-y:scroll;"><?php echo $this->_tpl_vars['content']; ?>
</textarea>
                    </div>
                    <?php if ($this->_tpl_vars['show_msg']): ?><p>提示：修改模板后请手动更新静态页面</p><?php endif; ?>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input name="submit" type="submit" value="保存更改" />
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