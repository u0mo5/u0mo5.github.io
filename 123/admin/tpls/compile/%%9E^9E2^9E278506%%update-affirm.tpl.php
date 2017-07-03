<?php /* Smarty version 2.6.25, created on 2012-03-05 21:25:02
         compiled from update-affirm.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body id="main_page">

<div id="nav" style="display:none">
<dl>
    <dt>当前位置：</dt>
    <dd class="link"><a href="#">在线升级</a></dd>
    <dd>升级文件选择</dd>
</dl>
</div>

<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con">
                
                <div class="table">
                    <h2 class="th">本次升级需要写入权限的目录及状态：</h2>       
                    <table>
                    <tr>
                    <td style='padding:10px'>
              
              <?php $_from = $this->_tpl_vars['dirinfos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                <div style='border-bottom:1px dashed #ccc'><?php echo $this->_tpl_vars['v']['name']; ?>
 状态：(<?php if ($this->_tpl_vars['v']['writeable']): ?> [√正常] <?php else: ?> <font color='red'>[×不可写]</font> <?php endif; ?>)</div>
              <?php endforeach; endif; unset($_from); ?>
              
              <div style='line-height:36px;background:#F8FEDA'>&nbsp;
                   <input type='button' name='sb1' value=' 我已经确认这些目录没问题，开始下载补丁进行升级 '
                    onclick="location='?c=update&a=start';" class='coolbg' style='cursor:pointer' />
              </div>
              
                    </td>
                    </tr>
                    </table>
                </div>
                
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
</div><!--/ wrap-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>