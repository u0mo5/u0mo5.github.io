<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<{$URL}>/public/images/favicon.ico" type="image/x-icon" />
<meta name="keywords" content="<{$index_meta_keyword}>" />
<meta name="description" content="<{$index_meta_description}>" />
<title><{$title}></title>
<link href="<{$URL}>/public/home/style/new_green/base.css" rel="stylesheet" type="text/css" />
<style id="temp-css" type="text/css"></style>
<script type="text/javascript" src="<{$URL}>/public/home/js/base.js"></script>
<script type="text/javascript" src="<{$URL}>/public/home/js/core.js"></script>
<script type="text/javascript">if(Cookie.get('layout')){window.location.href='kp.html';}</script>
<base target="_blank" />


<!--雪花特效1

<style type="text/css">
body{background:url("<{$URL}>/public/widget/snow/images/bg.gif") no-repeat center top fixed; margin-top:0px;}
img, div, input{behavior:url("<{$URL}>/public/widget/snow/js/iepngfix/iepngfix.htc");}
</style>
<script src="<{$URL}>/public/widget/snow/js/snow.js" type="text/javascript"></script>
<script>createSnow("<{$URL}>/public/widget/snow/images/", 50);</script>


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
            <li class="sethome"><a onclick="Yl.setHome(this,this.href); return false;" target="_self" href="<{$URL}>">把设为主页</a></li>
            <li><a href="<{$URL}>/" target="_parent" class="active">标准版</a>  | <a href="//m.bookfuns.com" target="_parent" >手机版</a></li>
            <!--<li id="skinlist"><a class="blue" title="蓝色">1</a><a class="green" title="绿色">2</a><a class="pink" title="粉色">3</a></li>
            <li class="setting"><a target="_self" href="javascript:void(0);" id="showSetting">个性设置</a></li>-->
        </ul>
    </div>
    <div id="header">
        <div class="box clearfix">
            <h1 id="logo"><embed  width="117" height="69" src="<{$URL}>/public/swf/clock.swf" type="application/x-shockwave-flash"></embed></h1>

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
        <{foreach from = $notice_list item = i}>
            <p><a href="<{$i.url}>"<{if $i.color}> style="color:<{$i.color}>"<{/if}>><{$i.name}></a></p>
        <{/foreach}>
        </div>
        <div id="sm" class="clearfix">
            <ul id="sm_tab">
                <{foreach from=$search_class item=search_class1}>
                <li s_tab="js_type_<{$search_class1.classid}>" <{if $search_class1.is_default}> class="active" default="1"<{/if}>><{$search_class1.classname}></li>
                <{/foreach}>
            </ul>
        </div>
        <div id="sb" class="clearfix">

            <{foreach from=$search_class item=search_class2}>
            <div id="js_type_<{$search_class2.classid}>" <{if $search_class2.is_default!=1}> style="display:none;"<{/if}>>
                <div class="sw">
                    <p id="sw_<{$search_class2.classid}>">
                        <{foreach from=$search_keyword item=keyword}>
                            <{if $keyword.class == $search_class2.classid}>
                                <a href="<{$keyword.url}>"><{$keyword.name}></a>
                            <{/if}>
                        <{/foreach}>
                    </p><!--/ keywords-->
                </div>
                <div class="sf">
                    <form action="http://115.com/s" method="get" target="_blank">
                        <a href="http://115.com" id="sf_label" rel="lk"><img src="static/images/s/115.gif" width="105" height="35" rel="img" /></a><input type="text" name="q" class="int" autocomplete="off" rel="kw"/><input class="searchint" type="submit" value="115聚搜" rel="btn" />
                        <div class="ctrl">
                        <{foreach from=$search item=row1}>
                            <{if $row1.class == $search_class2.classid}>
                            <label><input class="radio" type="radio" value="engine_<{$row1.id}>" name="search_select" rad="engine_<{$row1.id}>" <{if $row1.is_default}> checked="checked"<{/if}> /><{$row1.search_select}></label>
                            <{/if}>
                        <{/foreach}>
                        </div>
                    </form>
                </div>
            </div>
            <{/foreach}>
           
            <div id="suggest" style="display:none"></div>
        </div>
    </div>
    
        
    <div id="hot"><{*名站上方广告*}>
        <{foreach from = $advert_search_footer item = i}><a <{if $i.color=='#FF0000' || $i.color=='red'}>class="red"<{elseif $i.color=='#008000' || $i.color=='green'}>class="green"<{elseif $i.color=='#0000FF' || $i.color=='blue'}>class="blue"<{elseif $i.color!=''}>style="color:<{$i.color}>;"<{/if}> target="_blank" href="<{$i.link}>"><{$i.title}></a><{/foreach}>
    </div>
    <div id="content">
        <div id="cate"><b class="rc-tp"><b></b></b>
            <div class="box">
                <div id="tool">
                    <h2 class="tool-title">实用工具<span><a href="http://tool.115.com/" rel="nr">更多&raquo;</a></span></h2>
                    <ul>
                        <{*实用工具*}>
                        <{foreach from = $tools item = i}>
                            <li><a href="<{$i.url}>"<{if $i.color}> style="color:<{$i.color}>"<{/if}>><{$i.name}></a></li>
                        <{/foreach}>
                    </ul>




                </div>
                <{*网站分类*}>
                <{foreach from = $site_class key = k item = parent}>
                    <h2><{$k}></h2>
                    <ul<{if $parent.0.classname_len > 6}> class="c2"<{/if}>>
                    <{foreach from = $parent item = i}>
                        <li ><a href="<{$i.urlpath}>"><{$i.classname}></a></li>
                    <{/foreach}>
                    </ul>
                <{/foreach}>
			            </div>
						
 <!-- 微信公众号二维码-->
