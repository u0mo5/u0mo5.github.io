<?php /* Smarty version 2.6.25, created on 2017-07-14 14:16:48
         compiled from famous_nav_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'famous_nav_add.tpl', 30, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body id="main_page">

<div class="wrap">
    <div class="container">
        
        <div id="main">
            
            
            <div class="con box-green">
                <form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post" enctype="multipart/form-data">      
                
                <div class="box-header">
                    <h4>添加名站</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">网站名称：</th>
                            <td><input name="name" type="text" class="textinput w270" id="name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>网站地址：</th>
                            <td><input name="url" type="text" class="textinput w270" id="url" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>时间：</th>
                            <td>
                            <input type="text" id="starttime" name="starttime" value="<?php if ($this->_tpl_vars['data']['starttime']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['starttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?>" class="textinput w80" />
                            &nbsp; 至 
                            <input type="text" id="endtime" name="endtime" value="<?php if ($this->_tpl_vars['data']['endtime']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['endtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?>" class="textinput w80" /></td>
                        </tr>
                        <tr>
                            <th>排序：</th>
                            <td><input name="displayorder" type="text" class="textinput w60" id="displayorder" value="<?php echo $this->_tpl_vars['data']['displayorder']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>字体：</th>
                            <td>
                                <span id="js_link_color" style="margin-right:10px;"></span>
                                效果预览：<a href="#"  id="js_test_link" >网站名称</a>
                                
                                <input id="js_test_input" name="namecolor" type="hidden" value="<?php echo $this->_tpl_vars['data']['namecolor']; ?>
" />
                            </td>
                        </tr>
                        <tr>
                            <th style="vertical-align:top;">备注：</th>
                            <td>
                                <textarea name="remark" class="w270" id="remark"><?php echo $this->_tpl_vars['data']['remark']; ?>
</textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" /> 或 <a href="<?php echo $this->_tpl_vars['sys']['goback']; ?>
">取消</a>
                      <input name="step" type="hidden" id="step" value="2">
                      <input name="id" type="hidden" id="id" value="<?php echo $this->_supers['request']['id']; ?>
">
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
	$("#starttime").datepicker();
	$("#endtime").datepicker();
	
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