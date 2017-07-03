<?php /* Smarty version 2.6.25, created on 2016-09-07 13:22:01
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'header.tpl', 4, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=@$this->_tpl_vars['charset'])) ? $this->_run_mod_handler('default', true, $_tmp, 'utf-8') : smarty_modifier_default($_tmp, 'utf-8')); ?>
" />
<title></title>
<link href="static/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="static/js/common.js"></script>
</head>
<body id="main_page">
		<div id="nav" style="display:none;">
		<dl>
		<dt>当前位置：</dt>
            <?php $_from = $this->_tpl_vars['npa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cp']):
?>
		    <dd class="link"><?php echo $this->_tpl_vars['cp']; ?>
</dd><!--导航-->
            <?php endforeach; else: ?>
		    <dd class="link">管理首页</dd><!--导航-->
            <?php endif; unset($_from); ?>
		</dl>
		</div>

<script type="text/javascript">
	if ($.browser.msie) {
		document.execCommand("BackgroundImageCache", false, true);
	}
	var nav = document.getElementById("nav");
	var pnav = window.parent.document.getElementById("nav")
	pnav.innerHTML = nav.innerHTML;

</script>

<?php if ($this->_tpl_vars['error']): ?><?php if ($this->_tpl_vars['error']): ?><div class="con" style="padding:7px 5px 2px 5px; font-size:13px; color:#F33;"><div class="tips mb5" style=" background:url(static/images/infor-ico.gif) no-repeat 15px center #FFF8CC; padding-left:45px"><?php echo $this->_tpl_vars['error']; ?>
</div></div><?php endif; ?><?php endif; ?>