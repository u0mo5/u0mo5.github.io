<?php /* Smarty version 2.6.25, created on 2017-01-04 11:08:12
         compiled from kp.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['index_meta_keyword']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['index_meta_description']; ?>
" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link href="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/style/new_green/base.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#wrap { width:1180px; margin: 0 auto; }
#main { width:955px; }
#ls dd.l { width:833px; }
#ls dd.l a { margin: 0 18px; }
#qs-result { width:953px; }
#bn { width:845px; display:inline; overflow: hidden; }
#google { margin-left:5px; }
#sw { width:430px; }
#sw a { margin:0 8px; }
#hot a { margin:0 10px; }
#hot2 a { margin:0 15px; }
#meta li a { margin:0 25px 0 0; }
#settingBox { margin-left:914px; }
#ls dl { font-family:Tahoma, Helvetica, Arial, "5b8b4f53", sans-serif; font-size:14px }

#bm li{ width:84px;}
#bm li.active { width:85px;background-position:0 -708px; }
#bm li#bm-def.active { width:84px;}
#q_int .button-wrap { width:148px;background-position: -5px -354px}
#qs { width:161px;}
</style>
<style id="temp-css" type="text/css"></style>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/base.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/core.js"></script>
<base target="_blank" />
</head>
<body>
<em class="filter" style="display:none;"></em>
<div id="wrap">
    <div id="top" class="clearfix">
        <div id="weather"><script>if(top.location == self.location){document.write('<iframe width="540" height="22" frameborder="0" scrolling="no" allowtransparency="true" src="public/widget/weather/index.html"></iframe>')} </script> </div>
        <ul id="set">
            <li class="sethome"><a onclick="Yl.setHome(this,this.href); return false;" target="_self" href="http://www.114la.com/?114la">把114啦设为主页</a></li>
            <li><a href="/" target="_parent" onclick="Cookie.clear('layout')">标准版</a> | <a href="./kp.html" class="active" target="_parent">宽屏版</a></li>
            <!--<li id="skinlist"><a class="blue" title="蓝色">1</a><a class="green" title="绿色">2</a><a class="pink" title="粉色">3</a></li>
            <li class="setting"><a target="_self" href="javascript:void(0);" id="showSetting">个性设置</a></li>-->
        </ul>
    </div>
    <div id="header">
        <div class="box clearfix">
            <h1 id="logo"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent" title="114啦网址导航"><img src="<?php echo $this->_tpl_vars['URL']; ?>
/static/images/logo.gif" height="69" width="117" /></a></h1>
            <div id="email_114la">
                <form id="mail" name="mail" method="post" onsubmit="MailLogin.sendMail();return false;" action="" target="_blank">
                    <ul>
                        <li>
                            <label for="mail_user_114la">帐号：</label>
                            <input type="text" id="mail_user_114la" class="int" />
                        </li>
                        <li>
                            <label for="mail_server_114la">邮箱：</label>
                            <select id="mail_server_114la" onchange="MailLogin.change(this)">
                                <option selected="selected">--请选择邮箱--</option>
                                <option>@163.com 网易</option>
                                <option>@126.com 网易</option>
                                <option>@vip.163.com 网易</option>
                                <option>@sina.com 新浪</option>
                                <option>@vip.sina.com 新浪</option>
                                <option>@yahoo.com.cn</option>
                                <option>@yahoo.cn</option>
                                <option>@sohu.com 搜狐</option>
                                <option>@tom.com</option>
                                <option>@21cn.com</option>
                                <option>@yeah.net</option>
                                <option>天涯帐号</option>
                                <option>百度帐号</option>
                                <option>人人网</option>
                                <option>51.com</option>
                                <option>ChinaRen</option>
                                <option style="color:#36c;">--以下请在弹出页登录&darr;--</option>
                                <option>开心网</option>
                                <option>QQ空间</option>
                                <option>@qq.com</option>
                                <option>@139.com</option>
                                <option>@gmail.com</option>
                                <option>@hotmail.com</option>
                                <option>@188.com</option>
                            </select>
                        </li>
                        <li>
                            <label for="mail_passwd_114la">密码：</label>
                            <input type="password" id="mail_passwd_114la" class="int" />
                            <input type="submit" value="登 录" id="mail_submit_114la" class="btn" />
                        </li>
                    </ul>
                </form>
            </div>
            <div id="bn">
                <ul id="cal">
                    <li class="date"><script type="text/javascript">document.write(Calendar.day());</script> </li>
                    <li class="lcal"><script type="text/javascript">document.write(Calendar.cnday());</script> </li>
                    <li class="m"><a href="http://tool.115.com/live/calendar/" class="hl">黄历</a><a href="http://astro.114la.com/" class="yc">运程</a><a href="public/widget/clock/index.html" class="clock">闹钟</a></li>
                </ul>
                <div id="bn2" class="fl">
                <script type="text/javascript" src="static/js/header.js"></script>
                
                </div>
                <div class="fl" style="margin-left:5px;"><a rel="nr" href="http://www.vancl.com/?Source=alkj1"><img border="0" src="http://www.114la.com/static/images/banner/vancl10060.jpg" alt="VANCL 凡客诚品"></a></div>
                <div class="fl" style="margin-left:5px;"><a href="http://www.amazon.cn/default.asp?source=114la"><img border="0" src="http://www.114la.com/static/images/banner/joyonew.gif" alt="卓越购物"></a></div>
            </div>
        </div>
        <b class="rc-bt"><b></b></b></div>
        
        
        
        
    <div id="search">
        <div id="ex">
        <?php $_from = $this->_tpl_vars['notice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
            <p><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
"<?php if ($this->_tpl_vars['i']['color']): ?> style="color:<?php echo $this->_tpl_vars['i']['color']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a></p>
        <?php endforeach; endif; unset($_from); ?>
        </div>
       <div id="sm" class="clearfix">
            <ul id="sm_tab">
                <?php $_from = $this->_tpl_vars['search_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['search_class1']):
?>
                <li s_tab="js_type_<?php echo $this->_tpl_vars['search_class1']['classid']; ?>
" <?php if ($this->_tpl_vars['search_class1']['is_default']): ?> class="active" default="1"<?php endif; ?>><?php echo $this->_tpl_vars['search_class1']['classname']; ?>
</li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>
        <div id="sb" class="clearfix">

            <?php $_from = $this->_tpl_vars['search_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['search_class2']):
?>
            <div id="js_type_<?php echo $this->_tpl_vars['search_class2']['classid']; ?>
" <?php if ($this->_tpl_vars['search_class2']['is_default'] != 1): ?> style="display:none;"<?php endif; ?>>
                <div class="sw">
                    <p id="sw_<?php echo $this->_tpl_vars['search_class2']['classid']; ?>
">
                        <?php $_from = $this->_tpl_vars['search_keyword']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keyword']):
?>
                            <?php if ($this->_tpl_vars['keyword']['class'] == $this->_tpl_vars['search_class2']['classid']): ?>
                                <a href="<?php echo $this->_tpl_vars['keyword']['url']; ?>
"><?php echo $this->_tpl_vars['keyword']['name']; ?>
</a>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </p><!--/ keywords-->
                </div>
                <div class="sf">
                    <form action="http://115.com/s" method="get" target="_blank">
                        <a href="http://115.com" id="sf_label" rel="lk"><img src="static/images/s/115.gif" width="105" height="35" rel="img" /></a><input type="text" name="q" class="int" autocomplete="off" rel="kw"/><input class="searchint" type="submit" value="115聚搜" rel="btn" />
                        <div class="ctrl">
                        <?php $_from = $this->_tpl_vars['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row1']):
?>
                            <?php if ($this->_tpl_vars['row1']['class'] == $this->_tpl_vars['search_class2']['classid']): ?>
                            <label><input class="radio" type="radio" value="engine_<?php echo $this->_tpl_vars['row1']['id']; ?>
" name="search_select" rad="engine_<?php echo $this->_tpl_vars['row1']['id']; ?>
" <?php if ($this->_tpl_vars['row1']['is_default']): ?> checked="checked"<?php endif; ?> /><?php echo $this->_tpl_vars['row1']['search_select']; ?>
</label>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                        </div>
                    </form>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?>
           
            <div id="suggest" style="display:none"></div>
        </div>
    </div>
    
        
    <div id="hot"><?php $_from = $this->_tpl_vars['advert_search_footer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?><a <?php if ($this->_tpl_vars['i']['color'] == '#FF0000' || $this->_tpl_vars['i']['color'] == 'red'): ?>class="red"<?php elseif ($this->_tpl_vars['i']['color'] == '#008000' || $this->_tpl_vars['i']['color'] == 'green'): ?>class="green"<?php elseif ($this->_tpl_vars['i']['color'] == '#0000FF' || $this->_tpl_vars['i']['color'] == 'blue'): ?>class="blue"<?php elseif ($this->_tpl_vars['i']['color'] != ''): ?>style="color:<?php echo $this->_tpl_vars['i']['color']; ?>
;"<?php endif; ?> target="_blank" href="<?php echo $this->_tpl_vars['i']['link']; ?>
"><?php echo $this->_tpl_vars['i']['title']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
    <div id="content">
        <div id="cate"><b class="rc-tp"><b></b></b>
            <div class="box">
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
                    <ul id="tool-tab" class="clearfix">
                        <li id="tool-tab-def" rel="tb4" class="active">手机</li>
                        <li rel="tb1">机票</li>
                        <li rel="tb2">酒店</li>
                        <li id="tool-tab-last" rel="tb3">旅游</li>
                    </ul>
                    <div id="tb">
                        <div id="tb1" class="tbox" style="display:none;">
                            <form class="plane" action="http://site.daodao.com/114la/go" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
                                <p class="first">&nbsp;从 &nbsp;
                                    <input type="text" class="int_b" name="from" value="北京" />
                                    &nbsp;到&nbsp;
                                    <input name="to" type="text" class="int_b" value="上海" />
                                </p>
                                <p>日期&nbsp;
                                    <input type="text" class="int" id="jp_today" name="date" />
                                    &nbsp;
                                    <input type="submit" value="查看折扣价" style="font-size:12px;" class="btn" />
                                </p>
                            </form>
                        </div>
                        <div id="tb2" class="tbox" style="display:none">
                            <form class="plane" action="http://www.daodao.com/HACSearch" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
                                <p class="first">城市&nbsp;
                                    <input  name="q" class="int_b" value="北京" style="width:40px">
                                    &nbsp;价格&nbsp;
                                    <select name="l1price" style="font-size:12px; width:75px;">
                                        <option value="0,200">0-200元</option>
                                        <option value="201,500">201-500元</option>
                                        <option value="501,800">501-800元</option>
                                        <option value="800">800元以上</option>
                                        <option value="" selected="selected">不限</option>
                                    </select>
                                </p>
                                <p>酒店&nbsp;
                                    <input  name="nameContains" class="int_b" value="">
                                    &nbsp;
                                    <input type="submit" value="搜 索" class="btn" style="width:70px;" />
                                    <input type="hidden" name="m" value="13078" />
                                </p>
                            </form>
                        </div>
                        <div id="tb3" class="tbox" style="display:none">
                            <form class="plane" action="http://www.daodao.com/Search" onsubmit="daodao.searchTravel(); return false;">
                                <p class="first">城　市&nbsp;
                                    <input type="text" id="daodao_travel_q" class="int_b" name="q" value="北京" />
                                </p>
                                <p>关键字&nbsp;
                                    <input class="int_b" id="daodao_travel_k" value="">
                                    &nbsp;
                                    <input type="submit" value="旅游搜索" style="height:22px; width:70px;" class="btn" />
                                    <input type="hidden" name="m" value="13078" />
                                </p>
                            </form>
                        </div>
                        <div id="tb4" class="tbox" style="margin-left:-5px;">
                            <form class="plane" action="http://www.915.com/cz/" method="post" target="_blank">
                                <p class="first">
                                    <select name="parvalue" style="font-size:12px; padding:1px;">
                                    	<option value="300">300元</option>
                                        <option selected="selected" value="100">100元</option>
                                        <option value="50">50元</option>
                                        <option value="30">30元</option>
                                    </select>
                                    <input type="text" class="int_b" name="mobile" maxlength="11" value="请输入手机号码" onclick="(this.value == '请输入手机号码')?this.value='':this.focus()" onblur="this.value==''?this.value='请输入手机号码':this.value = this.value" style="width:88px;color:#666;font-size:12px;*line-height:16px;" />
                                    <input type="submit" value="充值" style="height:22px;  width:38px;" class="btn" />
                                    <input type="hidden" name="ac" value="topup_submit" />
                                    <input type="hidden" name="source" value="114la" />
                                </p>
                                <p style="text-align:center;"><span class="red">1</span>分钟到账&nbsp;&nbsp;最低<span class="red">9.85</span>折&nbsp;&nbsp;&nbsp;<a href="http://www.915.com" class="red">上915淘号</a></p>
                            </form>
                        </div>
                    </div>
                </div>
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
        <b class="rc-bt"><b></b></b></div>
        <div id="main">
            <div id="bm"><b class="rc-tp"><b></b></b>
                <ul id="bm_tab" class="clearfix">
                    <li id="bm-def" class="active" rel="fm">名站导航</li>
                    <?php $_from = $this->_tpl_vars['famous_tab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['tab']):
?>
                    <li rel="bb<?php echo $this->_tpl_vars['i']; ?>
" url="<?php echo $this->_tpl_vars['tab']['url']; ?>
" nocache=<?php echo $this->_tpl_vars['tab']['nocache']; ?>
><?php echo $this->_tpl_vars['tab']['name']; ?>
</li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
                <div id="qs"><b class="l"></b>
                    <div id="q_int" class="n">
                        <div class="button-wrap">
                            <input type="text" />
                        </div>
                    </div>
                    <b class="r"></b></div>
            </div>
            <div id="bb">
                <div class="box">
                    <div id="fm">
                        <ul id="topsite" class="clearfix">
                                                        	<?php $_from = $this->_tpl_vars['mz_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                            	<?php echo $this->_tpl_vars['i']['html']; ?>

                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                        <ul id="fmsite" class="clearfix">
                                                        <?php $_from = $this->_tpl_vars['mz_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                            <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" <?php if ($this->_tpl_vars['i']['namecolor'] == '#FF0000' || $this->_tpl_vars['i']['namecolor'] == 'red'): ?>class="red"<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#008000' || $this->_tpl_vars['i']['namecolor'] == 'green'): ?>class="green"<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#0000FF' || $this->_tpl_vars['i']['namecolor'] == 'blue'): ?>class="blue"<?php elseif ($this->_tpl_vars['i']['namecolor'] != ''): ?>style="color:<?php echo $this->_tpl_vars['i']['namecolor']; ?>
;"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a></li>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                    </div>
                    <div id="qs-result" style="display:none;"></div>
                </div>
                <b class="rc-bt"><b></b></b></div>
            <div id="hot2">
                                <?php echo $this->_tpl_vars['advert_notice']; ?>

            </div>
            <div id="ls"><b class="rc-tp"><b></b></b>
                <div class="box">
					                    <dl id="local" style="visibility:hidden;">
                        <dt id="loc_t"></dt>
                        <dd class="l" id="loc_c"></dd>
                        <dd class="m" id="loc_m"></dd>
                    </dl>
                                        <?php $_from = $this->_tpl_vars['kz_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['n'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['n']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['n']['iteration']++;
?><dl <?php if ($this->_foreach['n']['iteration'] % 2 == 0): ?>class="alt"<?php endif; ?>id="ls<?php echo $this->_foreach['n']['iteration']; ?>
"><dt><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['key']; ?>
</a></dt><dd class="l"><?php $_from = $this->_tpl_vars['item']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" <?php if ($this->_tpl_vars['v']['namecolor'] == '#FF0000' || $this->_tpl_vars['v']['namecolor'] == 'red'): ?>class="red"<?php elseif ($this->_tpl_vars['v']['namecolor'] == '#008000' || $this->_tpl_vars['v']['namecolor'] == 'green'): ?>class="green"<?php elseif ($this->_tpl_vars['v']['namecolor'] == '#0000FF' || $this->_tpl_vars['v']['namecolor'] == 'blue'): ?>class="blue"<?php elseif ($this->_tpl_vars['v']['namecolor'] != ''): ?>style="color:<?php echo $this->_tpl_vars['v']['namecolor']; ?>
;"<?php endif; ?>><?php echo $this->_tpl_vars['v']['name']; ?>
</a><?php endforeach; endif; unset($_from); ?></dd><dd class="m"><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
">更多 &raquo;</a></dd></dl><?php endforeach; endif; unset($_from); ?>
                </div>
                <b class="rc-bt"><b></b></b></div>
        </div>
    </div>
    <div id="meta"><b class="rc-tp"><b></b></b>
        <div class="box">
            <ul>
                    <?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent']):
?>
        <li class="bd">
            <strong><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/topic/<?php echo $this->_tpl_vars['parent']['path']; ?>
/index.htm"><?php echo $this->_tpl_vars['parent']['name']; ?>
</a></strong>
            <?php if (! empty ( $this->_tpl_vars['parent']['son'] )): ?>
            <?php $_from = $this->_tpl_vars['parent']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <a href="<?php if ($this->_tpl_vars['v']['url']): ?><?php echo $this->_tpl_vars['v']['url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['URL_HTML']; ?>
/topic/<?php echo $this->_tpl_vars['parent']['path']; ?>
/index.htm#<?php echo $this->_tpl_vars['v']['id']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>
            <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <span class="more"><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/topic/<?php echo $this->_tpl_vars['parent']['path']; ?>
/index.htm">更多 &raquo;</a></span>
        </li>
        <?php endforeach; endif; unset($_from); ?>
         <?php if ($this->_tpl_vars['links']): ?>
         <li class="bd">
            <strong><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/catalog/links.htm">友情链接</a></strong>
            <?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['links']):
?>
            <a  href="<?php echo $this->_tpl_vars['links']['site_url']; ?>
" title="<?php echo $this->_tpl_vars['links']['site_name']; ?>
"><?php echo $this->_tpl_vars['links']['site_name']; ?>
</a>
            <?php endforeach; endif; unset($_from); ?>
            <span class="more"><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/catalog/links.htm">更多 &raquo;</a></span>
         </li>
         <?php endif; ?>
            </ul>
        </div>
    </div>
    <div id="fs">
        <div class="box">
            <form id="fs_form" onsubmit="miniSearch.gosearch(this);return false;" action="http://115.com/s" target="_blank" method="get">
            <ul class="clearfix">
            <li id="f_label">关键字：</li>
            <li id="f_int">
            <input name="q" type="text"/>
            </li>
            <li id="f_btn">
            <input type="submit" value="搜 索" />
            </li>
            </ul>
            </form>
            <form id="taobao-form" action="http://search8.taobao.com/browse/search_auction.htm" target="_blank" style="display:none;">
            <input type="text" name="q" id="taobao-q" />
            </form>
            <div id="f_radio">
            <label for="s0"><input type="radio" name="st" class="radio" id="s0" checked="checked" />115搜索</label>
            <label for="s1"><input type="radio" name="st" class="radio" id="s1" />Google</label>
            <label for="s4"><input type="radio" name="st" class="radio" id="s4" />彩票</label>
            </div>
        </div>
        <b class="rc-bt"><b></b></b></div>
    <div id="footer">
        <div class="link"><a href="http://www.114la.com/114la/">关于114啦建站系统V1.15</a> | <a href="<?php echo $this->_tpl_vars['URL']; ?>
/url-submit/">网站提交</a> | <a href="<?php echo $this->_tpl_vars['URL']; ?>
/feedback">意见反馈</a> | <a href="http://www.114la.com/114la/">源码下载</a><br />
        </div>
        <div class="hr"></div>
        <p class="copyright">Powered by 114啦网址导航&copy;2005-<script type="text/javascript">document.write(new Date().getFullYear());</script>. All Rights Reserved. <a href="http://www.miibeian.gov.cn/"><?php echo $this->_tpl_vars['icp']; ?>
</a></p>

    </div>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/config.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/main.js"></script>
<script type="text/javascript">
    try{
		if(window.SR){
			SR.SearchData = {
                <?php $_from = $this->_tpl_vars['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row2']):
?>
                    engine_<?php echo $this->_tpl_vars['row2']['id']; ?>
: {
						action: "<?php echo $this->_tpl_vars['row2']['action']; ?>
",
						name: "<?php echo $this->_tpl_vars['row2']['name']; ?>
",
						btn: "<?php echo $this->_tpl_vars['row2']['btn']; ?>
",
						img: ["<?php echo $this->_tpl_vars['row2']['img_text']; ?>
","<?php echo $this->_tpl_vars['row2']['img_url']; ?>
"],
						url: "<?php echo $this->_tpl_vars['row2']['url']; ?>
",
						params: {
							<?php echo $this->_tpl_vars['row2']['params']; ?>

						}
                    },
                <?php endforeach; endif; unset($_from); ?>
				none:{}
            }	
		}
		
		var sbBox = document.getElementById('sb');
		var sbForms = sbBox.getElementsByTagName('form');
		for(var i = 0,len = sbForms.length; i < len; i++){
			sbForms[i].reset();
		}
		
		var sbRadios = sbBox.getElementsByTagName('input');
		var inputTxtArr = [];
		if(sbRadios.length){
			var setRadios = [];
			for(var i = 0,len = sbRadios.length; i < len; i++){
				var input = sbRadios[i];
				if(input.getAttribute("rad") && input.checked){
					setRadios.push(input);
				}
				else if(input.getAttribute("rel") == "kw"){
					var key = inputTxtArr.push(input);
					input.setAttribute("index",key - 1);
					
				}
			}
			try{
			for(var i = 0,len = setRadios.length; i < len; i++){
				var input = setRadios[i];
				
				SR.RadioMod.ClickRadio(input);
			}
			}catch(e){}
		}
	}catch(e){}
    </script>
<div class="tongji"><?php echo $this->_tpl_vars['tongji']; ?>
</div>

</div>

</body>
</html>