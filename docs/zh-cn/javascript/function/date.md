Title: Date Date.parse的兼容性问题
Date: 2017-06-21 08:30:00
Modified: 2017-06-21 08:30:00
cat: javascript
Tags: 
Slug: date
Authors: u0mo5 
Summary: 

**Date.parse的兼容性问题**

今天写代码发现  



    
    
        viewValue = "2014-04-04 23:33:34"    
     
        f = new Date(viewValue).getTime();  
        
     　　


在谷歌上可以正确解析,而在ie与edge上缺解析不了,经查询是兼容性问题,只要把"-"替换为"/"就可以解决,如下:   



    
    
        f = new Date(Date.parse(viewValue.replace(/-/g,"/"))).getTime(); 
        
    
    