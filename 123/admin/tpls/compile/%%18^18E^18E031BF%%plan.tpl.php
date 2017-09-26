<?php /* Smarty version 2.6.25, created on 2012-03-10 20:31:10
         compiled from plan.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'plan.tpl', 82, false),array('function', 'html_radios', 'plan.tpl', 122, false),array('modifier', 'default', 'plan.tpl', 122, false),array('modifier', 'date_format', 'plan.tpl', 264, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
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

<?php if ($this->_tpl_vars['action'] == 'add'): ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
  
            
            <div class="con box-green">
                <form action="?c=plan&a=add" method='post'>
                <div class="box-header">
                    <h4>计划任务</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">任务标题：</th>
                            <td><input type="text" class="textinput w360" name="title" value='<?php echo $this->_tpl_vars['plan']['subject']; ?>
'  /></td>
                        </tr>
                        <tr>
                            <th>执行php文件名：</th>
                            <td><input type="text" class="textinput w360" name="filename" value='<?php echo $this->_tpl_vars['plan']['filename']; ?>
'  /></td>
                        </tr>
                        <tr>
                            <th>每月：</th>
                            <td>
                                <select name="month">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_days'],'selected' => $this->_tpl_vars['plan']['month']), $this);?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>每周：</th>
                            <td>
                                <select name="week">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_weekdays'],'selected' => $this->_tpl_vars['plan']['week']), $this);?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>每天：</th>
                            <td>
                                <select name="day">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_hours'],'selected' => $this->_tpl_vars['plan']['day']), $this);?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>每时：</th>
                            <td>
                                <select name="hours[]">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_minutes'],'selected' => $this->_tpl_vars['plan']['hour'][0]), $this);?>

                                </select>
                                <select name="hours[]">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_minutes'],'selected' => $this->_tpl_vars['plan']['hour'][1]), $this);?>

                                </select>
                                <select name="hours[]">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_minutes'],'selected' => $this->_tpl_vars['plan']['hour'][2]), $this);?>

                                </select>
                                <select name="hours[]">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_minutes'],'selected' => $this->_tpl_vars['plan']['hour'][3]), $this);?>

                                </select>                           
                            </td>
                        </tr>
                        <tr>
                            <th>是否开启该计划任务：</th>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => 'ifopen','options' => $this->_tpl_vars['option_toggle'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['plan']['ifopen'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1))), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="保存更改" /> 或 <a href="?c=plan&a=index">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<?php elseif ($this->_tpl_vars['action'] == 'edit'): ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
  
            
            <div class="con box-green">
                <form action="?c=plan&a=edit&id=<?php echo $this->_tpl_vars['plan']['id']; ?>
" method='post'>
                <div class="box-header">
                    <h4>计划任务</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">任务标题：</th>
                            <td><input type="text" class="textinput w360" name="title" value='<?php echo $this->_tpl_vars['plan']['subject']; ?>
'  /></td>
                        </tr>
                        <tr>
                            <th>执行文件名：</th>
                            <td><input type="text" class="textinput w360" name="filename" value='<?php echo $this->_tpl_vars['plan']['filename']; ?>
'  /></td>
                        </tr>
                        <tr>
                            <th>每月几号执行：</th>
                            <td>
                                <select name="month">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_days'],'selected' => $this->_tpl_vars['plan']['month']), $this);?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>每周星期几执行：</th>
                            <td>
                                <select name="week">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_weekdays'],'selected' => $this->_tpl_vars['plan']['week']), $this);?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>每日几点执行：</th>
                            <td>
                                <select name="day">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_hours'],'selected' => $this->_tpl_vars['plan']['day']), $this);?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>每小时几分钟执行：</th>
                            <td>
                                <select name="hours[]">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_minutes'],'selected' => $this->_tpl_vars['plan']['hour'][0]), $this);?>

                                </select>
                                <select name="hours[]">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_minutes'],'selected' => $this->_tpl_vars['plan']['hour'][1]), $this);?>

                                </select>
                                <select name="hours[]">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_minutes'],'selected' => $this->_tpl_vars['plan']['hour'][2]), $this);?>

                                </select>
                                <select name="hours[]">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['option_minutes'],'selected' => $this->_tpl_vars['plan']['hour'][3]), $this);?>

                                </select>                           
                            </td>
                        </tr>
                        <tr>
                            <th>是否开启该计划任务：</th>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => 'ifopen','options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['plan']['ifopen']), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="保存更改" /> 或 <a href="?c=plan&a=index">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<?php else: ?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action='?c=plan&a=index' method='post'>
                <div class="box-header">
                    <h4>计划任务</h4>
                </div>
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                        <div class="fl">
                        </div>
                        
                        </div>
                    </div>
                    <table class="admin-tb" id="tb1">
                    <tr>
                    	<th width="41" class="text-center">删除</th>
                    	<th width="97">序号</th>
                    	<th width="100">任务标题</th>
                    	<th width="100">分钟</th>
                    	<th width="100">小时</th>
                    	<th width="100">星期</th>
                    	<th width="100">日</th>
                        <th width="200">上次执行时间</th>
                        <th width="200">下次执行时间</th>
                        <th width="161">设置</th>
                        <th width="161">运行</th>
                    </tr>

                    <?php $_from = $this->_tpl_vars['plan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['current_plan']):
?>
                    <tr>
                        <td> <input type="checkbox" name="remove_id[]" value="<?php echo $this->_tpl_vars['current_plan']['id']; ?>
" /></td>
                        <td><?php echo $this->_tpl_vars['current_plan']['id']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['current_plan']['subject']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['current_plan']['hour']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['current_plan']['day']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['current_plan']['week']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['current_plan']['month']; ?>
</td>
                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['current_plan']['usetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format'])); ?>
</td>
                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['current_plan']['nexttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format'])); ?>
</td>
                        <td><input type="button" value="设置" onclick="window.location=('?c=plan&a=edit&id='+<?php echo $this->_tpl_vars['current_plan']['id']; ?>
)" /></td>
                        <td><input type="button" value="运行" onclick="window.location=('?c=plan&a=execute&id='+<?php echo $this->_tpl_vars['current_plan']['id']; ?>
)" /></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    <tr class="foot-ctrl">
                    <td colspan="11" class="gray">选择: <a href="#" onclick="checkTb1(1);">全选</a> - <a href="#" onclick="checkTb1(3);">反选</a> - <a href="#" onclick="checkTb1(2);">无</a></td>
                    </tr>
                    </table>
                    <div class="th">
                    	<div class="form">
                        <input type="submit" value="删除" />&nbsp;
                        <input type="button" onclick="window.location='?c=plan&a=add'" value="添加任务" />&nbsp;
                        </div>
                    </div>
                </div>

				</form>




            </div><!--/ con-->
            
            
            
            
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>