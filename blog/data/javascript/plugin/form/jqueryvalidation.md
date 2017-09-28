#[官网](https://jqueryvalidation.org/).  
#[菜鸟教程](http://www.runoob.com/jquery/jquery-plugin-validate.html).  


**1.JQuery validate 不默认提交sumbit方式**

```javascript
 <a type="btn" onclick = "query_submit()" class="btn btn-success">确定</a>
<script>
    function check(){
        /*关键在这儿，返回的是一个validate对象，这个对象有一个form方法，返回的是是否通过验证*/
        return    $("#form_main").validate({
            //debug:true,
            rules: {
                stat_value:{
                    nonnegativeinteger:true,
                    number:true
                }
            },
            errorClass: "error",
            success: 'valid',
            unhighlight: function (element, errorClass, validClass) { //验证通过
                $(element).tooltip('destroy').removeClass(errorClass);
            },
            errorPlacement: function (label, element) {
                $(element).tooltip('destroy'); /*必需*/
                $(element).attr('title', $(label).text()).tooltip('show');
            }
        });
    }
    function clears(element){
        $(element)[0].reset();
        $('select').val('').trigger('change');//select2 清空
    };


    function query_submit() {
        if(!check().form()) return;
        form_main.action="/Manage_adstat/Adposition";
        form_main.submit();
    }


    function excel_submit() {
        if(!check().form()) return;
        form_main.action="/Manage_adstat/Adposition/?act=excel";
        form_main.submit();
    }
</script>
```



**2.jQuery validate验证隐藏表单(hidden)域**

validate 插件默认不会校验隐藏的 input（包括 type="hidden" 的或 display:"none" 的 input），我猜想插件作者这么做的原因可能是为了提升性能。但是有时还是需要对一个隐藏的 input 进行操作。  

方法一：(来源于网上，未进行测试)  
    把这项限制去除：打开 jQuery.validate.min.js，把ignore:":hidden"改为ignore:""  
方法二：  
    将input的width设置为0，高度设置为0.5px（值不能太小，大于0小于0.3px时，validate 插件没有进行验证），这样input在页面上就看不见了，实现了隐藏的效果，而且validate 插件也会进行验证。  
```
<input style="height:0.5px;width:0px;padding:0px;margin:0px;" data-val="true" data-val-required="请选择生日。" id="Dob" name="Dob" value="" />
```
jquery validate很不错的一个jQuery表单验证插件。升级到了1.9版的后，发现隐藏表单域验证全部失效，特别是在jquery.ui.tabs.min.js构造的Tabs里的验证！网上一搜，也没查到是怎么回事。最后在1.9的changelog里发现了这么一句
changelog里
```
* Fixed #189 - :hidden elements are now ignored by default
ignore: ":hidden",
ignore: ""       
```
  就又开始验证隐藏域了



