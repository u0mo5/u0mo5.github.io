<?php /* Smarty version 2.6.25, created on 2017-08-08 16:48:16
         compiled from site_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'site_list.tpl', 57, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="?c=site_manage&a=search" method="get">
                    <input type="hidden" name="c" value="site_manage"/>
                    <input type="hidden" name="a" value="search"/>
                  <div class="table">
                    <div class="th">
                        站点搜索: <input type="text" value="<?php echo $this->_tpl_vars['keyword']; ?>
" id="keyword" name="keyword"/>
                          <select name="search_type">
                            <option value="name">名称</option>
                            <option value="url" <?php if ($this->_tpl_vars['search_type'] == 'url'): ?>selected<?php endif; ?> >网址</option>
                          </select>
                          <input type="submit" value="搜索" />
                    </div>
                  </div>
                </form>

            	<form action="?c=site_manage&a=list_edit" method="post">
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                  <div class="table">
                  	<div class="th">
                    	<div class="form fl">
                        <input type="button" value="添加网址" onclick="self.location='?c=site_manage&a=edit&action=add&classid=<?php echo $this->_tpl_vars['class_id']; ?>
'"/>&nbsp;
                        <label for="alltopic"><a href='?c=class'>选择分类</a></label>&nbsp;
                        &nbsp;&nbsp;<a href='?c=site_manage'>查看所有分类</a></label>&nbsp;
                        &nbsp;&nbsp;<a href="?c=site_manage&isend=1">查看过期站点</a>&nbsp;
                        </div>
                    </div>
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    	<th width="41" class="text-center">删除</th>    
                        <th width="40">推荐</th>    
                        <th width="70">排序</th>            	
                        <th width="120">网站</th>
                        <th width="180">网址</th>
                        <th width="80">分类</th>
                        <th width="80">开始时间</th>      
                        <th width="80">结束时间</th>   
                        <th>添加人</th>                            
                    </tr>
                    <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                    <tr>
                        <td class="text-center"><input rel="del" type="checkbox" name="delete[<?php echo $this->_tpl_vars['i']['id']; ?>
]"  /></td>
                        <td class="text-center">
                            <input rel="dis" type="checkbox" name="recommend[<?php echo $this->_tpl_vars['i']['id']; ?>
]" <?php if ($this->_tpl_vars['i']['good'] == 1): ?>checked="checked"<?php endif; ?>/>
                            <input type="hidden" name="norecommend[<?php echo $this->_tpl_vars['i']['id']; ?>
]" value="<?php if ($this->_tpl_vars['i']['good'] == 1): ?>0<?php else: ?>1<?php endif; ?>"/>
                        </td>
                        <td><input type="text" name="order[<?php echo $this->_tpl_vars['i']['id']; ?>
]" class="textinput" tabindex="11" value="<?php echo $this->_tpl_vars['i']['displayorder']; ?>
" /></td>                 
                        <td><a href="?c=site_manage&a=edit&action=modify&id=<?php echo $this->_tpl_vars['i']['id']; ?>
"><span style="color:<?php echo $this->_tpl_vars['i']['namecolor']; ?>
"><?php echo $this->_tpl_vars['i']['name']; ?>
</span></a></td>
                        <td><div style=" width:180px;" class="hideText" title="<?php echo $this->_tpl_vars['i']['url']; ?>
"><?php echo $this->_tpl_vars['i']['url']; ?>
</div></td>
                        <td><a href="?c=site_manage&classid=<?php echo $this->_tpl_vars['i']['class_id']; ?>
"><?php echo $this->_tpl_vars['i']['class_name']; ?>
</a></td>
                        <td><?php if ($this->_tpl_vars['i']['starttime'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['i']['starttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?></td>              
                        <td><?php if ($this->_tpl_vars['i']['endtime'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['i']['endtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?></td>
                        <td><?php echo $this->_tpl_vars['i']['adduser']; ?>
</td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    <tr class="foot-ctrl">
                    <td colspan="9" class="gray">选择: <a href="#" onClick="checkTb1(1);">全选</a> - <a href="#" onClick="checkTb1(3);">反选</a> - <a href="#" onClick="checkTb1(2);">无</a></td>
                    </tr>
                    </table>
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
                            /*
							$("#js_data_source").find("input[rel='del']").each(function(i){
								
								$(this).bind("click",function(){
									var tr = $(this).parent().parent();
									var input = tr.find("input[rel='dis']");
									if(this.checked){
										$(input).attr("oledchecked",$(input).attr("checked"));
										$(input).attr("checked","");
										$(input).attr("disabled","disabled");
									}
									else{
										$(input).attr("disabled","");
										$(input).attr("checked",$(input).attr("oledchecked"));
									}
									
									$(".admin-tb").find("input[rel='del']").each(function(i){
										var tr2 = $(this).parent().parent();
										if(this.checked){
											tr2.addClass("checked");
										}
										else{
											tr2.removeClass("checked");
										}
									})
								});								
							});
                            */
							$("#js_data_source").find("input[rel='dis']").change(function(){
                                if ($(this).next('input[type="hidden"]').val() == 1) $(this).next('input[type="hidden"]').val(0);
                                else $(this).next('input[type="hidden"]').val(1);
							});
						});
                    </script>
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
<script type="text/javascript">
	var list;
	$(document).ready(function(){
		list = $("#js_data_source").find("input[type='checkbox']").filter("[rel='del']");
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
		CheckInit("js_data_source",selectType);
	}
	
	var CheckInit = function(tabelId,selectType){
		if(list == undefined){
			list = $("#" + tabelId).find("input[type='checkbox']").filter("[rel='del']");
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>