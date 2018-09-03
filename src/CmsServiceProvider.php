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

    public function boot(){
        require (__DIR__ . '\Http\routes.php');

        $this->loadViewsFrom(__DIR__.'/Views','cms');
    }
}