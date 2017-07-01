Title: onkeyup事件 只能输入数字
Date: 2017-06-29 08:30:00
Modified: 2017-06-29 08:30:00
cat: javascript
Tags: 
Slug: onkeyup
Authors: u0mo5 
Summary: 

**1.onkeyup事件 只能输入数字**

　　
```javascript
<input onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')">
``` 

**2.onkeyup事件 改为大写字母**
　　
```javascript
 <input type="text" id="fname" onkeyup="upperCase(this.id)" />
``` 

　　
    