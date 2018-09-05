<?php
namespace pgsavis\cms;
use Illuminate\Support\ServiceProvider;


/**
 * Created by PhpStorm.
 * User: Jamal
 * Date: 9/2/2018
 * Time: 11:50 PM
 */
class CmsServiceProvider extends ServiceProvider
{
    public  function register(){
        $this->app->bind('cms',function(){
            return new Cms;
        });

        $this->mergeConfigFrom(__DIR__.'/Configs/main.php','cms');
    }

    public function boot(\Illuminate\Routing\Router $router){
        require (__DIR__ . '\Http\routes.php');

        $this->loadViewsFrom(__DIR__.'/Views','cms');

        /*$this->publishes([
            __DIR__.'/Configs/main.php'=>config_path('cms.php'),
            __DIR__.'/Views' => base_path('resources/views/cms')
        ]);*/

        $this->app['router']->middleware('admin',\pgsavis\cms\Http\Middleware\Admin::class);

        $this->publishes([
            __DIR__.'/Configs/main.php'=>config_path('cms.php')
        ],'config');

        $this->publishes([
            __DIR__.'/Views' => base_path('resources/views/cms')
        ],'views');

        $this->publishes([
            __DIR__.'/Migrations' => database_path('/migrations')
        ],'views');


    }
}