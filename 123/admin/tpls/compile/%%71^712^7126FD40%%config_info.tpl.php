<?php /* Smarty version 2.6.25, created on 2016-09-07 13:22:24
         compiled from config_info.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
  
            
            <div class="con box-green">
                <form method="post" action="?c=config&a=info">
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">系统标题：</th>
                            <td><input type="text" class="textinput w360" name="config[sysname]" value="<?php echo $this->_tpl_vars['config']['yl_sysname']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>系统地址：</th>
                            <td><input type="text" class="textinput w360" name="config[sysurl]" value="<?php echo $this->_tpl_vars['config']['yl_sysurl']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>联系我们URL：</th>
                            <td><input type="text" class="textinput w360" name="config[ceoconnect]" value="<?php echo $this->_tpl_vars['config']['yl_ceoconnect']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>管理员邮箱：</th>
                            <td><input type="text" class="textinput w360" name="config[ceoemail]" value="<?php echo $this->_tpl_vars['config']['yl_ceoemail']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>ICP备案信息：</th>
                            <td><input type="text" class="textinput w360" name="config[icp]" value="<?php echo $this->_tpl_vars['config']['yl_icp']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>ICP备案链接地址：</th>
                            <td><input type="text" class="textinput w360" name="config[icpurl]" value="<?php echo $this->_tpl_vars['config']['yl_icpurl']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>keywords：</th>
                            <td><input type="text" class="textinput w360" name="config[metakeyword]" value="<?php echo $this->_tpl_vars['config']['yl_metakeyword']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">description：</th>
                            <td><textarea class="w360" name="config[metadescrip]"><?php echo $this->_tpl_vars['config']['yl_metadescrip']; ?>
</textarea></td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">统计代码：</th>
                            <td><textarea class="w360" name="config[ipstat]"><?php echo $this->_tpl_vars['config']['yl_ipstat']; ?>
</textarea></td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="保存更改" />
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