<?php /* Smarty version 2.6.25, created on 2017-07-11 13:12:19
         compiled from welcome.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body id="main_page">

<div id="nav" style="display:none">
<dl>
    <dt>当前位置：</dt>
    <dd class="link"><a href="#">首页管理</a></dd>
    <dd>控制台</dd>
</dl>
</div>
<script type="text/javascript">
	var nav = document.getElementById("nav");
	var pnav = window.parent.document.getElementById("nav")
	pnav.innerHTML = nav.innerHTML;
</script>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con">
                <?php if ($this->_tpl_vars['data']['site_new']): ?>
                <div class="tips" style="margin-top:10px; border-top:1px solid #F93">
                                            目前有 <strong class="red"><?php echo $this->_tpl_vars['data']['site_new']; ?>
</strong> 个待处理的收录申请 <a href="<?php echo $this->_tpl_vars['data']['site_url']; ?>
">立即处理 &raquo;</a>
                </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['data']['safe_notice']): ?>

		  <div class="table">
                    <h2 class="th">114啦网址导航建站系统  更新消息</h2>       
                    <table><tr><td>
                        <p>
                            欢迎使用雨林木风114啦网址导航建站系统，当前版本号：V<?php echo $this->_tpl_vars['curver']; ?>
，最后更新时间：<?php echo $this->_tpl_vars['curtime']; ?>
。
                            <br />
                           <!-- <a href='http://www.ylmf.net/thread.php?fid=346' target='_blank'>114啦网址导航建站系统开源讨论专区&gt;&gt;</a>-->
                        </p>
                        <div class="table" id="version_notice" style="display:none;background-color:#fff">            
                            <p class="tips"></p>
                        </div>
                    </td></tr></table>
                </div>

                <div class="table">
                    <h2 class="th">安全提示</h2>       
                    <div class="tips">
                        <p>为了使用更安全，建议您将后台管理目录名称由默认的  <strong>admin</strong>　修改为其他目录名， <strong>修改步骤如下：</strong></p>
			 <p>1、修改ftp根目录下的 <strong>init.php</strong> 文件，将第 <strong>10</strong> 行，将该行最后一个引号里的 <strong>admin</strong>（小写字母） 修改为新的目录名。</p>
                        <p>2、修改ftp根目录下的 <strong>admin</strong> 目录名为新的目录名。</p>
                    </div>
                </div>
                <?php endif; ?>
                
              
                
                <div class="table">
                    <h2 class="th">服务器基本信息 <span class="head"><?php echo $this->_supers['server']['SERVER_NAME']; ?>
<?php echo $this->_tpl_vars['data']['serverip']; ?>
 &nbsp;<?php echo $this->_tpl_vars['data']['systime']; ?>
</span></h2>                
                    <table>
                        <tr>
                        <td colspan="2"> System:<?php echo $this->_tpl_vars['data']['sysinfo']; ?>
</td>
                        <td colspan="2">Web server:<span class="b"><?php echo $this->_supers['server']['SERVER_SOFTWARE']; ?>
</span></td>
                        <td colspan="2">PHP Version:<?php echo $this->_tpl_vars['data']['phpversion']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">Mysql  Version:<?php echo $this->_tpl_vars['data']['dbversion']; ?>
</td>
                        <td colspan="2"> display_errors:<?php echo $this->_tpl_vars['data']['dispalyerror']; ?>
</td>
                        <td colspan="2">Server API:<?php echo $this->_tpl_vars['data']['serverapi']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">PHP Safe: <?php echo $this->_tpl_vars['data']['phpsafe']; ?>
 </td>
                        <td colspan="2">Session Support:<?php echo $this->_tpl_vars['data']['sessionsp']; ?>
</td>
                        <td colspan="2">Cookie Support:<?php echo $this->_tpl_vars['data']['cookiesp']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">Zend Optimizer Support:<?php echo $this->_tpl_vars['data']['zendoptsp']; ?>
</td>
                        <td colspan="2">eAccelerator Support:<?php echo $this->_tpl_vars['data']['eaccsp']; ?>
</td>
                        <td colspan="2">Xcache Support:<?php echo $this->_tpl_vars['data']['xcachesp']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">register_globals:<?php echo $this->_tpl_vars['data']['registerglobal']; ?>
</td>
                        <td colspan="2">magic_quotes_gpc:<?php echo $this->_tpl_vars['data']['mqqsp']; ?>
</td>
                        <td colspan="2">magic_quotes_runtime:<?php echo $this->_tpl_vars['data']['mprsp']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">upload_max_filesize:<?php echo $this->_tpl_vars['data']['maxupsize']; ?>
</td>
                        <td colspan="2">post_max_size:<?php echo $this->_tpl_vars['data']['maxpostsize']; ?>
</td>
                        <td colspan="2">max_execution_time:<?php echo $this->_tpl_vars['data']['maxexectime']; ?>
</td>
                        </tr>
                        <tr>
                        <td width="12%">allow_url_fopen:<?php echo $this->_tpl_vars['data']['allowurlopen']; ?>
</td>
                        <td width="13%">Curl Support:<?php echo $this->_tpl_vars['data']['curlsp']; ?>
</td>
                        <td width="12%">Iconv Support:<?php echo $this->_tpl_vars['data']['iconvsp']; ?>
</td>
                        <td width="13%">Zlib Support:<?php echo $this->_tpl_vars['data']['zlibsp']; ?>
</td>
                        <td width="12%">GD Support:<?php echo $this->_tpl_vars['data']['gdsp']; ?>
</td>
                        <td width="13%">DBA Support:<?php echo $this->_tpl_vars['data']['dbasp']; ?>
</td>
                        </tr>
                    </table>
                </div>                
                <div class="table">
                    <h2 class="th">统计信息</h2>                
                    <table>
                    <tr>
                    <td> 当前站点数:<?php echo $this->_tpl_vars['data']['sitesum']; ?>
</td>
                    <td>数据库大小:<?php echo $this->_tpl_vars['data']['datasize']; ?>
</td>
                    </tr>
                    </table>
                </div>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
</div><!--/ wrap-->
<script type="text/javascript">
$(document).ready(function()
{
    $.get('?c=update&t', function(data)
    {
        if(data.length < 50)
        {
            return ;
        }
        var result = eval("(" + data + ")");
        var tpl = nstyle = '';
        if( result.upitems != null )
        {
            tpl += "<div style='width:98%'><form name='fup' action='?c=update&a=getlist' method='post'>";
			      tpl += "<input type='hidden' name='lasttime' value='"+ result.lasttime +"' />";
			      tpl += "<input type='hidden' name='upitems' value='"+ result.upitems +"' />";
			      tpl += "<div class='upinfotitle'><strong>当前可用的更新有：</strong></div>";
			      for(i=0; i<result.vers.length; i++)
			      {
				        nstyle = result.vers[i].issafe==1 ? "color:red;" : "";
				        tpl += "<div style='border-bottom:1px dashed #bbb;"+ nstyle +"' class='verline'>【" + (result.vers[i].issafe==1 ? "安全更新" : "普通更新") + "】";
				        tpl += result.vers[i].vtime + "，更新说明："+ result.vers[i].vmsg +"</div>";
			      }
			      tpl += "<div style='line-height:32px'><input type='submit' name='sb1' value=' 点击此获取所有更新文件，然后选择安装 ' class='coolbg' style='cursor:pointer' />\r\n";
			      tpl += " &nbsp; <input type='button' name='sb2' value=' 忽略这些更新 ' onclick=\"location='?c=update&a=skinupdate&lasttime="+result.lasttime+"'\" class='coolbg'  style='cursor:pointer' /></div>\r\n";
			      tpl += "</form></div>";
			      $('#version_notice .tips').html(tpl);
            $('#version_notice').slideDown('slow');
        }
   });
});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>