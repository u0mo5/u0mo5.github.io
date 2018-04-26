#centos7安装python3

##1.使用rpm包安装
```linux
yum -y install https://centos7.iuscommunity.org/ius-release.rpm 
 
yum makecache 
 
yum install python36u 
 
yum -y install python36u-pip 
 
yum -y install python36u-devel 
```