<div class="box">
<a href="http://bookfuns.com"><img src="<{$URL}>/public/images/qrcode.jpg" width="220px" /></a>
</div>
						





        <b class="rc-bt"><b></b></b></div>
        <div id="main">
            <div id="bm"><b class="rc-tp"><b></b></b>
                <ul id="bm_tab" class="clearfix">
                    <li id="bm-def" class="active" rel="fm">名站导航</li>
                    <{foreach from = $famous_tab item = tab key = i}>
                    <li rel="bb<{$i}>" url="<{$tab.url}>" nocache=<{$tab.nocache}>><{$tab.name}></li>
                    <{/foreach}>
                </ul><div id="qs"><b class="l"></b><div id="q_int" class="n"><div class="button-wrap"><input type="text" /></div></div><b class="r"></b></div>
            </div>
            <div id="bb">
                <div class="box">
                    <div id="fm">
                        <ul id="topsite" class="clearfix">
                            <{*TOP 名站*}>
                            	<{foreach from = $mz_top item = i}>
                            	<{$i.html}>
                            <{/foreach}>
                        </ul>
                        <ul id="fmsite" class="clearfix">
                            <{*名站*}>
                            <{foreach from = $mz_list item = i}>
                            <li><a href="<{$i.url}>" <{if $i.namecolor=='#FF0000' || $i.namecolor=='red'}>class="red"<{elseif $i.namecolor=='#008000' || $i.namecolor=='green'}>class="green"<{elseif $i.namecolor=='#0000FF' || $i.namecolor=='blue'}>class="blue"<{elseif $i.namecolor!=''}>style="color:<{$i.namecolor}>;"<{/if}>><{$i.name}></a></li>
                            <{/foreach}>
                        </ul>
                    </div>
                    <div id="qs-result" style="display:none;"></div>
                </div>
                <b class="rc-bt"><b></b></b></div>
            <div id="hot2">
                <{*名站下方广告*}>
                <{$advert_notice}>
            </div>
			
