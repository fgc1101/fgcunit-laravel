> fgc1101-fgcjunit-laravel

方便与laravel框架中对于某一个类的方法调试；类似于单元测试

> 框架要求

Laravel >= 5.1

> 安装

composer require fgc1101/fgcjunit-laravel"

> 配置
> Laravel 应用

在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

'providers' => [
    Simple\FgcunitLaravel\FgcunitServiceProvide::class,
]

然后在浏览器中直接访问路由

Route::get('/', 'FgcunitController@index');
Route::post('/', 'FgcunitController@store')->name('junit.store');