<?php /* Smarty version 2.6.25, created on 2012-03-17 00:13:19
         compiled from search_keyword_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'search_keyword_form.tpl', 15, false),array('modifier', 'default', 'search_keyword_form.tpl', 21, false),array('modifier', 'date_format', 'search_keyword_form.tpl', 29, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post">
                <?php if ($this->_tpl_vars['data']['id']): ?><input type="hidden" name="form[id]" value="<?php echo $this->_tpl_vars['data']['id']; ?>
"/><?php endif; ?>
                <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['sys']['goback']; ?>
"/>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th  style="vertical-align:top;">分类：</th>
                            <td>
                                <select name=form[class]>
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['options'],'selected' => $this->_tpl_vars['data']['class']), $this);?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">关键字名称：</th>
                            <td><input style="color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['data']['namecolor'])) ? $this->_run_mod_handler('default', true, $_tmp, '#000') : smarty_modifier_default($_tmp, '#000')); ?>
;" type="text" id="js_test_link" name="form[name]" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" class="textinput w270" /><span style="margin-left:10px;">链接颜色：</span><span id="js_link_color" style="margin-right:10px;"></span><input id="js_test_input" name="form[namecolor]" type="hidden" value="<?php echo $this->_tpl_vars['data']['namecolor']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>关键字网址：</th>
                            <td><input type="text" name="form[url]" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>开始时间：</th>
                            <td><input type="text" id="start_time" name="form[starttime]" value="<?php if ($this->_tpl_vars['data']['starttime']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['starttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?>" class="textinput w80" /></td>
                        </tr>
                        <tr>
                            <th>结束时间：</th>
                            <td><input type="text" id="end_time" name="form[endtime]" value="<?php if ($this->_tpl_vars['data']['endtime']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['endtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?>" class="textinput w80" /></td>
                        </tr>
                        <tr>
                            <th>排序：</th>
                            <td><input type="text" name="form[sort]" value="<?php echo $this->_tpl_vars['data']['sort']; ?>
" class="textinput w60"   onkeyup="value=value.replace(/[^\d]/g,'')" /></td>
                        </tr>
                                                <tr>
                            <th style="vertical-align:top;">备注：</th>
                            <td>
                                <textarea class="w270" name="form[remarks]"><?php echo $this->_tpl_vars['data']['remarks']; ?>
</textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" /></a>
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
