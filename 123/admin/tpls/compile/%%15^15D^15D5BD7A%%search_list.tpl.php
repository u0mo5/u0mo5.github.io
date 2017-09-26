<?php /* Smarty version 2.6.25, created on 2012-03-08 17:11:22
         compiled from search_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'search_list.tpl', 76, false),)), $this); ?>
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
    function tiaozhun(obj)
    {
        if(obj.value == "") return;
        location.href = "?c=search&classid=" + obj.value;
    }
</script>
<body id="main_page">

<div class="wrap">
    <div class="container">

        <div id="main">

            <div class="con">
            	<form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post">
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['sys']['goback']; ?>
"/>
                  <div class="table">
                  <div class="th">
                    <div class="form">
                    	<input type="button" value="添加搜索引擎" onClick="location.href='?c=search&a=search_add&classid=<?php echo $this->_tpl_vars['classid']; ?>
'" />&nbsp;
                        <select name="classid" onchange="tiaozhun(this)">
                            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['options'],'selected' => $this->_tpl_vars['classid']), $this);?>

                        </select>
                    </div>
                    </div>

                    <table class="admin-tb" id="tb1">
                    <tr>
                    	<th width="41" class="text-center">删除</th>
                        <th width="50">排序</th>
                        <th width="50">默认</th>
                        <th width="50">显示</th>
                        <th width="100">名称</th>
                        <th width="100">分类</th>
                        <th width="250">接口地址</th>
                        <th width="50">删除</th>
                        <th>修改</th>

                    </tr>
                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    <tr>  <!-- <tr class="checked">默认选中 -->
                    <td class="text-center"><input name="id[]" type="checkbox" id="id[]" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" /></td>
                    <td><input type="text" name="sort[<?php echo $this->_tpl_vars['v']['id']; ?>
]" class="textinput" tabindex="11" value="<?php echo $this->_tpl_vars['v']['sort']; ?>
" /></td>
                    <td><input name="is_default" type="radio" id="is_default" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if ($this->_tpl_vars['v']['is_default']): ?>checked<?php endif; ?> /></td>
                    <td><input name="is_show[]" type="checkbox" id="is_show[]" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if ($this->_tpl_vars['v']['is_show']): ?>checked<?php endif; ?> /></td>
                    <td><?php echo $this->_tpl_vars['v']['search_select']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['v']['classname']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['v']['action']; ?>
</td>
                    <td><a href="?c=search&a=search_operate&classid=<?php echo $this->_tpl_vars['v']['class']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">删除</a></td>
                    <td><a href="?c=search&a=search_edit&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">修改</a></td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>

                    <tr class="foot-ctrl">
                    <td colspan="9" class="gray">选择: <a href="#" onClick="checkTb1(1);">全选</a> - <a href="#" onClick="checkTb1(3);">反选</a> - <a href="#" onClick="checkTb1(2);">无</a></td>
                    </tr>

                    </table>

                    <div class="th"><!--/ pages-->

                    	<div class="form">
                            <input type="submit" name="Submit3" value=" 提交修改 ">
                    	</div>
                    </div>
                </div>

				</form>
            </div><!--/ con-->





        </div>
    </div><!--/ container-->

</div><!--/ wrap-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>