
(是为了更好的安装php，mysql等yum源用的)
安装EPEL源:
```
(64位系统) rpm -ivh http://mirrors.ustc.edu.cn/fedora/epel/6/x86_64/epel-release-6-8.noarch.rpm
(32位系统) rpm -ivh http://download.Fedora.RedHat.com/pub/epel/6/i386/epel-release-6-8.noarch.rpm
```
安装REMI源:
```
rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
```
```
开启REMI,编辑 /etc/yum.repos.d/remi.repo
vi /etc/yum.repos.d/remi.repo
修改 enable=1
esc
:wq
yum -y install httpd php55.x86_64 php55-php.x86_64 php55-php-cli.x86_64 php55-php-common.x86_64 php55-php-devel.x86_64 php55-php-gd.x86_64 php55-php-mbstring.x86_64 php55-php-mcrypt.x86_64 php55-php-mysqlnd.x86_64 php55-php-opcache.x86_64 php55-php-pdo.x86_64 php55-php-pear.noarch php55-php-pecl-igbinary.x86_64 php55-php-pecl-jsonc.x86_64 php55-php-pecl-jsonc-devel.x86_64 php55-php-pecl-lua.x86_64 php55-php-pecl-memcached.x86_64 php55-php-pecl-msgpack.x86_64 php55-php-pecl-mysqlnd-qc.x86_64 php55-php-pecl-yac.x86_64 php55-php-pecl-yaf.x86_64 php55-php-pecl-zip.x86_64 php55-php-process.x86_64 php55-php-snmp.x86_64 php55-php-soap.x86_64 php55-php-xml.x86_64 php55-php-xmlrpc.x86_64 php55-runtime.x86_64 php55-build.x86_64 php55-mysqlnd-qc-panel.noarch php55-php-bcmath.x86_64 php55-php-channel-horde.noarch php55-php-dba.x86_64 php55-php-enchant.x86_64 php55-php-fpm.x86_64 php55-php-gmp.x86_64 php55-php-horde-horde-lz4.x86_64 php55-php-imap.x86_64 php55-php-interbase.x86_64 php55-php-intl.x86_64 php55-php-ioncube-loader.x86_64 php55-php-ldap.x86_64 php55-php-libvirt.x86_64 php55-php-libvirt-doc.noarch php55-php-litespeed.x86_64 php55-php-magickwand.x86_64 php55-php-mssql.x86_64 php55-php-odbc.x86_64 php55-php-pecl-amqp.x86_64 php55-php-pecl-apcu.x86_64 php55-php-pecl-apcu-devel.x86_64 php55-php-pecl-ares.x86_64 php55-php-pecl-bbcode.x86_64 php55-php-pecl-binpack.x86_64 php55-php-pecl-bitset.x86_64 php55-php-pecl-blenc.x86_64 php55-php-pecl-cairo.x86_64 php55-php-pecl-cairo-devel.x86_64 php55-php-pecl-chdb.x86_64 php55-php-pecl-couchbase.x86_64 php55-php-pecl-crypto.x86_64 php55-php-pecl-dbus.x86_64 php55-php-pecl-dio.x86_64 php55-php-pecl-doublemetaphone.x86_64 php55-php-pecl-eio.x86_64 php55-php-pecl-ev.x86_64 php55-php-pecl-event.x86_64 php55-php-pecl-fann.x86_64 php55-php-pecl-gearman.x86_64 php55-php-pecl-geoip.x86_64 php55-php-pecl-gnupg.x86_64 php55-php-pecl-graphdat.x86_64 php55-php-pecl-haru.x86_64 php55-php-pecl-hidef.x86_64 php55-php-pecl-hrtime.x86_64 php55-php-pecl-igbinary-devel.x86_64 php55-php-pecl-imagick-devel.x86_64 php55-php-pecl-inclued.x86_64 php55-php-pecl-inotify.x86_64 php55-php-pecl-ircclient.x86_64 php55-php-pecl-jsond.x86_64 php55-php-pecl-jsond-devel.x86_64 php55-php-pecl-judy.x86_64 php55-php-pecl-judy-devel.x86_64 php55-php-pecl-krb5.x86_64 php55-php-pecl-krb5-devel.x86_64 php55-php-pecl-leveldb.x86_64 php55-php-pecl-libsodium.x86_64 php55-php-pecl-lzf.x86_64 php55-php-pecl-mailparse.x86_64 php55-php-pecl-memcache.x86_64 php55-php-pecl-memprof.x86_64 php55-php-pecl-mongo.x86_64 php55-php-pecl-msgpack-devel.x86_64 php55-php-pecl-mysqlnd-ms.x86_64 php55-php-pecl-mysqlnd-ms-devel.x86_64 php55-php-pecl-mysqlnd-qc-devel.x86_64 php55-php-pecl-ncurses.x86_64 php55-php-pecl-newt.x86_64 php55-php-pecl-oauth.x86_64 php55-php-pecl-oci8.x86_64 php55-php-pecl-parsekit.x86_64 php55-php-pecl-pcsc.x86_64 php55-php-pecl-pcsc-devel.x86_64 php55-php-pecl-pdflib.x86_64 php55-php-pecl-propro.x86_64 php55-php-pecl-propro-devel.x86_64 php55-php-pecl-protocolbuffers.x86_64 php55-php-pecl-quickhash.x86_64 php55-php-pecl-radius.x86_64 php55-php-pecl-raphf.x86_64 php55-php-pecl-raphf-devel.x86_64 php55-php-pecl-rar.x86_64 php55-php-pecl-redis.x86_64 php55-php-pecl-riak.x86_64 php55-php-pecl-rrd.x86_64 php55-php-pecl-runkit.x86_64 php55-php-pecl-scream.x86_64 php55-php-pecl-scrypt.x86_64 php55-php-pecl-sdl.x86_64 php55-php-pecl-selinux.x86_64 php55-php-pecl-solr.x86_64 php55-php-pecl-sphinx.x86_64 php55-php-pecl-spl-types.x86_64 php55-php-pecl-ssdeep.x86_64 php55-php-pecl-ssh2.x86_64 php55-php-pecl-stats.x86_64 php55-php-pecl-stomp.x86_64 php55-php-pecl-strict.x86_64 php55-php-pecl-swoole.x86_64 php55-php-pecl-sync.x86_64 php55-php-pecl-termbox.x86_64 php55-php-pecl-uopz.x86_64 php55-php-pecl-uploadprogress.x86_64 php55-php-pecl-uri-template.x86_64 php55-php-pecl-uuid.x86_64 php55-php-pecl-weakref.x86_64 php55-php-pecl-xattr.x86_64 php55-php-pecl-xdebug.x86_64 php55-php-pgsql.x86_64 mysql-bench.x86_64 mysql-devel.x86_64 mysql-libs.x86_64 mysql-server.x86_64 

chmod -R 777 /var/www/ (同组可修改权限,方便配置ftp,ftp应该加入到nginx组,如果需要更高的安全设置,则不应当将只读的目录赋予nginx,php组可写权限)
service httpd start(start|stop|restart|reload)
service mysqld start(start|stop|restart|reload)
设置自启动
chkconfig  httpd on
chkconfig mysqld on
```
安装svn

