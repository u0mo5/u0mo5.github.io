#onkeyup事件

**1.onkeyup事件 只能输入数字**

　　
```javascript
<input onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')">
``` 

**2.onkeyup事件 改为大写字母**
　　
```javascript
 <input type="text" id="fname" onkeyup="upperCase(this.id)" />
``` 

　　
    