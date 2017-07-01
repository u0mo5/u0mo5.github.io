<?php /* Smarty version 2.6.25, created on 2016-09-07 13:22:14
         compiled from city.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $this->_tpl_vars['current_city']; ?>
</title>
        <meta name="description" content="<?php echo $this->_tpl_vars['current_city']; ?>
导航，提供<?php echo $this->_tpl_vars['current_city']; ?>
生活导航信息" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
/static/css/new_green/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
/static/css/new_green/city.css" media="all" />
        <base target="_blank" />
        <style type="text/css">
            body,td,th <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title><?php echo $this->_tpl_vars['current_city']; ?>
导航</title>
        <meta name="description" content="<?php echo $this->_tpl_vars['current_city']; ?>
导航，提供<?php echo $this->_tpl_vars['current_city']; ?>
生活导航信息" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
/static/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
/static/css/city.css" media="all" />
        <base target="_blank" />
        <style type="text/css">
            body,td,th {
                font-family: Tahoma, Helvetica, Arial, 5b8b4f53, sans-serif;
            }
        </style>
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
                    <input type="submit" class="submit" value="115搜索">
                    <input type="hidden" name="tn" value="ylmf_4_pg">
                    <input type="hidden" name="ch" value="6">
                </form>
                <div class="ctrl">
                    <form id="ctrl_form">
                        <label for="s115_item"><input class="radio" type="radio" value="s115" name="search_select" id="s115_item" />115搜索</label>
                        <label for="baidu_item"><input class="radio" type="radio" value="baidu" name="search_select"  checked="checked"  id="baidu_item" />百度</label>
                        <label for="google_item"><input class="radio" type="radio" value="google" name="search_select" id="google_item" />Google</label>
                    </form>
                </div>
            </div>
        </div>
		</div>
            <div class="guide clearfix">
                <span class="location">
                    <strong>您当前的位置：</strong>
                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent">导航首页</a> &raquo; <?php echo $this->_tpl_vars['current_city']; ?>
城市导航
                </span>
                <span class="meta">
                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
/feedback/" class="feedback">留言反馈</a>
                    <a href="javascript://"  onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo $this->_tpl_vars['URL']; ?>
')" class="sethome" target="_parent">设为主页</a>
                </span>
            </div>
            <!-- / giude-->


            <div id="content" class="clearfix">
                <div id="side"> <b class="rc-tp1"><b></b></b>
                    <div class="con">
                        <div id="tool">
                            <h2 class="tool-title">实用工具<span><a href="http://tool.115.com/" rel="nr">更多&raquo;</a></span></h2>
                            <ul>
                                                                  <?php $_from = $this->_tpl_vars['tools']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                 <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
"<?php if ($this->_tpl_vars['i']['color']): ?> style="color:<?php echo $this->_tpl_vars['i']['color']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a></li>
                                 <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        </div>
                        <!-- / tool-->

                                                <?php $_from = $this->_tpl_vars['site_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
                        <h2><?php echo $this->_tpl_vars['k']; ?>
</h2>
                        <ul<?php if ($this->_tpl_vars['parent']['0']['classname_len'] > 6): ?> class="c2"<?php endif; ?>>
                            <?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                            <li ><a href="<?php echo $this->_tpl_vars['i']['urlpath']; ?>
"><?php echo $this->_tpl_vars['i']['classname']; ?>
</a></li>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                <?php endforeach; endif; unset($_from); ?>

                    </div>
                    <!-- / con-->
                    <b class="rc-bt"><b></b></b> </div>
                <!-- / size-->

                <div id="main">

                    <div id="board"> <b class="rc-tp1"><b></b></b>
                        <div class="box">
                            <div id="bm">
                                <ul id="bm_tab" class="clearfix">
                                    <li id="bm-def" class="active" rel="fm"><?php echo $this->_tpl_vars['current_city']; ?>
名站</li>
                                </ul>
                            </div>
                            <!-- / bm-->

                            <div id="bb">
                                <div class="con">
                                    <ul id="fm" class="clearfix">
                                        <?php if ($this->_tpl_vars['mingzhan_list']): ?>
                                        <?php $_from = $this->_tpl_vars['mingzhan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mingzhan']):
?>
                                        <li><a href="<?php echo $this->_tpl_vars['mingzhan']['url']; ?>
"><?php echo $this->_tpl_vars['mingzhan']['name']; ?>
</a></li>
                                        <?php endforeach; endif; unset($_from); ?>
                                        <?php endif; ?>
                                    </ul>

                                </div>
                                <!-- / con-->
                            </div>
                            <!-- / bb-->
                        </div>

                        <!-- / box-->
                        <b class="rc-bt"><b></b></b> </div>
                    <!-- / board-->

                    <div id="ls"> <b class="rc-tp1"><b></b></b>
                        <div class="box">
                            <?php if ($this->_tpl_vars['coolclass_list']): ?>
                            <?php $_from = $this->_tpl_vars['coolclass_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['coolclass']):
        $this->_foreach['foo']['iteration']++;
?>
                            <dl <?php if (!((1 & ($this->_foreach['foo']['iteration']-1)))): ?>class="alt"<?php endif; ?> id="ls<?php echo ($this->_foreach['foo']['iteration']-1); ?>
">
                                <dt><a href="<?php echo $this->_tpl_vars['coolclass']['url']; ?>
"><?php echo $this->_tpl_vars['coolclass']['name']; ?>
</a></dt>
                                <dd class="l">
                                    <?php if ($this->_tpl_vars['coolclass']['son']): ?>
                                    <ul>
                                        <?php $_from = $this->_tpl_vars['coolclass']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['son']):
?>
                                        <li><a href="<?php echo $this->_tpl_vars['son']['url']; ?>
" ><?php echo $this->_tpl_vars['son']['name']; ?>
</a></li>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </ul>
                                    <?php endif; ?>
                                </dd>
                                <dd class="m"><a href="<?php echo $this->_tpl_vars['coolclass_list']['url']; ?>
">更多 &raquo;</a></dd>
                            </dl>
                            <?php endforeach; endif; unset($_from); ?>
                            <?php endif; ?>
                        </div>
                        <!-- / box-->
                        <b class="rc-bt"><b></b></b> </div>
                </div>
                <!-- / main-->

            </div>
            <!-- / content-->

            <div id="citys"> <b class="rc-tp1"><b></b></b>

                <div class="box">
                    <div class="con"> <strong>其它城市：</strong> <?php if ($this->_tpl_vars['other_city_list']): ?><?php $_from = $this->_tpl_vars['other_city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['other_city']):
?><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/city/<?php echo $this->_tpl_vars['other_city']['path']; ?>
/index.htm"><?php echo $this->_tpl_vars['other_city']['name']; ?>
</a> <?php endforeach; endif; unset($_from); ?><?php endif; ?></div>
                </div>
                <b class="rc-bt"><b></b></b> </div>
            <!-- / citys-->

            <div id="footer" class="clearfix"> <a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent" class="goback">返回首页</a> </div>
            <div id="gotop"><a href="#page" target="_self">返回顶部</a></div>
        </div>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/js/ylmf.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/page/js/common.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/static/js/backtop.js"></script>
    </body>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/static/js/opensug_resoucre.js"></script>
</html>