```
yum -y install subversion

cd home
mkdir svn
cd svn
svnadmin create xzcc
```

//修改authz文件
```
[groups]
# harry_and_sally = harry,sally
# harry_sally_and_joe = harry,sally,&joe
admin=gaolin,fandadong,gechuan,zhurui
# [/foo/bar]
# harry = rw
# &joe = r
# * =
[/]
@admin=rw
//修改pass
fandadong = 123456
gaolin = 123456
gechuan = 123456
zhurui = 123456

ps -ef|grep svnserve
kill -9 id 
svnserve -d -r /home/svn(仓库地址)


httpd.conf 文件
1url重定向
AllowOverride 设置为ALL

```
2 ServerName localhost:80
mysql 设置密码
1 mysqladmin -u root password '1q2w3e4r'
2update user set password=password('qwe123') where user='root';
mysql外网访问
户管理
mysql>use mysql;
查看
mysql> select host,user,password from user ;
创建
mysql> create user  zx_root   IDENTIFIED by '123456';   //identified by 会将纯文本密码加密作为散列值存储

GRANT ALL PRIVILEGES ON *.* TO 'zx_root'@'%'  IDENTIFIED BY '123456'  WITH GRANT OPTION;
flush privileges;

修改http.conf

bind-address变量

php时间
修改php.ini 
date.timezone = PRC

