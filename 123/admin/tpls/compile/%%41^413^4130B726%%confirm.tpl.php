<?php /* Smarty version 2.6.25, created on 2017-07-14 13:29:32
         compiled from confirm.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con">
                <div class="tips warn-ico">
                <form action="<?php echo $this->_tpl_vars['action_url']; ?>
" method="post">
                    <input type="hidden" name="step" value="1"/>
                    <input type="hidden" name="delete" value="<?php echo $this->_tpl_vars['delete']; ?>
"/>
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                   	    <?php echo $this->_tpl_vars['message']; ?>
<input type="submit" value="确定删除" /> 或 <a href="<?php echo $this->_tpl_vars['referer']; ?>
">取消</a>
                    </form>
                </div>                
      </div><!--/ con-->
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
</body>
</html>