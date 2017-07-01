<?php /* Smarty version 2.6.25, created on 2012-03-10 20:30:52
         compiled from config_all.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'config_all.tpl', 56, false),array('modifier', 'default', 'config_all.tpl', 84, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
            <div class="con box-green">
                <form method="post" action="?c=config&a=index">
                <div class="box-header">
                    <h4>基本设置 </h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">系统标题：</th>
                            <td><input type="text" class="textinput w360" name="config[sysname]" value="<?php echo $this->_tpl_vars['config']['yl_sysname']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>系统地址：</th>
                            <td><input type="text" class="textinput w360" name="config[sysurl]" value="<?php echo $this->_tpl_vars['config']['yl_sysurl']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>联系我们URL：</th>
                            <td><input type="text" class="textinput w360" name="config[ceoconnect]" value="<?php echo $this->_tpl_vars['config']['yl_ceoconnect']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>管理员邮箱：</th>
                            <td><input type="text" class="textinput w360" name="config[ceoemail]" value="<?php echo $this->_tpl_vars['config']['yl_ceoemail']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>ICP备案信息：</th>
                            <td><input type="text" class="textinput w360" name="config[icp]" value="<?php echo $this->_tpl_vars['config']['yl_icp']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>ICP备案链接地址：</th>
                            <td><input type="text" class="textinput w360" name="config[icpurl]" value="<?php echo $this->_tpl_vars['config']['yl_icpurl']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>keywords：</th>
                            <td><input type="text" class="textinput w360" name="config[metakeyword]" value="<?php echo $this->_tpl_vars['config']['yl_metakeyword']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">description：</th>
                            <td><textarea class="w360" name="config[metadescrip]"><?php echo $this->_tpl_vars['config']['yl_metadescrip']; ?>
</textarea></td>
                        </tr>
                        <!--  -->
                    </table>
                </div>
                <div class="box-header">
                    <h4>Debug 模式运行系统 <span class="green font-n">(不屏蔽程序报错信息,系统出现异常时打开此模式,将错误信息提交给程序开发员,以便尽快得到解决)</span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                              <label>
                                <?php echo smarty_function_html_radios(array('name' => "config[debug]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_debug'],'separator' => "<br />"), $this);?>

                              </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="box-header">
                    <h4>是否开启验证码<span class="green font-n">开启验证码，可以提供系统安全性。 <font color="red">注：此功能需要GD库支持。</font></span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[verify_code]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_verify_code'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>是否开启版本升级提示: <span class="green font-n">(当官方有新版本发布时，显示升级提示)</span></h4>
  
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                              <label>
                                <?php echo smarty_function_html_radios(array('name' => "config[display_update_info]",'options' => $this->_tpl_vars['option_toggle'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['config']['yl_display_update_info'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => "<br />"), $this);?>

                              </label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>电子邮件发送 </h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[sendemail]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_sendemail'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>电子邮件发送方式</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[sendemailtype]",'options' => $this->_tpl_vars['option_sendmailtype'],'checked' => $this->_tpl_vars['config']['yl_sendemailtype'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                   </table>
                </div>
                <div class="box-header">
                    <h4>收信邮箱地址</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120"> </th>
                            <td>
                                <input class="textinput w270" name="config[fromemail]" value="<?php echo $this->_tpl_vars['config']['yl_fromemail']; ?>
" /><br />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>smtp服务器地址</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120"> </th>
                            <td>
                                <input type="text"  class="textinput w270"  name="config[smtpserver]" value="<?php echo $this->_tpl_vars['config']['yl_smtpserver']; ?>
" /><br />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>是否允许代理访问</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[proxy]",'options' => $this->_tpl_vars['option_proxy'],'checked' => $this->_tpl_vars['config']['yl_proxy'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>系统负载控制参数 <span class="green font-n">(建议值：3，当服务器的负载参数大于这个值时，自动开启CC防护模式。仅对linux,unix,FREEBSD系统有效)</span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120"> </th>
                            <td><input name='config[loadavg]' value='<?php echo $this->_tpl_vars['config']['yl_loadavg']; ?>
' /></td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>CC攻击防护</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
<?php echo smarty_function_html_radios(array('name' => "config[cc]",'options' => $this->_tpl_vars['option_cc'],'checked' => $this->_tpl_vars['config']['yl_cc'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>以下为被禁止的IP</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td><textarea class="w360" name="ip_deny_list"><?php echo $this->_tpl_vars['ip_deny_list']; ?>
</textarea></td>
                        </tr>
                    </table>
                </div>

                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="保存更改" />
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