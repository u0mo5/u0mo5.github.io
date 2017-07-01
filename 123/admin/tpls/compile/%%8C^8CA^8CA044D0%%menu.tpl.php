<?php /* Smarty version 2.6.25, created on 2016-09-07 13:22:01
         compiled from menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'menu.tpl', 4, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=@$this->_tpl_vars['charset'])) ? $this->_run_mod_handler('default', true, $_tmp, 'utf-8') : smarty_modifier_default($_tmp, 'utf-8')); ?>
" />
<title></title>
<link href="static/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="static/js/sidebar.js"></script>
</head>
<body id="sidebar_page">
<div class="wrap">
    <div class="cotainer">
        <div id="sidebar">
        <div class="home">
            <a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_blank">网站首页</a> - <a href="http://www.ylmf.net/thread.php?fid=346" target="_blank">论坛专区</a>
        </div>
        <div class="con">
        <!--公用-->
        <h2>管理首页</h2>
        <p class="userpanel">       
        用户名：<?php echo @USERNAME; ?>
<br />
        级　别：<?php if (1 == @If_manager): ?>超级管理员<?php else: ?>管理员<?php endif; ?><br />
        <a href="?c=member&a=member_password&name=<?php echo @USERNAME; ?>
" target='main'>密 码</a> |
        <a href="?c=login&a=welcome" target='main'>主 页</a>|
        <a href="?c=login&a=logout" target="_parent">退 出</a>
        </p>
        <?php echo $this->_tpl_vars['data']; ?>

        </div><!--/ .con-->
        </div><!--/ sidebar-->
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    var aArr = $(".con").find("li:first a");
    if (aArr && aArr.html() == "一键生成选择")
	//if (aArr)
    {
		//alert(aArr.html())
        aArr.addClass("active");
        $('#main', window.parent.document).attr('src', aArr.attr('href'));
    }
    if (aArr && aArr.html() == "114啦联盟")
    {
        aArr.addClass("active");
        $('#main', window.parent.document).attr('src', aArr.attr('href'));
    }

})
</script>
</body>
</html>