安装数据库定时备份

1 创建备份文件 
cd /tmp 
mkdir mysqlbak
chmod -R 777 mysqlbak
vi mysqlbak.sh

TH=/bin:/sbin:/usr/bin:/usr/sbin:/usr/local/bin:/usr/local/sbin
export PATH
#数据库用户名
dbuser='root'
#数据库用密码
dbpasswd='1q2w3e4r'
#需要备份的数据库，多个数据库用空格分开
dbname='mfjh'
#备份时间
backtime=`date +%Y%m%d%H%M%S`
#日志备份路径
logpath='/tmp/mysqlbak'
#数据备份路径
datapath='/tmp/mysqlbak'
#日志记录头部
echo ‘"备份时间为${backtime},备份数据库表 ${dbname} 开始" >> ${logpath}/log.log
#正式备份数据库
for table in $dbname; do
source=`mysqldump -u ${dbuser} -p${dbpasswd} ${table}> ${logpath}/${backtime}.sql` 2>> ${logpath}/mysqllog.log;
#备份成功以下操作
if [ "$?" == 0 ];then
cd $datapath
#为节约硬盘空间，将数据库压缩
tar jcf ${table}${backtime}.tar.bz2 ${backtime}.sql > /dev/null
#删除原始文件，只留压缩后文件
rm -f ${datapath}/${backtime}.sql
#删除七天前备份，也就是只保存7天内的备份
find $datapath -name "*.tar.bz2" -type f -mtime +7 -exec rm -rf {} \; > /dev/null 2>&1
echo "数据库表 ${dbname} 备份成功!!" >> ${logpath}/mysqllog.log
else
#备份失败则进行以下操作
echo "数据库表 ${dbname} 备份失败!!" >> ${logpath}/mysqllog.log
fi
done


chmod -R 777 mysqlbak.sh

2 执行脚本定时任务

crontab -e 
00 00 * * * /tmp/mysqlbak.sh

3 如何把linux服务器上的大文件（10G以上）下载到本地
首先压缩文件，然后拆分压缩文件为2G,然后用sz下载
因为sz最大支持4G
cat workspace_20150624230059.tar.gz | split -b 2G - workspace_20150624230059.tar.gz.
sz workspace_20150624230059.tar.gz.a*
配置对应的设置是在Options ->Session Options -> Terminal -> X/Y/Zmodem -> Directories -> Download

利用ssh传输文件

在linux下一般用scp这个命令来通过ssh传输文件。


1、从服务器上下载文件
scp username@servername:/path/filename /var/www/local_dir（本地目录）

 例如scp root@192.168.0.101:/var/www/test.txt  把192.168.0.101上的/var/www/test.txt 的文件下载到/var/www/local_dir（本地目录）


2、上传本地文件到服务器
scp /path/filename username@servername:/path   

例如scp /var/www/test.php  root@192.168.0.101:/var/www/  把本机/var/www/目录下的test.php文件上传到192.168.0.101这台服务器上的/var/www/目录中

 

3、从服务器下载整个目录
scp -r username@servername:/var/www/remote_dir/（远程目录） /var/www/local_dir（本地目录）

例如:scp -r root@192.168.0.101:/var/www/test  /var/www/  

4、上传目录到服务器
scp  -r local_dir username@servername:remote_dir
例如：scp -r test  root@192.168.0.101:/var/www/   把当前目录下的test目录上传到服务器的/var/www/ 目录







# rpm -Uvh http://ftp.iij.ad.jp/pub/linux/fedora/epel/6/x86_64/epel-release-6-8.noarch.rpm
# rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm


# yum install epel-release
# rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm


# yum install --enablerepo=remi --enablerepo=remi-php56 php php-opcache php-devel php-mbstring php-mcrypt php-mysqlnd php-phpunit-PHPUnit php-pecl-xdebug php-pecl-xhprof
php --version


挂载云硬盘


fdisk -l

mount /dev/vdb /data
echo '/dev/vdb /data ext3 defaults 0 0' >> /etc/fstab
df -h



 ps 命令用于查看当前正在运行的进程。

grep 是搜索
例如： ps -ef | grep java
表示查看所有进程里 CMD 是 java 的进程信息
ps -aux | grep java
-aux 显示所有状态