<!-- 图片轮 <div class="box">     播 -->
<!-- 图片轮<iframe vspace="0" hspace="0" scrolling="no" frameborder="0" id="clip" name="clip" width="750" height="450"  src="public/widget/pic/index.html"></iframe>    播--> 
<!-- 图片轮 </div>    播-->


<!-- 爱词霸每天一句话--> <div class="box">
<!-- 每天一句话--> <script type="text/javascript" src="http://open.iciba.com/ds_open.php?id=19401&name=%E8%AF%BB%E4%B9%A6%E5%9C%88&auth=6564C8AA803FCAC797501D158AA8F2FD" charset="utf-8"></script>
<!-- 每天一句话--> </div>


            <div id="ls"><b class="rc-tp"><b></b></b>
                <div class="box">
                      <{*城市导航*}>
                    <dl id="local" style="visibility:hidden;">
                        <dt id="loc_t"></dt>
                        <dd class="l" id="loc_c"></dd>
                        <dd class="m" id="loc_m"></dd>
                    </dl>
                    <{*酷站导航*}>
                    <{foreach from = $kz_list key ='key' item = 'item' name = n}><dl <{if $smarty.foreach.n.iteration % 2 eq 0}>class="alt"<{/if}>id="ls<{$smarty.foreach.n.iteration}>"><dt><a href="<{$item.url}>"><{$key}></a></dt><dd class="l"><{foreach key='k' item='v' from=$item.son}><a href="<{$v.url}>" <{if $v.namecolor=='#FF0000' || $v.namecolor=='red'}>class="red"<{elseif $v.namecolor=='#008000' || $v.namecolor=='green'}>class="green"<{elseif $v.namecolor=='#0000FF' || $v.namecolor=='blue'}>class="blue"<{elseif $v.namecolor!=''}>style="color:<{$v.namecolor}>;"<{/if}>><{$v.name}></a><{/foreach}></dd><dd class="m"><a href="<{$item.url}>">更多 &raquo;</a></dd></dl><{/foreach}>

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



            <{*专题*}>
        <{foreach from = $topics item = parent}>
        <li class="bd">
            <strong><a href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm"><{$parent.name}></a></strong>
            <{if !empty($parent.son)}>
            <{foreach from = $parent.son item = v}>
            <a href="<{if $v.url}><{$v.url}><{else}><{$URL_HTML}>/topic/<{$parent.path}>/index.htm#<{$v.id}><{/if}>"><{$v.name}></a>
            <{/foreach}>
            <{/if}>
            <span class="more"><a href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm">更多 &raquo;</a></span>
        </li>
        <{/foreach}>
         <{if $links}>
         <li class="bd">
            <strong><a href="<{$URL_HTML}>/catalog/links.htm">友情链接</a></strong>
            <{foreach from=$links item=links}>
            <a  href="<{$links.site_url}>" title="<{$links.site_name}>"><{$links.site_name}></a>
            <{/foreach}>
            <span class="more"><a href="<{$URL_HTML}>/catalog/links.htm">更多 &raquo;</a></span>
         </li>
         <{/if}>
            </ul>
        </div>
		
		
		
		
    </div>


    <div id="footer">

<!-- 底角备用  -->

	
	
<script type="text/javascript" src="<{$URL}>/public/home/js/config.js"></script>
<script type="text/javascript" src="<{$URL}>/public/home/js/main.js"></script>
<script type="text/javascript">
    try{
		if(window.SR){
			SR.SearchData = {
                <{foreach from=$search item=row2}>
                    engine_<{$row2.id}>: {
						action: "<{$row2.action}>",
						name: "<{$row2.name}>",
						btn: "<{$row2.btn}>",
						img: ["<{$row2.img_text}>","<{$row2.img_url}>"],
						url: "<{$row2.url}>",
						params: {
							<{$row2.params}>
						}
                    },
                <{/foreach}>
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
<div class="tongji"><{$tongji}></div>


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