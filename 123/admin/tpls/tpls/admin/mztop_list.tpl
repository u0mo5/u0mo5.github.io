<{include file="header.tpl"}>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="?c=mztop&a=list_edit" method="post">
                    <input type="hidden" name="referer" value="<{$referer}>"/>
                  <div class="table">
                  	<div class="th">
                    	<div class="form fl">
                        <input type="button" value="添加首行名站" onclick="window.location='?c=mztop&a=edit&action=add'"/>&nbsp;
                        </div>
                    </div>
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    	<th width="41" class="text-center">删除</th>    
                        <th width="70">显示</th>            	
                        <th width="70">排序</th>            	
                        <th width="120">名称</th>
                        <th width="300">HTML代码</th>
                        <th>修改</th>
                    </tr>
                    <{foreach from=$list item=i key=k}>
                    <tr>
                        <td class="text-center"><input rel="del" type="checkbox" name="delete[<{$k}>]"  /></td>
                        <td class="text-center">
                            <input rel="dis" type="checkbox" name="show[<{$k}>]" <{if $i.show eq 1}>checked="checked"<{/if}>/>
                        </td>
                        <td><input type="text" name="order[<{$k}>]" class="textinput" tabindex="11" value="<{$i.order}>" /></td>                 
                        <td><a href="?c=mztop&a=edit&action=modify&id=<{$k}>"><{$i.name}></a></td>
                        <td><div style="width:300px;" class="hideText" title="<{$i.html|truncate:100|escape:"html"}>"><{$i.html|truncate:100|escape:"html"}></div></td>
                        <td><a href="?c=mztop&a=edit&action=modify&id=<{$k}>">修改</a></td>
                    </tr>
                    <{/foreach}>
                    </table>

                    <div class="th">
                    	<div class="form">
                        <input value="提交修改" type="submit"/>&nbsp;
                        </div>
                    </div>
                </div>
				</form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
    <script type="text/javascript">
    	$(document).ready(function(){

			$("#js_data_source").find("input[rel='del']").each(function(i){
				$(this).bind("click",function(){
					var tr = $(this).parent().parent();
					var input = tr.find("input[rel='dis']");
					if(this.checked){
						$(input).attr("checked","");
						$(input).attr("disabled","disabled");
					}
					else{
						$(input).attr("disabled","");
					}
				});								
			});
			$("#js_data_source").find("input[rel='dis']").change(function(){
                if ($(this).next('input[type="hidden"]').val() == 1) $(this).next('input[type="hidden"]').val(0);
                else $(this).next('input[type="hidden"]').val(1);
			});

								   
		});
    </script>
<{include file="footer.tpl"}>
