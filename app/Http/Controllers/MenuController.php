<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('submenus.subsubmenus')->get();
        return inertia('Menus/Index', ['menus' => $menus]);
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->only('name'));
        return redirect()->back();
    }

    public function update(Request $request, Menu $menu)
    {
        $menu->update($request->only('name'));
        return redirect()->back();
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->back();
    }
}

