<?php /* Smarty version 2.6.25, created on 2012-03-05 21:24:46
         compiled from update-list.tpl */ ?>
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
                    <h2 class="th">以下是需要下载的更新文件（路径相对于根目录）：</h2>
                    <table>
                    <tr>
                    <td style='padding:10px'>
              <?php if ($this->_tpl_vars['hasupfile']): ?>
                    <form name='fup' action='?c=update&a=makecache' method='post' accept-charset="utf-8">
                       <input type='hidden' name='lasttime' value='<?php echo $this->_tpl_vars['lasttime']; ?>
' />
                       <input type='hidden' name='upitems' value='<?php echo $this->_tpl_vars['upitems']; ?>
' />
		                   <?php $_from = $this->_tpl_vars['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
			                    <div style="border-bottom:1px dashed #ccc"><input type='checkbox' name='files[]' value='<?php echo $this->_tpl_vars['k']; ?>
'  checked='checked' /> <?php echo $this->_tpl_vars['k']; ?>
(<?php echo $this->_tpl_vars['v']; ?>
)</div>
                       <?php endforeach; endif; unset($_from); ?>
                       <div class='verline'>
                        文件临时存放目录：admin/data/<input type='text' name='tmpdir' style='width:200px' value='<?php echo $this->_tpl_vars['tmpdir']; ?>
' />
                        <br />
                        <input type='checkbox' name='skipnodir' value='1'  checked='checked' /> 跳过系统中没有的文件夹(可能是模块)
                       </div>
                       <div style='line-height:36px;background:#F8FEDA'>&nbsp;
                            <input type='submit' name='sb1' value=' 下载并应用这些补丁 ' class='np coolbg' style='cursor:pointer' />
                       </div>
                    </form>
               <?php else: ?>
               可能网络存在问题，无法获得可用的升级文件！请检查网络，刷新后重试。
               <?php endif; ?>
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