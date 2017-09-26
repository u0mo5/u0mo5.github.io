<?php /* Smarty version 2.6.25, created on 2012-03-09 05:52:44
         compiled from notice_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="?c=notice&a=list_edit" method="post">
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                  <div class="table">
                  	<div class="th">
                    	<div class="form fl">
                        <input type="button" value="添加公告" onclick="window.location='?c=notice&a=edit&action=add'"/>&nbsp;
                        </div>
                    </div>
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    	<th width="41" class="text-center">删除</th>    
                        <th width="70">排序</th>            	
                        <th width="300">公告标题</th>
                        <th width="300">链接网址</th>
                        <th>修改</th>
                    </tr>
                    <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                    <tr>
                        <td class="text-center"><input rel="del" type="checkbox" name="delete[<?php echo $this->_tpl_vars['k']; ?>
]"  /></td>
                        <td><input type="text" name="order[<?php echo $this->_tpl_vars['k']; ?>
]" class="textinput" tabindex="11" value="<?php echo $this->_tpl_vars['i']['order']; ?>
" /></td>                 
                        <td><a href="?c=notice&a=edit&action=modify&id=<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['i']['name']; ?>
</a></td>
                        <td><div style="width:300px;" class="hideText" title="<?php echo $this->_tpl_vars['i']['url']; ?>
"><?php echo $this->_tpl_vars['i']['url']; ?>
</div></td>
                        <td><a href="?c=notice&a=edit&action=modify&id=<?php echo $this->_tpl_vars['k']; ?>
">修改</a></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    </table>

                    <div class="th">
                    	<div class="form">
                        <input value="提交修改" type="submit"/>&nbsp;
                        </div>
                    </div>
                </div>
				</form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
    <script type="text/javascript">
    	$(document).ready(function(){

			$("#js_data_source").find("input[rel='del']").each(function(i){
				$(this).bind("click",function(){
					var tr = $(this).parent().parent();
					var input = tr.find("input[rel='dis']");
					if(this.checked){
						$(input).attr("checked","");
						$(input).attr("disabled","disabled");
					}
					else{
						$(input).attr("disabled","");
					}
				});								
			});
			$("#js_data_source").find("input[rel='dis']").change(function(){
                if ($(this).next('input[type="hidden"]').val() == 1) $(this).next('input[type="hidden"]').val(0);
                else $(this).next('input[type="hidden"]').val(1);
			});

								   
		});
    </script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>