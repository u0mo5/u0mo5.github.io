<?php /* Smarty version 2.6.25, created on 2012-03-16 03:33:36
         compiled from member_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'member_list.tpl', 89, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<script type="text/javascript">
	var list;
	$(document).ready(function(){
		list = $("#tb1").find("input[type='checkbox']").not("[rel]");
		list.each(function(i){
			$(this).bind("click",function(){
				CheckHanler();
			});
		});
	});
	
	var CheckHanler = function(){
		list.each(function(i){
			var input = $(this);
			if(this.checked){
				input.parent().parent().addClass("checked");
			}
			else{
				input.parent().parent().removeClass("checked");
			}
		});
	}
	
	var checkTb1 = function(selectType){
		CheckInit("tb1",selectType);
	}
	
	var CheckInit = function(tabelId,selectType){
		if(list == undefined){
			list = $("#" + tabelId).find("input[type='checkbox']").not("[rel]");
		}
		CheckControl(list,selectType,CheckHanler)
	}
	
	var CheckControl = function(childs,selectType,checkHandler){
		for(var i = 0,len = childs.length; i < len; i++){
			switch(selectType){
				case 1:	//全选
					childs[i].checked = true;
					break;
				case 2:	//不选
					childs[i].checked = false;
					break;
				case 3:	//反选
					childs[i].checked = !childs[i].checked;
					break;
			}
		}
		if(checkHandler){
			checkHandler();
		}
	}
</script>


    <div class="container">

        <div id="main">
            
            <div class="con ">
            	<form action="<?php echo $this->_tpl_vars['sys']['formurl']; ?>
" method="post">
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                    	  <input type="button" value="添加新管理员" onClick="location.href='?c=member&a=member_add'" />&nbsp;</div>
                    </div>
                    <table class="admin-tb" id="tb1">
                    <tr>
                    	<th width="41" class="text-center"><input type="checkbox" rel="control" onClick="this.checked?checkTb1(1):checkTb1(2);" /></th>
                    	<th width="97">用户名</th>
                        <th width="448">等级</th>
                        <th width="324">最后登录时间</th>
                        <th width="261">最后登录IP</th>
                        <th width="225">操作</th>
                        
                    </tr>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    <tr>  <!-- <tr class="checked">默认选中 -->
                    <td class="text-center">
                    <?php if ('超级管理员' != $this->_tpl_vars['v']['levelshow']): ?>
                    <input name="id[]" type="checkbox" id="id[]" value="<?php echo $this->_tpl_vars['v']['name']; ?>
"  />
                    <?php endif; ?>
                    </td>
                    <td><?php echo $this->_tpl_vars['v']['name']; ?>
&nbsp;</td>
                    <td><?php echo $this->_tpl_vars['v']['levelshow']; ?>
</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['lastvisit'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format'])); ?>
&nbsp;</td>
                    <td><?php echo $this->_tpl_vars['v']['lastip']; ?>
&nbsp;</td>
                    <td>
                    <?php if ('超级管理员' != $this->_tpl_vars['v']['levelshow']): ?>
                    <a href="?c=member&a=member_edit&name=<?php echo $this->_tpl_vars['v']['name']; ?>
">权限</a>
                    <?php endif; ?>
                                        <?php if ('超级管理员' != $this->_tpl_vars['v']['levelshow']): ?>
                    <a href="?c=member&a=member_password&name=<?php echo $this->_tpl_vars['v']['name']; ?>
">密码</a>
                    <?php endif; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if ('超级管理员' != $this->_tpl_vars['v']['levelshow']): ?>
                    <a href="?c=member&a=member_delete&id=<?php echo $this->_tpl_vars['v']['name']; ?>
">删除</a>
                    <?php endif; ?>
                    </td>
                    </tr>
<?php endforeach; endif; unset($_from); ?>
                    
                    <tr class="foot-ctrl">
                    <td colspan="6" class="gray">选择: <a href="#" onClick="checkTb1(1);">全选</a> - <a href="#" onClick="checkTb1(3);">反选</a> - <a href="#" onClick="checkTb1(2);">无</a></td>
                    </tr>

                    
                    </table>

                    <div class="th"><!--/ pages-->
                            
                            
                    	<div class="form">
                        <input name="提交" type="submit" value="删 除" />
                    	</div>
                    </div>
                </div>

				</form>
            </div><!--/ con-->
            
            
            
            
            
        </div>    
    </div><!--/ container-->


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>