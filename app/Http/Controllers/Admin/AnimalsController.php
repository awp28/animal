<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    
    public function index()
    {
        $animals = Animal::select('id', 'img', 'title', 'description', 'cost')
        ->orderBy('id', 'desc')
        ->paginate(10);
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
    
        return redirect()->route('admin.animals.index');
    }

    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('admin.animals.show', compact('animal'));
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('admin.animals.edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $animal = Animal::findOrFail($id);
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('animals', 'public');
        }


        $animal->title = $request->title;
        $animal->description = $request->description;
        $animal->cost = $request->cost;
        $animal->img = $imagePath;
        $animal->save();
        
        return redirect()->route('admin.animals.index');
    }


    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->route('admin.animals.index');
    }
}
