Title: LWL-Hitokoto API（一言-纯净API）
Date: 1970-01-01 00:00:00
Modified: 1970-01-01 00:00:00
cat: api
Tags: 
Slug: hitokoto
Authors: u0mo5 
Summary: 

著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。作者：liwanglin12链接：https://blog.lwl12.com/read/hitokoto-api.html来源：LWL的自由天空LWL-Hitokoto API（一言-纯净API）
2015-02-14 • 程序 • 131条评论 •29,588 次围观
本API作用：去除原API的各种链接、各种#@%……￥&amp;%#￥总之。。简洁得只剩下字了！
食用使用方法：
数据获取

请求地址:https://api.lwl12.com/hitokoto/main/get
请求方式:GET
请求参数:
charset:字符集，支持gbk/utf-8，默认为utf-8
encode数据格式，对应如下
js返回函数名为lwlhitokoto的JavaScript脚本，用于同步调用
arl:刷新时间，单位ms
实例
请求https://api.lwl12.com/hitokoto/main/get
返回 呐，知道么，樱花飘落的速度，是每秒五厘米哦~

调用举例 – JavaScript + HTML
脚本地址https://api.lwl12.com/hitokoto/main/get?encode=js

使用方法
将下面这段代码放入页面内需要展示一句话的位置即可

JavaScript
 


该脚本实质为document.write的脚本。

演示一下：
这世上再精妙的算计，也是算人不算己，身在世俗便难逃悲欢离合，惟愿能遇见那么一个人，一生只被他一人算计，甘之如饴。
刷新试试？会变哦~

另外再送一份情人节礼物吧~唔。。（简直满满的恶意啊）
