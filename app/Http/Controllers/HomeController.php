<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $query = Menu::with('category');
        if ($category) {
            $query->whereHas('category', function($q) use ($category) {
                $q->where('name', $category);
            });
        }

        $menus = $query->get();
        $categories = Category::pluck('name');

        return view('welcome', compact('menus', 'categories', 'category'));
    }
}

