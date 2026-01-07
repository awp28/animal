<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    
    public function index()
    {
        $animals=Animal::all();
        return view('admin.animals.index', compact('animals'));
    }
 
    public function create()
    {
        return view('admin.animals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('animals', 'public');
        }

        Animal::create([
            'title' => $request->title,
            'description' => $request->description,
            'cost' => $request->cost,
            'img' => $imagePath,
        ]);
    
        return redirect()->route('animals.index');
    }

    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('admin.animals.show', compact('animal'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
