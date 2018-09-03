<?php
/**
 * Created by PhpStorm.
 * User: Jamal
 * Date: 9/3/2018
 * Time: 11:12 PM
 */

Route::group(['namespace' => 'pgsavis\cms\Http\Controllers'],function(){
    Route::get('/adminpanel/index','AdminPanelController@index');
    Route::get('/adminpanel/config',function(){
        return config('cms.url');
    });
});

