<?php /* Smarty version 2.6.25, created on 2012-03-05 21:50:40
         compiled from template_select.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="#">
                    <div class="box-header">
                        <h4>当前主题 (<?php echo $this->_tpl_vars['cur_tpl']['name']; ?>
)</h4>
                    </div>
                    <div class="box-content">
                    	<div class="preview">
                        	<img src="<?php echo $this->_tpl_vars['cur_tpl']['preview']; ?>
" />
                        </div>
                    </div>
                    <?php if ($this->_tpl_vars['other_tpls']): ?>
                     <div class="box-header">
                        <h4>可用主题</h4>
                    </div>
                    <div id="themeList" class="box-content">
                    	<div class="clearfix">
                            <?php $_from = $this->_tpl_vars['other_tpls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                        	<div class="preview">
                            	<img src="<?php echo $this->_tpl_vars['i']['preview']; ?>
" />
                                <p><?php echo $this->_tpl_vars['i']['name']; ?>
</p>
                                <p><a href="?c=template_manage&a=cur_tpl&apply=<?php echo $this->_tpl_vars['i']['path']; ?>
">启用</a> | <a href="?c=template_manage&a=cur_tpl&apply=<?php echo $this->_tpl_vars['i']['path']; ?>
&mkhtml=1">启用并生成首页</a> | 
                                <a href="?c=template_manage&a=cur_tpl&delete=<?php echo $this->_tpl_vars['i']['path']; ?>
" onclick="return confirm('不可恢复，确认删除吗？');">删除</a></p>
                            </div>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="box-footer">
                        <div class="box-footer-inner">
                        	&nbsp;
                        </div>
                    </div>
                </form>
                <style type="text/css">
                	.preview { height:190px; width:225px; overflow:hidden;}
                    .preview img{ width:225px; height:190px; display:block;}
                    #themeList .preview{ float:left; margin: 0 5px; height:auto; text-align:center;}
                    #themeList .preview p { line-height:22px;}
                </style>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
</div><!--/ wrap-->
</body>
</html>