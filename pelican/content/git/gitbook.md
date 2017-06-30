Title: gitbook使用教程
Date: 2017-06-08 08:30:00
Modified: 2017-06-08 08:30:00
cat: javascript
Tags: 
Slug: gitbook
Authors: u0mo5 
Summary: 

**1.安装**  
    Local Installation  
    
    Requirements  
    
    Installing GitBook is easy and straightforward. Your system just needs to meet these two requirements:  
    
    NodeJS (v4.0.0 and above is recommended)  
    Windows, Linux, Unix, or Mac OS X  
    Install with NPM  
    
    The best way to install GitBook is via NPM. At the terminal prompt, simply run the following command to install GitBook:  
    
    $ npm install gitbook-cli -g  
    gitbook-cli is an utility to install and use multiple versions of GitBook on the same system. It will automatically install the required version of GitBook to build a book.  
    
    Create a book  
    
    GitBook can setup a boilerplate book:  
    
    $ gitbook init  
    If you wish to create the book into a new directory, you can do so by running gitbook init ./directory  
    
    Preview and serve your book using:  
    
    $ gitbook serve  
    Or build the static website using:  
    
    $ gitbook build  
    Install pre-releases  
    
    gitbook-cli makes it easy to download and install other versions of GitBook to test with your book:  
    
    $ gitbook fetch beta  
    Use gitbook ls-remote to list remote versions available for install.  
    
    Debugging  
    
    You can use the options --log=debug and --debug to get better error messages (with stack trace). For example:  
    
    $ gitbook build ./ --log=debug --debug   


**2.编写**

    在电脑上建立整本书的目录结构，以及文件结构。  
    我们可以自己一步步用文件管理器新建文件夹，新建文件，不过这么做太累了，gitbook可以帮我们自动生成。我们需要做的是提供一个叫做SUMMARY.md的文件给gitbook，然后调用
    gitbook init
    
    就能自动生成目录结构及每个章节的markdown文件。
    我们先为我们的新书写SUMMARY.md，内容如下：

        [简介](README.md)  
        * [第一章：如何造火箭](ch1/build.md)  
         - [1. 燃料学](ch1/fuel.md)  
         - [2. 空气动力学](ch1/air.md)  
         - [3. 总装工程学](ch1/enginer.md)  
         - [小结](ch1/WRAPUP.md)  
        * [第二章：如何回收火箭](ch2/recycle.md)  
         - [1. 自动控制原理](ch2/ac.md)  
         - [2. 二次利用要点](ch2/key.md)  
        * [结束](end/SUMMARY.md)    


    