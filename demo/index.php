<?php 

print_r( $_REQUEST);
log_out($_REQUEST);
print_r( $_SERVER);
log_out($_SERVER);
print_r( $http_response_header);
log_out($http_response_header);
 function log_out($var='',$title="",$line="",$file="api") {
//        $this->status="Off";

        if (is_array($var)) {
            $var=json_encode($var, JSON_UNESCAPED_UNICODE);
        } else if (is_object($var)) {
            $var=json_encode($var, JSON_UNESCAPED_UNICODE);
        } else if (is_resource($var)) {
            $var=(string)$var;
        } else {
            $var=json_encode($var, JSON_UNESCAPED_UNICODE);
        }

        $fp = fopen("{$file}_debug.log","a");
        flock($fp, LOCK_EX) ;
        fwrite($fp,"\n"."执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$title."（行号： ".$line."）"."\n".$var."\n");
        flock($fp, LOCK_UN);
        fclose($fp);
    }