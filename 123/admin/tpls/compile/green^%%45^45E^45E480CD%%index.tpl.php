<?php /* Smarty version 2.6.25, created on 2017-07-14 13:34:58
         compiled from index.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['URL']; ?>
/public/images/favicon.ico" type="image/x-icon" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['index_meta_keyword']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['index_meta_description']; ?>
" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link href="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/style/new_green/base.css" rel="stylesheet" type="text/css" />
<style id="temp-css" type="text/css"></style>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/base.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/core.js"></script>
<script type="text/javascript">if(Cookie.get('layout')){window.location.href='kp.html';}</script>
<base target="_blank" />


<!--雪花特效1

<style type="text/css">
body{background:url("<?php echo $this->_tpl_vars['URL']; ?>
/public/widget/snow/images/bg.gif") no-repeat center top fixed; margin-top:0px;}
img, div, input{behavior:url("<?php echo $this->_tpl_vars['URL']; ?>
/public/widget/snow/js/iepngfix/iepngfix.htc");}
</style>
<script src="<?php echo $this->_tpl_vars['URL']; ?>
/public/widget/snow/js/snow.js" type="text/javascript"></script>
<script>createSnow("<?php echo $this->_tpl_vars['URL']; ?>
/public/widget/snow/images/", 50);</script>


 -->


    <script>
        // Minified version of isMobile included in the HTML since it's small
        !function(a){var b=/iPhone/i,c=/iPod/i,d=/iPad/i,e=/(?=.*bAndroidb)(?=.*bMobileb)/i,f=/Android/i,g=/(?=.*bAndroidb)(?=.*bSD4930URb)/i,h=/(?=.*bAndroidb)(?=.*b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)b)/i,i=/IEMobile/i,j=/(?=.*bWindowsb)(?=.*bARMb)/i,k=/BlackBerry/i,l=/BB10/i,m=/Opera Mini/i,n=/(CriOS|Chrome)(?=.*bMobileb)/i,o=/(?=.*bFirefoxb)(?=.*bMobileb)/i,p=new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)","i"),q=function(a,b){return a.test(b)},r=function(a){var r=a||navigator.userAgent,s=r.split("[FBAN");return"undefined"!=typeof s[1]&&(r=s[0]),s=r.split("Twitter"),"undefined"!=typeof s[1]&&(r=s[0]),this.apple={phone:q(b,r),ipod:q(c,r),tablet:!q(b,r)&&q(d,r),device:q(b,r)||q(c,r)||q(d,r)},this.amazon={phone:q(g,r),tablet:!q(g,r)&&q(h,r),device:q(g,r)||q(h,r)},this.android={phone:q(g,r)||q(e,r),tablet:!q(g,r)&&!q(e,r)&&(q(h,r)||q(f,r)),device:q(g,r)||q(h,r)||q(e,r)||q(f,r)},this.windows={phone:q(i,r),tablet:q(j,r),device:q(i,r)||q(j,r)},this.other={blackberry:q(k,r),blackberry10:q(l,r),opera:q(m,r),firefox:q(o,r),chrome:q(n,r),device:q(k,r)||q(l,r)||q(m,r)||q(o,r)||q(n,r)},this.seven_inch=q(p,r),this.any=this.apple.device||this.android.device||this.windows.device||this.other.device||this.seven_inch,this.phone=this.apple.phone||this.android.phone||this.windows.phone,this.tablet=this.apple.tablet||this.android.tablet||this.windows.tablet,"undefined"==typeof window?this:void 0},s=function(){var a=new r;return a.Class=r,a};"undefined"!=typeof module&&module.exports&&"undefined"==typeof window?module.exports=r:"undefined"!=typeof module&&module.exports&&"undefined"!=typeof window?module.exports=s():"function"==typeof define&&define.amd?define("isMobile",[],a.isMobile=s()):a.isMobile=s()}(this);


        // My own arbitrary use of isMobile, as an example
        (function () {
            var MOBILE_SITE = 'http://m.bookfuns.com', // site to redirect to
                NO_REDIRECT = 'noredirect'; // cookie to prevent redirect

            // I only want to redirect iPhones, Android phones and a handful of 7" devices
            if (isMobile.apple.phone || isMobile.android.phone || isMobile.seven_inch) {

                // Only redirect if the user didn't previously choose
                // to explicitly view the full site. This is validated
                // by checking if a "noredirect" cookie exists
                if ( document.cookie.indexOf(NO_REDIRECT) === -1 ) {
                    document.location = MOBILE_SITE;
                }
            }
        })();
    </script>

</head>
<body>
	<div class="holiday_effect"></div>

<em class="filter" style="display:none;"></em>
<div id="wrap">
    <div id="top" class="clearfix">
	<!-- 作废
        <div id="weather"><script>if(top.location == self.location){document.write('<iframe width="540" height="22" frameborder="0" scrolling="no" allowtransparency="true" src="public/widget/weather/index.html"></iframe>')} </script> </div>
     -->   
	   <ul id="set">
            <li class="sethome"><a onclick="Yl.setHome(this,this.href); return false;" target="_self" href="<?php echo $this->_tpl_vars['URL']; ?>
">把设为主页</a></li>
            <li><a href="<?php echo $this->_tpl_vars['URL']; ?>
/" target="_parent" class="active">标准版</a>  | <a href="//m.bookfuns.com" target="_parent" >手机版</a></li>
            <!--<li id="skinlist"><a class="blue" title="蓝色">1</a><a class="green" title="绿色">2</a><a class="pink" title="粉色">3</a></li>
            <li class="setting"><a target="_self" href="javascript:void(0);" id="showSetting">个性设置</a></li>-->
        </ul>
    </div>
    <div id="header">
        <div class="box clearfix">
            <h1 id="logo"><embed  width="117" height="69" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/swf/clock.swf" type="application/x-shockwave-flash"></embed></h1>

			<div id="bn">
                <ul id="cal">
                    <li class="date"><script type="text/javascript">document.write(Calendar.day());</script> </li>
                    <li class="lcal"><script type="text/javascript">document.write(Calendar.cnday());</script> </li>
                    <li class="m"><a href="http://tool.115.com/live/calendar/" class="hl">黄历</a><a href="http://astro.114la.com/" class="yc">运程</a><a href="public/widget/clock/index.html" class="clock">闹钟</a></li>
                </ul>
                <div id="bn2">
                <script type="text/javascript" src="static/js/header.js"></script>
                </div>
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
    
        
    <div id="hot">        <?php $_from = $this->_tpl_vars['advert_search_footer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?><a <?php if ($this->_tpl_vars['i']['color'] == '#FF0000' || $this->_tpl_vars['i']['color'] == 'red'): ?>class="red"<?php elseif ($this->_tpl_vars['i']['color'] == '#008000' || $this->_tpl_vars['i']['color'] == 'green'): ?>class="green"<?php elseif ($this->_tpl_vars['i']['color'] == '#0000FF' || $this->_tpl_vars['i']['color'] == 'blue'): ?>class="blue"<?php elseif ($this->_tpl_vars['i']['color'] != ''): ?>style="color:<?php echo $this->_tpl_vars['i']['color']; ?>
;"<?php endif; ?> target="_blank" href="<?php echo $this->_tpl_vars['i']['link']; ?>
"><?php echo $this->_tpl_vars['i']['title']; ?>
</a><?php endforeach; endif; unset($_from); ?>
    </div>
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
						
 <!-- 微信公众号二维码-->
<div class="box">
<a href="http://bookfuns.com"><img src="<?php echo $this->_tpl_vars['URL']; ?>
/public/images/qrcode.jpg" width="220px" /></a>
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
                </ul><div id="qs"><b class="l"></b><div id="q_int" class="n"><div class="button-wrap"><input type="text" /></div></div><b class="r"></b></div>
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
			
<!-- 图片轮 <div class="box">     播 -->
<!-- 图片轮<iframe vspace="0" hspace="0" scrolling="no" frameborder="0" id="clip" name="clip" width="750" height="450"  src="public/widget/pic/index.html"></iframe>    播--> 
<!-- 图片轮 </div>    播-->


<!-- 爱词霸每天一句话--> <div class="box">
<!-- 每天一句话--> <script type="text/javascript" src="http://open.iciba.com/ds_open.php?id=19401&name=%E8%AF%BB%E4%B9%A6%E5%9C%88&auth=6564C8AA803FCAC797501D158AA8F2FD" charset="utf-8"></script>
<!-- 每天一句话--> </div>


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
				
				<!-- 排行榜-->                
<div class="box">
<iframe vspace="0" hspace="0" scrolling="no" frameborder="0" id="clip" name="clip" width="200" height="353" src="http://top.baidu.com/clip?b=1&hd_h_info=1&width=160&hd_trend=0&hd_search=1&hd_border=1&hd_h=0&hd_meshline=0&hd_searches=1&col=1" ></iframe>
<iframe vspace="0" hspace="0" scrolling="no" frameborder="0" id="clip" name="clip" width="200" height="353" src="http://top.baidu.com/clip?b=2&hd_h_info=1&width=160&hd_trend=0&hd_search=1&hd_border=1&hd_h=0&hd_meshline=0&hd_searches=1&col=1&p_name=%E4%BB%8A%E6%97%A5%E7%83%AD%E9%97%A8%E6%90%9C%E7%B4%A2%E6%8E%92%E8%A1%8C%E6%A6%9C" ></iframe>
<iframe vspace="0" hspace="0" scrolling="no" frameborder="0" id="clip" name="clip" width="200" height="353" src="http://top.baidu.com/clip?b=450&hd_h_info=1&p_name=%E4%BB%8A%E6%97%A5%E7%95%85%E9%94%80%E4%B9%A6%E6%8E%92%E8%A1%8C%E6%A6%9C&hd_border=1&hd_search=1&hd_trend=1&hd_searches=1&col=1&width=200" ></iframe>
</div>
				
				

                <b class="rc-bt"><b></b></b></div>
								                     


        </div>
		
		
    </div>
	<!-- 连续剧排行榜-->
	<!--
	    <div id="fs">


        <div class="box">
		<div style="width:960px;height:300px;overflow:hidden;border:1px solid #000000;">
			<div style="width:960px;height:500px;margin:-200px 0px 0px 0px;">
　　	<IFRAME name=I1 src="http://v.hao123.com/dianshi/" marginwidth=-100 marginheight=-300 frameBorder=0 width=960 scrolling=no height=500 align="center"></IFRAME>
	</div>	
		</div>
	</div>		


        <b class="rc-bt"><b></b></b></div>
	-->
	
	
	
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


    <div id="footer">

<!-- 底角备用  -->

	
	
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

	<!-- 
<div class="tongji"><?php echo $this->_tpl_vars['tongji']; ?>
</div>


basic scripts		


 -->
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
</html>
<!--作废代码-->
<!--以图片调用任务
<img src="../task/index.php" style="width:0px; height:0px;display:none;" />
-->