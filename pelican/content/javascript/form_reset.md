Title: html 清空表单 及 重置select2
Date: 2017-05-18 16:46:44
Modified: 2017-05-18 16:46:44
cat: javascript
Tags: 
Slug: form_reset
Authors: u0mo5 
Summary: 


```
    function clears(element){
        $(element)[0].reset();
        $("input").val('');
        $('select').val('').trigger('change');//select2 清空
    };
```