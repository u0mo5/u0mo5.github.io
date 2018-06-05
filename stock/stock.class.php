<?php
 class StockClass{
 public $stockId;
  
 public function __construct($stockId){
  $this -> stockId = $stockId;
 }
  
 private function getUrl(){
  return "http://stockpage.10jqka.com.cn/" . $this -> stockId . "/";
 }
  
 private function getPage(){
  return file_get_contents($this -> getUrl());
 }
  
 //核心，通过正则匹配出 标签名，并将对应的方法的结果替换掉标签占位符
 public function getInfo($template){
  $html = $this -> getPage();
  if( preg_match_all("/\{([^\}]*)\}/", $template, $result) ){
  foreach($result[1] as $index => $fun){
   $template = str_replace($result[0][$index], $this -> $fun($html), $template);
  }
  }
  return mb_convert_encoding($template, "GBK", "UTF-8"); //Windows的命令提示符编码是GBK
 }
  
 private function match($pattern, $html, $itemIndex = 1){
  $pattern = '/' . str_replace('/', '\/', $pattern) . '/';
  if( preg_match($pattern, $html, $result) ){
  return $result[$itemIndex];
  }else{
  return "-";
  }
 }
  
 //趋势的规则都一样，合并
 private function qushiPattern($name){
  return '<div class="txt-aside">' . $name . '：</div>\s*<div class="txt-main">([^<]*)</div>';
 }
  
 //支持的标签
 private function name($html){
  return $this -> match("<title>([^\(<]*)\(", $html, 1);
 }
 private function score($html){
  return $this -> match('<span class="analyze-num">(\d+(\.\d+)?)</span>', $html);
 }
 private function tips($html){
  return $this -> match('<span class="analyze-tips">([^<]*)</span>', $html);
 }
 private function qushishort($html){
  return $this -> match($this -> qushiPattern("短期趋势"), $html);
 }
 private function qushimiddle($html){
  return $this -> match($this -> qushiPattern("中期趋势"), $html);
 }
 private function qushilong($html){
  return $this -> match($this -> qushiPattern("长期趋势"), $html);
 }
 }




