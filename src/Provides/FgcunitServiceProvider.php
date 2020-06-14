<?php
namespace Simple\FgcLaravel\Provides;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

/***
 * 单元测试的服务提供者
 * 用来加载fgcunit组件的
 * Class FgcunitServiceProvider
 * @package Simple\FgcLaravel\Provides
 */
class FgcunitServiceProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //echo "这是fgcunitlaravel 服务提供者";
        // 注册路由
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'fgcunit'
        );
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    public function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            //'domain' => config('telescope.domain', null), // 定义访问路由的域名
            //定义路由的命名空间
            'namespace' => 'Simple\FgcLaravel\Http\Controllers',
            //前缀
            'prefix' => 'fgcunit',
            //这是中间件
            'middleware' => 'web',
        ];
    }

}