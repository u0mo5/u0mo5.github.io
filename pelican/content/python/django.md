Title: Windows上python开发--2安装django框架
Date: 1970-01-01 00:00:00
Modified: 1970-01-01 00:00:00
cat: windows
Tags: 
Slug: django
Authors: u0mo5 
Summary: 


##1.Windows上python开发--安装django框架



上一篇文章中讲了如何在windows上安装和开发python。这篇文章需要在上一篇的基数上进行。首先确保你的windows上python可以正常运行。
在安装django之前，我们应该先安装一个esay_install 的python工具，通过该工具可以很轻松安装各种扩展的框架和package。
不用你先到第三方网站下载tar.gz 包，然后用`python setup.py install`安装。

###1).下载安装easy—install 的tools。
  easy-install 的官方地址：
http://pypi.python.org/pypi/setuptools
 
Windows 7 (or graphical install)
 
For Windows 7 and earlier, download ez_setup.py using your favorite web browser or other technique and "run" that file.
官方文档说的很明白，下载es_setup.py 直接在cmd下，执行`python es_setup.py `即可。

安装完后，需要配置环境变量才能在cmd执行运行。
配置的方法和配置python方法一直，唯一区别是加入path的目录是 C:Python27Scripts
因为安装easy-install后可执行文件在python目录下的Scripts下。配置ok后在cmd下执行easy_install 如果出现下来字母，代表安装成功。
 





C:Usersxcy&gt;easy_install  
error: No urls, filenames, or requirements specified (see --help)  


在ubuntu下安装更简单，只需一个命令： `sudo apt-get install setuptools` 即可。
 
###2).用easy_install安装django 由于我们安装成功了easy_install 因此我们安装django就是很easy的事情啦。
在cmd下直接执行 	`easy_install django` 即可。

如果出现以上字母，基本上代码已经成功。也可以到C:Python27Scripts 目录下看看是否有django-admin.py 文件，如果有该文件，证明我们已经安装成功。由于我们上面配置C:\Python27\Scripts目录为可执行目录，因此就可以和easy_install 一样运行django-admin.py 脚本。
###3).创建简单django的工程：
进入cmd命令行模式，在命令行里输入  
 




```
django-admin.py startproject hello   
 cd hello   
 python manage.py runserver   
```



 
如果你的执行结果和我的相同，此时你可以再浏览器输入http://127.0.0.1:8000,就可以看到以下界面 证明django已经安装成功。
 

到此为止在windows上配置django的环境已经ok，下面我们就进入django的学习中啦


