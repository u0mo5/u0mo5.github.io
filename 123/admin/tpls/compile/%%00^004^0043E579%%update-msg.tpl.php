<?php /* Smarty version 2.6.25, created on 2012-03-05 21:25:18
         compiled from update-msg.tpl */ ?>
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
</dl>
</div>

<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con">
                
                <div class="table">
                    <h2 class="th">系统提示：</h2>       
                    <table>
                    <tr>
                    <td style='padding:10px'>
              
                    <?php echo $this->_tpl_vars['msg']; ?>

              
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