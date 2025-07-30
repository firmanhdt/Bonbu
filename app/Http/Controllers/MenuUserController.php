<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuUserController extends Controller
{
public function index(Request $request)
    {
        $category = $request->query('category');

        $menus = Menu::with('category')
            ->when($category, function ($query) use ($category) {
                $query->whereHas('category', function ($q) use ($category) {
                    $q->where('name', $category);
                });
            })
            ->get();

        $categories = Category::all(); // ambil kategori dari database

        return view('menu', compact('menus', 'category', 'categories'));
    }
}
