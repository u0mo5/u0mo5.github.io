#1.安装指定版本的laravel
##1.1 下载laravel
```
composer create-project laravel/laravel=5.4.* lara

cd lara
 php artisan -V
>>Laravel Framework 5.4.17
```

```
php -S localhost:8000 -t public/
等效：
php artisan serve
```

```
cd lara
sudo chmod -R 777 storage
```

##1.2.数据库迁移
```
cd ./.env
DB_HOST=localhost
DB_DATABASE=laravel5
DB_USERNAME=root
DB_PASSWORD=password

php artisan migrate
```
#2.安装对应版本的admin


首先确保安装好了laravel，并且数据库连接设置正确。
Laravel 5.1, 已经不维护了
composer require encore/laravel-admin "1.1.*"

Laravel 5.2
composer require encore/laravel-admin "1.2.*"

Laravel 5.3
composer require encore/laravel-admin "1.3.*"

Laravel 5.4
composer require encore/laravel-admin "1.4.*" 

在config/app.php加入ServiceProvider:
Encore\Admin\Providers\AdminServiceProvider::class  

然后运行下面的命令来发布资源：
php artisan vendor:publish --tag=laravel-admin
在该命令会生成配置文件config/admin.php，可以在里面修改安装的地址、数据库连接、以及表名。
然后运行下面的命令完成安装：
php artisan admin:install
启动服务后，在浏览器打开 http://localhost/admin/ ,使用用户名 admin 和密码 admin登陆.
产生的文件
安装完成之后,会在项目目录中生成以下的文件:
配置文件
安装完成之后，laravel-admin所有的配置都在config/admin.php文件中。
后台项目文件
安装完成之后，后台的安装目录为app/Admin，之后大部分的后台开发编码工作都是在这个目录下进行。
app/Admin
├── Controllers
│ ├── ExampleController.php
│ └── HomeController.php
├── bootstrap.php
└── routes.php
app/Admin/routes.php文件用来配置后台路由。
app/Admin/bootstrap.php 是laravel-admin的启动文件, 使用方法请参考文件里面的注释.
app/Admin/Controllers目录用来存放后台控制器文件，该目录下的HomeController.php文件是后台首页的显示控制器，ExampleController.php为实例文件。
静态文件
后台所需的前端静态文件在/public/packages/admin目录下.

创建model层
创建model：php artisan make:model privilegeModel（名字随便写，可以不加Model）

控制器层加载model
```
<?php
namespace App\Http\Controllers\Admin; //注意命名空间

use App\Http\Controllers\Controller;
use app\privilegeModel;

function index(){
    $model=new \App\PrivilegeModel(); //实例化model
    $data = $model -> getlist(); //调用model层中方法
}
```
Model层
```
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class privilegeModel extends Model
{
    /**
     * 查询友情链接
     */
    public function getlist()
    {
        return DB::table('tablename')->get();
    }
}
```


PS:composer更新目录
```
composer update
composer dump-autoload
```