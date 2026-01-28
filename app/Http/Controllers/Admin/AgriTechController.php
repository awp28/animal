<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgriTech;

class AgriTechController extends Controller
{
    public function index()
    {
        $agritech = AgriTech::orderBy('id', 'desc')->paginate(10);
        return view('admin.agritech.index', compact('agritech'));
    }

    public function create()
    {
        return view('admin.agritech.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cost' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('agritech', 'public');
        }

        AgriTech::create([
            'title' => $request->title,
            'description' => $request->description,
            'cost' => $request->cost,
            'img' => $imagePath,
        ]);

        return redirect()->route('admin.agritech.index')->with('success', 'AgriTech created successfully!');
    }

    public function show($id)
    {
        $item = AgriTech::findOrFail($id);
        return view('admin.agritech.show', compact('item'));
    }

    public function edit($id)
    {
        $item = AgriTech::findOrFail($id);
        return view('admin.agritech.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cost' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = AgriTech::findOrFail($id);

        if ($request->hasFile('img')) {
            $item->img = $request->file('img')->store('agritech', 'public');
        }

        $item->title = $request->title;
        $item->description = $request->description;
        $item->cost = $request->cost;
        $item->save();

        return redirect()->route('admin.agritech.index')->with('success', 'AgriTech updated successfully!');
    }

    public function destroy($id)
    {
        $item = AgriTech::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.agritech.index')->with('success', 'AgriTech deleted successfully!');
    }
}
