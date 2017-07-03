Title: header函数
Date: 2017-07-03 02:04:00
Modified: 2017-07-03 02:04:00
cat: php
Tags: 
Slug: header
Authors: u0mo5 
Summary: 

**1.定义header参数和接收：**  
```  
/**
*定义---
*ajax方式:
*/

$.ajax({  
                    type: "GET",  
                    url: "default.aspx",  
                    beforeSend: function(request) {  
                        request.setRequestHeader("Test", "Chenxizhang");  
                    },  
                    success: function(result) {  
                        alert(result);  
                    }  
                }) 
//curl方式:

$url = 'http://www.example.com';
$header = array('token:JxRaZezavm3HXM3d9pWnYiqqQC1SJbsU','language:zh','region:GZ');
$content = array(
        'name' => 'fdipzone'
);

$response = tocurl($url, $header, $content);
$data = json_decode($response, true);

echo 'POST data:';
echo '<pre>';
print_r($data['post']);
echo '</pre>';
echo 'Header data:';
echo '<pre>';
print_r($data['header']);
echo '</pre>';

/**
 * 发送数据
 * @param String $url     请求的地址
 * @param Array  $header  自定义的header数据
 * @param Array  $content POST的数据
 * @return String
 */
function tocurl($url, $header, $content){
    $ch = curl_init();
    if(substr($url,0,5)=='https'){
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);  // 从证书中检查SSL加密算法是否存在
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($content));
    $response = curl_exec($ch);
    if($error=curl_error($ch)){
        die($error);
    }
    curl_close($ch);
    return $response;
}
/*
*接收----
*接收  ajax
*$_SERVER['HTTP_TEST'];
*接收curl
*/
<?php
$post_data = $_POST;
$header = get_all_headers();

$ret = array();
$ret['post'] = $post_data;
$ret['header'] = $header;

header('content-type:application/json;charset=utf8');
echo json_encode($ret, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

/**
 * 获取自定义的header数据
 */
function get_all_headers(){

    // 忽略获取的header数据
    $ignore = array('host','accept','content-length','content-type');

    $headers = array();

    foreach($_SERVER as $key=>$value){
        if(substr($key, 0, 5)==='HTTP_'){
            $key = substr($key, 5);
            $key = str_replace('_', ' ', $key);
            $key = str_replace(' ', '-', $key);
            $key = strtolower($key);

            if(!in_array($key, $ignore)){
                $headers[$key] = $value;
            }
        }
    }

    return $headers;

}
?>
```  
  
