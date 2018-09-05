<?php
/**
 * Created by PhpStorm.
 * User: Jamal
 * Date: 9/5/2018
 * Time: 11:26 PM
 */

namespace pgsavis\cms\Http\Middleware;


use Closure;

class Admin
{
    public function handle($request , Closure $next){
        var_dump('admin');die();
        return $next($request);
    }
}