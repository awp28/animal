<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionsController extends Controller
{
    public function index()
    {
        $regions = Region::with('parent')->orderBy('id', 'desc')->get();
        return view('admin.regions.index', compact('regions'));
    }

    public function create()
    {
        $parents = Region::whereNull('parent_id')->orderBy('name')->get();
        return view('admin.regions.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'parent_id' => 'nullable|exists:regions,id',
        ]);

        Region::create($request->only(['name', 'parent_id']));
        return redirect()->route('admin.regions.index')->with('success', 'Hudud muvaffaqiyatli qo\'shildi.');
    }

    public function show(Region $region)
    {
        $region->load(['parent', 'children']);
        return view('admin.regions.show', compact('region'));
    }

    public function edit(Region $region)
    {
        $parents = Region::whereNull('parent_id')->where('id', '!=', $region->id)->orderBy('name')->get();
        return view('admin.regions.edit', compact('region', 'parents'));
    }

    public function update(Request $request, Region $region)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'parent_id' => 'nullable|exists:regions,id',
        ]);

        $region->update($request->only(['name', 'parent_id']));
        return redirect()->route('admin.regions.index')->with('success', 'Hudud yangilandi.');
    }

    public function destroy(Region $region)
    {
        $region->delete();
        return redirect()->route('admin.regions.index')->with('success', 'Hudud o\'chirildi.');
    }
}
