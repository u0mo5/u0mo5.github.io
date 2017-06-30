Title: Mysql使用
Date: 2017-06-22 11:43:26
Modified: 2017-06-22 11:43:26
cat: mysql
Tags: 
Slug: mysql
Authors: u0mo5 
Summary: 




## Mysql使用

### 登录：mysql -uroot

### 数据库查询：show databases;

### 创建数据库：create database jsd1408 CHARACTER SET utf8; 设置编码集

### SET NAMES 'utf8';

### 切换数据库：use jsd1408;

### 数据库状态资料：status;

### show variables like "%char%";

### 数据表查询：show tables;

### 创建表：create table emp(id int primary key auto_increment,name varchar(50) unique,salary double,age int) DEFAULT CHARSET=utf8;

### 插入数据：insert emp(name,salary,age) values("xiang",3000.0,29);

### 查询数据：select * from emp;

### JDBC链接

### Class.forName("com.mysql.jdbc.Driver");

### conn= DriverManager.getConnection("jdbc:mysql://localhost:3306/jsd1408?useUnicode=true&characterEncoding=utf-8","root","");

## 插入中文到数据库有哪些问题

1.数据库要支持中文，即数据库要设置好正确的字符集：create database jsd1408 DEFAULT CHARACTER SET utf8; 2.JDBC驱动要能够正确进行编码和解码： 有一些JDBC驱动默认是unicode->iso-8859-1 ； 做查询时默认是iso-8859-1 ->unicode； 解决方式 一种方式： 更换驱动； 另一种方式：传递参数：jdbc:mysql://localhost:3306/jsd1408?useUnicode=true&characterEncoding=utf-8