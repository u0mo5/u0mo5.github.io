#Click

##1.click事件的累加绑定，绑定一次点击事件，执行多次  
　　最近做项目为一个添加按钮绑定点击事件，很简单的一个事情，于是我按照通常做法找到元素，使用jquery的on()方法为元素绑定了点击事件，点击同时发送请求。完成后看效果，第一次点击没有问题。再一次点击后发现发送了两次请求，后面再点击发现请求的数量越来越多。这时我初步判断可能是元素有多个或是多次调用了方法，但找了一遍，发现只为一个元素绑定了事件，且只调用了一次。后来通过查资料才知道是点击事件被累加绑定了！那到底什么是累加绑定呢？什么时候会发生累加绑定？累加绑定后该如何解决呢？下面我就通过这三个问题来说一下。

　　
```javascript
$("#adsCollection_tb .contentDel").on("click",function(){
　　$(this).each(function(){
　　　var obj_address_name = $(this).parent().parent().find(".obj_address_name").html();
      var jsonDel = {
          "head": {
          　　"module": "object",
         　　 "function": "del_obj"
           },
           "body":[
                  {
          　　 "name": obj_address_name
                   }
                   ]
            }
        alert("确定要删除这一条吗？")
        addrGroup.Ajax(jsonDel);
                        
　　 });
});
``` 

　　在页面中为一个元素绑定事件，事件执行后页面未刷新且元素还在，然后你再次点击，元素又被绑定个一次点击事件，这样第二次点击就会执行两次，以此类推。

　　如何解决累加绑定：第一种方法是元素点击后删除，然后再动态创建一个元素，再添加点击事件。显然这个方式很麻烦。

　　第二中方法是使用jquery的one()方法，为元素绑定一个一次性的事件处理函数，这个事件处理函数只会被执行一次。

　　
```javascript
 $("#adsCollection_tb").one("click",function(){
    alert("执行"); 
 })
``` 

　　第三种方法是在每次绑定点击事件前先解除之前的事件绑定，再为元素绑定事件，类似于先清空，在做操作一样。但你使用bind()方法绑定时，可以用unbind()方法解除绑定。通常我们跟愿意用on()方法绑定事件，因为bind()方法已经不被推荐，那么那么就用off()方法解除事件绑定。


```javascript
 $("#adsCollection_tb").unbind("click").bind("click",function(){  
     alert("执行");   
  });  
  $("#adsCollection_tb").off("click").on("click",function(){  
     alert("执行");   
 })；  
```　　
    