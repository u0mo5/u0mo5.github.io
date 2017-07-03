<?php /* Smarty version 2.6.25, created on 2012-05-13 16:10:56
         compiled from feedback_show.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'feedback_show.tpl', 21, false),array('modifier', 'date_format', 'feedback_show.tpl', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <div class="box-header">
                    <h4>意见反馈</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120" >昵称：</th>
                            <td><?php echo $this->_tpl_vars['data']['username']; ?>
</td>
                        </tr>
                        <tr>
                            <th>E-Mail：</th>
                            <td><?php echo $this->_tpl_vars['data']['email']; ?>
</td>
                        </tr>
                        <tr>
                            <th style="vertical-align: top;">内容：</th>
                            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>时间：</th>
                            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format'])); ?>
</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><a href="<?php echo $this->_tpl_vars['referer']; ?>
">返回</a></td>
                        </tr>
                    </table>
                </div>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>