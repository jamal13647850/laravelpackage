<?php
namespace pgsavis\cms\Http\Controllers;

use App\Http\Controllers\Controller;
use pgsavis\cms\Models\Admin;

class AdminPanelController extends Controller{
   public function index(){
       /*$name = 'admin panel';

       return View('cms::index',compact('name'));*/

       return Admin::all();
   }
}