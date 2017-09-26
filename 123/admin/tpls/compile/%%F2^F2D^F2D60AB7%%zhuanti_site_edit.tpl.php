<?php /* Smarty version 2.6.25, created on 2012-05-05 19:50:27
         compiled from zhuanti_site_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'zhuanti_site_edit.tpl', 17, false),array('modifier', 'date_format', 'zhuanti_site_edit.tpl', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=zhuanti_site&a=save" method="post">
                <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
"/>
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['data']['id']; ?>
"/>
                <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                <div class="box-header">
                    <h4><?php if ($this->_tpl_vars['action'] == 'modify'): ?>修改<?php else: ?></>添加<?php endif; ?>网址</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">网站名称：</th>
                            <td><input style="color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['data']['namecolor'])) ? $this->_run_mod_handler('default', true, $_tmp, '#000') : smarty_modifier_default($_tmp, '#000')); ?>
;" type="text" id="js_test_link" name="site_name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" class="textinput w270" /><span style="margin-left:10px;">链接颜色：</span><span id="js_link_color" style="margin-right:10px;"></span><input id="js_test_input" name="color" type="hidden" value="<?php echo $this->_tpl_vars['data']['namecolor']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>网站网址：</th>
                            <td><input type="text" name="site_url" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>开始时间：</th>
                            <td><input type="text" id="start_time" name="start_time" value="<?php if ($this->_tpl_vars['data']['starttime']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['starttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?>" class="textinput w80" /></td>
                        </tr>
                        <tr>
                            <th>结束时间：</th>
                            <td><input type="text" id="end_time" name="end_time" value="<?php if ($this->_tpl_vars['data']['endtime']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['endtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?>" class="textinput w80" /></td>
                        </tr>
                        <tr>
                            <th>排序：</th>
                            <td><input type="text" name="order" value="<?php echo $this->_tpl_vars['data']['displayorder']; ?>
" class="textinput w60"   onkeyup="value=value.replace(/[^\d]/g,'')" /></td>
                        </tr>
                        <!--
                        <tr>
                            <th>首页显示：</th>
                            <td>
                                <input type="radio" id="pass_yes" name="inindex" value="1"<?php if ($this->_tpl_vars['data']['inindex'] == 1): ?> checked="checked"<?php endif; ?>/>
                                <label class="hand" for="pass_yes">是</label>
                                <input type="radio" id="pass_no" name="inindex" value="0"<?php if ($this->_tpl_vars['data']['inindex'] == 0): ?> checked="checked"<?php endif; ?>/>
                                <label class="hand" for="pass_no">否</label>
                            </td>
                        </tr>
                        -->
                        <tr>
                            <th style="vertical-align:top;">备注：</th>
                            <td>
                                <textarea class="w270" name="remark"><?php echo $this->_tpl_vars['data']['remark']; ?>
</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">分类：</th>
                            <td>                               
                                <select name="class_id">
                                    <option value=''>请选择……</option>
                                    <?php $_from = $this->_tpl_vars['class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent']):
?>
                                    <optgroup label="<?php echo $this->_tpl_vars['parent']['name']; ?>
">
                                        <?php if ($this->_tpl_vars['parent']['son']): ?>
                                        <?php $_from = $this->_tpl_vars['parent']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                        <option value="<?php echo $this->_tpl_vars['i']['id']; ?>
"<?php if ($this->_tpl_vars['data']['class'] == $this->_tpl_vars['i']['id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</option>
                                        <?php endforeach; endif; unset($_from); ?>
                                        <?php endif; ?>
                                    </optgroup>
                                <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                        </tr>                        
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" /></a> 或 <a href="?c=zhuanti&a=index">取消</a>
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
<link href="static/datapicker/css/jquery-ui-1.7.1.custom.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="static/datapicker/ui.core.js"></script>
<script type="text/javascript" src="static/datapicker/jquery-ui-1.7.1.custom.min.js"></script>

<script type="text/javascript" src="static/qrx/qrxpcom.js"></script>
<script type="text/javascript" src="static/qrx/qrcpicker.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#start_time").datepicker();
	$("#end_time").datepicker();
	
	var colorstr = "";
	colorstr = document.getElementById("js_test_input").value;
	var cp = new QrColorPicker(colorstr);
	cp.onChange = function(color){
		document.getElementById("js_test_link").style.color = color;
		document.getElementById("js_test_input").value = color;
	}
	document.getElementById("js_link_color").innerHTML = cp.getHTML();
});
</script>
