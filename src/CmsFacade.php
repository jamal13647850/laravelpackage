<?php
/**
 * Created by PhpStorm.
 * User: Jamal
 * Date: 9/3/2018
 * Time: 12:08 AM
 */

namespace pgsavis\cms;


use Illuminate\Support\Facades\Facade;

class CmsFacade extends Facade
{
    protected static function getFacadeAccessor(){
        return 'cms';
    }
}