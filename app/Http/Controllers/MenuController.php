<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
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
        $categories = Category::pluck('name'); // Ambil hanya nama kategori
        return view('admin.menu', compact('menus', 'categories', 'category'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.menu-add', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'price', 'category_id', 'description']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('menus', 'public');
        }

        Menu::create($data);

        return redirect()->route('admin.menu.index')->with('success', 'Menu created!');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        // Hapus file gambar jika ada
        if ($menu->image && \Storage::disk('public')->exists($menu->image)) {
            \Storage::disk('public')->delete($menu->image);
        }
        $menu->delete();
        return redirect()->route('admin.menu.index')->with('success', 'Menu deleted!');
    }
}
