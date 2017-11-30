# Welcome to php-resque

For full documentation visit [github：chrisboulton/php-resque](https://github.com/chrisboulton/php-resque).  

用monolog代替Resque_log
修改job  得重启worker  否则解析不了新job
ps -ef|grep resque



php demo/queue.php Mail_Job

php demo/check_status.php b607c7729aa566b26441f05dc8052200

QUEUE=default php demo/resque.php



ab执行语句：1000此请求100个并发
ab -n 1000 -c 100 "http://localhost/php-resque/demo/httpqueue.php?qname=default&jname=PHP_Job"

启动个worker:
QUEUE=* nohup php demo/resque.php > output 2>&1 & 

启动多进程方式的worker
QUEUE=* COUNT=5 nohup php demo/resque.php > output 2>&1 &


