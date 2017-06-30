Title: 百度搜索框智能提示功能代码
Date: 1970-01-01 00:00:00
Modified: 1970-01-01 00:00:00
cat: default
Tags: 
Slug: baidusug
Authors: u0mo5 
Summary: 

百度搜索框智能提示功能代码
 

yulu.in,精彩生活，语录相伴！短网址程序，方便你我他，想象不到的好处！


现在很多的搜索引擎都提供了智能提示的功能，输入关键词的时候给出了很友好的提示，非常方便用户。
今天提供百度搜索框的智能提示代码。

百度搜索框的智能提示提供了三种的使用方法：


简单方式——提供简单的表单功能代码，使用案例如8668000网址导航的百度搜索效果；

添加方式——快速的为页面中已有的“百度搜索框”或其他文本输入框添加“百度搜索框提示”功能;


高级方式——提供“百度搜索框提示”API，打造您的个性化搜索框提示功能。使用案例见好资源网的首页效果。

每一种使用方法其实都是很简单的，添加方法见页面http://www.baidu.com/search/sug/sugcode.html
基本总结起来就是：添加或者修改表单，修改相关的属性；引入javascript文件&lt;script charset="gbk" src="http://www.baidu.com/js/opensug.js"&gt;&lt;/script&gt;。
比如添加方式：
第一步为需要添加“百度搜索框提示”功能的&lt;input&gt;标签添加baiduSug属性。例如：&lt;input type="text" name="word" baiduSug="1|2"&gt;当设置baiduSug=1时，用户选中sug词条时默认执行表单提交动作；当设置baiduSug=2时，用户选中sug词条时不执行表单提交动作。 
第二步在网页中引入Javascript文件：&lt;script charset="gbk" src="http://www.baidu.com/js/opensug.js"&gt;&lt;/script&gt;
这里需要特别强调的是：其中Javascript的文件位置是非常有讲究的！必须放置在&lt;/body&gt;标签的后面！


