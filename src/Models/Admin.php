<?php
namespace pgsavis\cms\Models;
/**
 * Created by PhpStorm.
 * User: Jamal
 * Date: 9/5/2018
 * Time: 11:13 PM
 */
class Admin extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'admin';
    protected $fillable = ['username'];
}