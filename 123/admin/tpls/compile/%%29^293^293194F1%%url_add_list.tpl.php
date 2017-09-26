<?php /* Smarty version 2.6.25, created on 2012-03-07 20:45:42
         compiled from url_add_list.tpl */ ?>
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
                case 1: //全选
                    childs[i].checked = true;
                    break;
                case 2: //不选
                    childs[i].checked = false;
                    break;
                case 3: //反选
                    childs[i].checked = !childs[i].checked;
                    break;
            }
        }
        if(checkHandler){
            checkHandler();
        }
    }
</script>
<div class="wrap">
    <div class="container">
        <div id="main">
            
            <div class="con">
            	<form action="?c=url_add&a=delete" method="post">
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                  <div class="table">
                  	<div class="th">
                    &nbsp;&nbsp;<a href="?c=url_add">查看全部</a>&nbsp;
                    &nbsp;&nbsp;<a href="?c=url_add&type=0">未审核</a>&nbsp;
                    &nbsp;&nbsp;<a href="?c=url_add&type=1">已通过审核</a>&nbsp;
                    &nbsp;&nbsp;<a href="?c=url_add&type=2">未通过审核</a>&nbsp;
                    </div>
                    <table class="admin-tb" id="tb1">
                    <tr>
                        <th width="70">删除</th>
                        <th width="100">网站名称</th>    
                        <th>域名</th>            	
                        <th width="70">状态</th>
                        <th width="70">操作</th>
                    </tr>
                    <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                    <tr>
                        <td><input type="checkbox" name="delete[<?php echo $this->_tpl_vars['i']['id']; ?>
]/>"/></td>
                        <td><?php echo $this->_tpl_vars['i']['name']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['i']['domain']; ?>
</td>
                        <td><?php if ($this->_tpl_vars['i']['type'] == 1): ?>通过<?php elseif ($this->_tpl_vars['i']['type'] == 2): ?>拒绝<?php else: ?>未审核<?php endif; ?></td>                        
                        <td><a href="?c=url_add&a=show&id=<?php echo $this->_tpl_vars['i']['id']; ?>
">修改</a></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    <tr class="foot-ctrl">
                    <td colspan="5" class="gray">选择: <a href="#" onclick="checkTb1(1);">全选</a> - <a href="#" onclick="checkTb1(3);">反选</a> - <a href="#" onclick="checkTb1(2);">无</a></td>
                    </tr>
                    </table>                    
                    <div class="th">
                        <?php if ($this->_tpl_vars['pages']): ?>
                        <div class="pages">
                            <?php if ($this->_tpl_vars['pages']['prev'] > -1): ?>                            
                            <a href="<?php echo $this->_tpl_vars['page_url']; ?>
&start=<?php echo $this->_tpl_vars['pages']['prev']; ?>
">&laquo; 上一页</a>
                            <?php else: ?>
                            <span class="nextprev">&laquo; 上一页</span>
                            <?php endif; ?>
                            <?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                                <?php if ($this->_tpl_vars['k'] != 'prev' && $this->_tpl_vars['k'] != 'next'): ?>
                                    <?php if ($this->_tpl_vars['k'] == 'omitf' || $this->_tpl_vars['k'] == 'omita'): ?>
                                    <span>…</span>
                                    <?php else: ?>
                                        <?php if ($this->_tpl_vars['i'] > -1): ?>
                                        <a href="<?php echo $this->_tpl_vars['page_url']; ?>
&start=<?php echo $this->_tpl_vars['i']; ?>
"><?php echo $this->_tpl_vars['k']; ?>
</a>
                                        <?php else: ?>
                                        <span class="current"><?php echo $this->_tpl_vars['k']; ?>
</span>                                        
                                        <?php endif; ?>
                                    <?php endif; ?>   
                                <?php endif; ?>                             
                            <?php endforeach; endif; unset($_from); ?>
                            <?php if ($this->_tpl_vars['pages']['next'] > -1): ?>                            
                            <a href="<?php echo $this->_tpl_vars['page_url']; ?>
&start=<?php echo $this->_tpl_vars['pages']['next']; ?>
">下一页 &raquo;</a>
                            <?php else: ?>
                            <span class="nextprev">下一页 &raquo;</span>
                            <?php endif; ?>
                        </div>                
                        <?php endif; ?>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>