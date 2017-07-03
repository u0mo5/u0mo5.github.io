Title: 百度BAE环境下WordPress安装教程
Date: 1970-01-01 00:00:00
Modified: 1970-01-01 00:00:00
cat: php
Tags: 
Slug: wordpress_bae
Authors: u0mo5 
Summary: 

 
 
不了解代码的童鞋慎重使用这种方法哦，安装过程中可能会出现一些简单的错误。
前两天有位网友在QQ上联系我，他告诉我自己在百度BAE上安装WordPress程序总是出错。我让他按照网络上的教程逐步安装，但是最后还是报错。为了给同样有此疑惑的网友提供帮助，所以我决定写一篇百度BAE环境下逐步安装WordPress程序的简易教程。 注意：涉及到修改文件的地方，千万不能使用记事本！ 安装网址：http://blogma.duapp.com 程序包：http://url.ehan.cn/wp4bae 1.登入“百度开发者中心”（http://developer.baidu.com/dev），点击右上角的“创建应用 ”，然后填写“应用名称”，确了个定；  2.在左边菜单栏选择“云环境（BAE）”，在打开的页面中填写“应用域名”和“应用名称”，“环境类型”选择“PHP”，确了个定；  3.创建成功后，左边菜单中选择“MySQL（云数据库）”，创建数据库。  4.数据库创建成功后，选择“设置”，将“默认字符集编码”由“gbk (gbk_chinese_ci) ”改为“utf8 (utf8_general_ci) ”。  5.回到“百度开发者中心developer.baidu.com/dev“，在左边菜单选择”云存储“，创建一个叫”blogma“的Bucket：  并将Bucket属性中的权限改为”公开读“：  6.左边菜单选择”消息服务“，创建队列，创建成功后记住队列名称（不是显示名称），后面需要填写。  7.下载我提供的“WordPress 3.5.1 on BAE”。注意，我提供的版本和网络上的不同，我将BCS云存储插件替换为我修改的版本，可以更好地支持同步功能；我还添加了一套漂亮的WP主题“Hello Metro”。 将页面切换回“版本管理”，创建新版本：  8.稍等一会儿，待程序发布后，选择“上线”：  9.选择“编辑”，在编辑器中打开“wp-config.php”，将第18行数据库名称替换为你的数据库名称（第四步“描述”下我遮挡的部分）；将第35行修改为BCMS队列名称。 10.转到MySQL管理面板phpMyAdmin。先导入这个SQL文件（http://url.ehan.cn/wpsql），并执行下列SQL语句：
UPDATE `wp_options` SET `option_value` =’http://应用名称.duapp.com’ WHERE `option_id` =1 OR `option_id` =37;（http两边是中文引号，需要替换掉！）
例如我的应用名称是”mawenjian“，就是
UPDATE `wp_options` SET `option_value` = ‘http://mawenjian.duapp.com’ WHERE `wp_options`.`option_id` =1 OR `wp_options`.`option_id` =37;
启用顶级域名的话，当然就是替换为顶级域名喽。 11.折腾了这么多，安装初步完成喽！记住，用户和密码都是admin。 12.进入后台，开启”百度云附件”插件，输入前面创建的Bucket和AK、SK。 13.在地址栏输入http://APP名称.duapp.com/wp-admin/options.php，进入。Ctrl+F找到”upload_path”和”upload_url_path“，分别改成”.”和”http://BUCKET名称.bcs.duapp.com”，保存设置 。（注：”upload_path”和”upload_url_path“分别代表“默认上传路径”和“文件的完整URL地址”）  OVER！貌似有点麻烦了…… DEMO：http://blogma.duapp.com/
