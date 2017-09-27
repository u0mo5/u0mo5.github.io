<?php /* Smarty version 2.6.25, created on 2017-08-08 16:54:07
         compiled from class.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['class_meta_keyword']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['class_meta_description']; ?>
" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
/public/page/style/new_green/style.css" media="all" />
<link id="skin" rel="stylesheet" type="text/css" href="" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/page/js/skin.js"></script>
<base target="_blank" />
</head>
<body>
<div id="page" class="container">
    <div id="header" class="box">
        <div class="con clearfix">
            <h1 id="logo"><a href="<?php echo $this->_tpl_vars['URL']; ?>
"><img src="<?php echo $this->_tpl_vars['URL']; ?>
/static/images/logo.gif" alt="" /></a></h1>
            <div class="searchform">
                <form id="searchForm" action="http://115.com/s" method="get" target="_blank">
                    <a class="label" href="http://115.com"><img width="105" height="35" alt="115搜索" src="<?php echo $this->_tpl_vars['URL']; ?>
/static/images/s/115.gif"></a>
                    <input type="text" name="q" class="text" autocomplete="off">
                    <input type="submit" class="submit" value="115聚搜">
                    <input type="hidden" name="tn" value="ylmf_4_pg">
                    <input type="hidden" name="ch" value="6">
                </form>
                <div class="ctrl">
                    <form id="ctrl_form">

                        <label for="baidu_item"><input class="radio" type="radio" value="baidu" name="search_select" id="baidu_item" />百度</label>
                        <label for="google_item"><input class="radio" type="radio" value="google" name="search_select" id="google_item" />Google</label>
                        <label for="s115_item"><input class="radio" type="radio" value="s115" name="search_select"  checked="checked" id="s115_item" />115聚搜</label>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="guide clearfix"><span class="location"><strong>您当前的位置：</strong><a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent">导航首页</a> &raquo; 
    <?php if ($this->_tpl_vars['parent_class_name']): ?><span><?php echo $this->_tpl_vars['parent_class_name']; ?>
</span><?php endif; ?>
    <?php if ($this->_tpl_vars['current_class_name']): ?><span><?php echo $this->_tpl_vars['current_class_name']; ?>
</span><?php endif; ?>
    </span>
    <span class="meta"><a href="<?php echo $this->_tpl_vars['URL']; ?>
/feedback/" class="feedback">留言反馈</a><a href="javascript://"  onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo $this->_tpl_vars['URL']; ?>
')" class="sethome" target="_parent">设为主页</a></span></div>

<?php $_from = $this->_tpl_vars['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
      <div class="box"><b class="rc-tp"><b></b></b>
        <div class="site-list">
                <h2 id="<?php echo $this->_tpl_vars['key_list'][$this->_tpl_vars['k']]['classid']; ?>
"><?php echo $this->_tpl_vars['k']; ?>
</h2>
                <ul class="clearfix">
                <?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                    <?php if ($this->_tpl_vars['i']['name'] == 'NULL'): ?>
                        <li><a href=""></a></li>
                    <?php elseif ($this->_tpl_vars['i']['domain']): ?>
                        <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" target="_blank" <?php if ($this->_tpl_vars['i']['namecolor'] == '#FF0000'): ?>class='red'<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#008000'): ?>class='green'<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#0000FF'): ?>class='blue'<?php else: ?>class="<?php echo $this->_tpl_vars['i']['namecolor']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a><?php echo $this->_tpl_vars['i']['good']; ?>
</li>
                    <?php else: ?>
                        <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" target="_blank" <?php if ($this->_tpl_vars['i']['namecolor'] == '#FF0000'): ?>class='red'<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#008000'): ?>class='green'<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#0000FF'): ?>class='blue'<?php else: ?>class="<?php echo $this->_tpl_vars['i']['namecolor']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a><?php echo $this->_tpl_vars['i']['good']; ?>
</li>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                 </ul>
         </div>
      <b class="rc-bt"><b></b></b></div>
<?php endforeach; endif; unset($_from); ?>
        
    <div id="footer" class="clearfix"> <a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent">返回首页</a> </div>
    <div id="gotop"><a href="#page" target="_self">返回顶部</a></div>
</div>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/js/ylmf.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/page/js/common.js"></script>



<div style="display:none"><?php echo $this->_tpl_vars['tongji']; ?>
</div>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.bookfuns.com"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//bookfuns.com/plugins/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//bookfuns.com/plugins/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/static/js/opensug_resoucre.js"></script>
</html>