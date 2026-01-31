<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Breed;
use App\Models\Category;
use Illuminate\Http\Request;

class BreedsController extends Controller
{
    public function index()
    {
        $breeds = Breed::with('category')->orderBy('id', 'desc')->get();
        return view('admin.breeds.index', compact('breeds'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.breeds.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|exists:categories,id',
        ]);

        Breed::create($request->only(['name', 'category_id']));
        return redirect()->route('admin.breeds.index')->with('success', 'Zot qo\'shildi.');
    }

    public function show(Breed $breed)
    {
        $breed->load('category');
        return view('admin.breeds.show', compact('breed'));
    }

    public function edit(Breed $breed)
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.breeds.edit', compact('breed', 'categories'));
    }

    public function update(Request $request, Breed $breed)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|exists:categories,id',
        ]);

        $breed->update($request->only(['name', 'category_id']));
        return redirect()->route('admin.breeds.index')->with('success', 'Zot yangilandi.');
    }

    public function destroy(Breed $breed)
    {
        $breed->delete();
        return redirect()->route('admin.breeds.index')->with('success', 'Zot o\'chirildi.');
    }
}
