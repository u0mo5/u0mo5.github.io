Title: 百度云bae安装discuz论坛教程
Date: 1970-01-01 00:00:00
Modified: 1970-01-01 00:00:00
cat: default
Tags: 
Slug: discuz_bae
Authors: u0mo5 
Summary: 


作者：孤风一剑   发布：2013-05-11 13:37   栏目：站长在线   点击：6,846次   41条评论




各位草根们有福啦，弄了几天，终于可以在bae上搭建discuz论坛了，下面我就简洁精准的介绍哦，安装步骤（请严格按照安装步骤，不然不能保证正常运行)

 

在有了PHP应用后开始：

1.创建百度云存储Bucket，最少为30m，并修改Bucket的属性为公开读.

2. 将压缩包解压，并将upload/bcs/config.php文件中BAIDU_BCS_BUCKET修改为第1步创建的百度云存储Bucket名。

3. 将upload目录上传到百度BAE.

4 .查看百度mysql的数据库名，并点击设置，将数据库默认字符集编码修改为utf8 (utf8_general_ci)。

5. 启用百度cache(缓存), 最少30m. 如果之前已经启用百度cache并且安装过discuz,请停用后再次启用。

6. 打开http://xxx.duapp.com/install/index.php来开始安装，过程中需要提供第4步百度mysql数据库的名称

7. 删除install目录

8.进入到后台管理，点击全局--〉上传设置，填写"本地附件 URL 地址"为http://bcs.duapp.com/xxx/data/attachment。xxx为第一步创建的bucket名称。

 



 

该版本解决问题:

1.解决云平台不能使用的问题

2.解决QQ互联不能使用的问题

3.支持BAE伪静态。
程序下载地址：​Discuz_X2.5_SC_UTF8 for BAE1.4.rar
或者 http://pan.baidu.com/share/link?shareid=460906&amp;uk=3375362207

 



 

下面分享伪静态：

主题列表页伪静态规则

1:论坛后台

2：全局-SEO设置-URL静态化

3：论坛主题列表页、论坛主题内容页将“可用”勾上（Rewrite兼容性选择否，其他东西全部默认）

4：BAE后台

5：版本管理-高级-配置

6：添加

7：规则类型：url

8：规则：/forum-(w+)-([0-9]+).html

9：执行：/forum.php?mod=forumdisplay&amp;fid=$1&amp;page=$2&amp;%1

10：保存

主题内容页伪静态规则：

1:论坛后台

2：全局-SEO设置-URL静态化

3：论坛主题列表页、论坛主题内容页将“可用”勾上（Rewrite兼容性选择否，其他东西全部默认）

4：BAE后台

5：版本管理-高级-配置

6：添加

7：规则类型：url

8：规则：/thread-([0-9]+)-([0-9]+)-([0-9]+).html

9：执行：/forum.php?mod=viewthread&amp;tid=$1&amp;extra=page%3D$3&amp;page=$2&amp;%1

10：保存


