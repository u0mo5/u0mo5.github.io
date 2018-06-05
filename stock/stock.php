<?php
  
 if(count($argv) >= 2){
 require("stock.class.php");
 $stockId = $argv[1];
 $stock = new StockClass($stockId);
 $temp = $stockId;
 $temp .= " {name}"; //名称
 $temp .= " {score}"; //评分
 $temp .= " {tips}"; //描述
 $temp .= " {qushishort}"; //短期趋势
 $temp .= " {qushimiddle}"; //中期趋势
 $temp .= " {qushilong}"; //长期趋势
 //$temp .= " {zidingyi}"; //自定义，直接在StockClass增加zidingyi方法即可
 $temp .= "\n";
 echo $stock -> getInfo($temp);
 }