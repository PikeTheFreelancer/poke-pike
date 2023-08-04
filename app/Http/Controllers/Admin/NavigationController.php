<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Navigation;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        $menus = Navigation::all();
        return view('admin.pages.navigation', ['menus' => $menus]);
    }
}
