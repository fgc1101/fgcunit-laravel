<?php
namespace  Simple\FgcLaravel\Http\Controllers;

use Illuminate\Routing\Controller;
/***
 * 这是一个控制器 需要去继承一个父级控制器的
 * Class FgcunitController
 * @package Simple\FgcLaravel\Http\Controllers
 */
class TestController extends Controller{

    public function index(){
        return '这是测试控制器和方法，测试的目标是与laravel集成控制器和服务组件';
    }

}