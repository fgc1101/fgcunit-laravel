<?php
// 路由文件 可以放到这个目录下，也可以放到../Routes目录下
Route::get('/', 'FgcunitController@index');
Route::post('/', 'FgcunitController@store')->name('junit.store');

// 测试路由
Route::get('/test', 'TestController@index');