<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;

class AdminMenusController extends Controller
{
    public function index() {
        $menus = Menu::orderBy('sort_order')->paginate(10);
        return view("admin.displaymenus",['menus'=>$menus]);
    }
}
