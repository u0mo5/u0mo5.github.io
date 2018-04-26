#[官网](http://select2.github.io/).  


##1.重置select2  
```
    function clears(element){
        $(element)[0].reset();
        $("input").val('');
        $('select').val('').trigger('change');//select2 清空
    };
```	



