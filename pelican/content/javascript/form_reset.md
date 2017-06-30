Title: html 清空表单 及 重置select2
Date: 2017-05-18 16:46:44
Modified: 2017-05-18 16:46:44
cat: javascript
Tags: 
Slug: form_reset
Authors: u0mo5 
Summary: 


```
$(&quot;#customers_select&quot;).val(&#39;&#39;).trigger(&#39;change&#39;);function clears(element){     &nbsp; &nbsp;$(element)[0].reset();     &nbsp; &nbsp;$(&#39;select&#39;).val(&#39;&#39;).trigger(&#39;change&#39;);//select2 清空    };
```