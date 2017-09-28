implode把数组转成字符串的函数，在组合SQL语句时候使用特好使！

比如 
```
$a = array('a','b','c'); $b = implode(',', $a); echo $b; 
```
返回的字符串就是 a,b,c

explode把字符串组成的数组 
```
$pizza = "piece1 piece2 piece3 piece4 piece5 piece6"; $pieces = explode(" ", $pizza);
```