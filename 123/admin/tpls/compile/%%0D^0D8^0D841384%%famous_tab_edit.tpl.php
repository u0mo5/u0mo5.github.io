<?php /* Smarty version 2.6.25, created on 2012-03-05 21:42:30
         compiled from famous_tab_edit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=famous_tab&a=save" method="post">
                <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
"/>
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
"/>
                <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                <div class="box-header">
                    <h4><?php if ($this->_tpl_vars['action'] == 'modify'): ?>修改<?php else: ?></>添加<?php endif; ?>网址</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">标签名称：</th>
                            <td><input type="text" name="name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>ifreme网址：</th>
                            <td><input type="text" name="url" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" class="textinput w270" /></td>
                        </tr>
                        
                        <tr>
                            <th>排序：</th>
                            <td><input type="text" name="order" value="<?php echo $this->_tpl_vars['data']['order']; ?>
" class="textinput w60"   onkeyup="value=value.replace(/[^\d]/g,'')" /></td>
                        </tr>
                        
                        <tr>
                            <th>是否缓存：</th>
                            <td><label><input type="radio" name="nocache" value='0' <?php if ($this->_tpl_vars['data']['nocache'] == 0): ?>checked="checked"<?php endif; ?>  />是</label>&nbsp;&nbsp;&nbsp;<label><input type="radio" name="nocache" value='1' <?php if ($this->_tpl_vars['data']['nocache']): ?>checked="checked"<?php endif; ?> />否</label>
								
                                
                                </td>
                        </tr>
                        <tr>
                        	<th>&nbsp;</th>
                            <td><p>这里缓存是指页面在不刷新情况下，只加载iframe一次,避免来回切换Tab时每次都去加载。<br />
                                	如选择不缓存则每次切换Tab时都重新加载，若当前Tab没有被激活,则iframe会被清空。<br />
									<em style="color:red; font-style:normal">建议只在“股票版块”等自刷新数据的iframe选择不缓存。</em><br />

                                </p>
                                
                                </td>
                        </tr>
                        
                        
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" /></a> 或 <a href="?c=famous_tab&a=index&classid=<?php echo $this->_tpl_vars['data']['class']; ?>
">取消</a>
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