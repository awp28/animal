<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdAttribute;
use App\Models\Breed;
use App\Models\Category;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index()
    {
        $ads = Ad::with(['user', 'category', 'breed', 'region'])->orderBy('id', 'desc')->paginate(20);
        return view('admin.ads.index', compact('ads'));
    }

    public function create()
    {
        $users = User::orderBy('id')->get();
        $categories = Category::orderBy('name')->get();
        $breeds = Breed::with('category')->orderBy('name')->get();
        $regions = Region::orderBy('name')->get();
        return view('admin.ads.create', compact('users', 'categories', 'breeds', 'regions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'breed_id' => 'nullable|exists:breeds,id',
            'title' => 'required|string|max:200',
            'type' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'currency' => 'nullable|string|max:10',
            'age' => 'nullable|string|max:50',
            'gender' => 'nullable|string|max:20',
            'weight' => 'nullable|numeric|min:0',
            'quantity' => 'nullable|numeric|min:0',
            'unit' => 'nullable|string|max:50',
            'description' => 'required|string',
            'region_id' => 'required|exists:regions,id',
            'contact_phone' => 'nullable|string|max:20',
            'status' => 'nullable|string|max:20',
            'expires_at' => 'nullable|date',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',

        ]);

        $ad = Ad::create([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'breed_id' => $request->breed_id,
            'title' => $request->title,
            'type' => $request->type,
            'price' => $request->price,
            'currency' => $request->currency ?? 'UZS',
            'age' => $request->age,
            'gender' => $request->gender,
            'weight' => $request->weight,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
            'description' => $request->description,
            'region_id' => $request->region_id,
            'contact_phone' => $request->contact_phone,
            'status' => $request->status ?? 'active',
            'expires_at' => $request->expires_at,
        ]);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                if ($file && $file->isValid()) {
                    $ad->addMedia($file)->toMediaCollection('images');
                }
            }
        }
        

        if ($request->has('attr_keys') && is_array($request->attr_keys)) {
            $values = $request->attr_values ?? [];
            foreach ($request->attr_keys as $i => $key) {
                if (!empty(trim($key ?? ''))) {
                    AdAttribute::create([
                        'ad_id' => $ad->id,
                        'key' => trim($key),
                        'value' => $values[$i] ?? null,
                    ]);
                }
            }
        }

        return redirect()->route('admin.ads.index')->with('success', 'E\'lon qo\'shildi.');
    }

    public function show(Ad $ad)
    {
        $ad->load(['user', 'category', 'breed', 'region', 'attributes']);
        return view('admin.ads.show', compact('ad'));
    }

    public function edit(Ad $ad)
    {
        $ad->load(['attributes']);
        $users = User::orderBy('id')->get();
        $categories = Category::orderBy('name')->get();
        $breeds = Breed::with('category')->orderBy('name')->get();
        $regions = Region::orderBy('name')->get();
        return view('admin.ads.edit', compact('ad', 'users', 'categories', 'breeds', 'regions'));
    }

    public function update(Request $request, Ad $ad)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'breed_id' => 'nullable|exists:breeds,id',
            'title' => 'required|string|max:200',
            'type' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'currency' => 'nullable|string|max:10',
            'age' => 'nullable|string|max:50',
            'gender' => 'nullable|string|max:20',
            'weight' => 'nullable|numeric|min:0',
            'quantity' => 'nullable|numeric|min:0',
            'unit' => 'nullable|string|max:50',
            'description' => 'required|string',
            'region_id' => 'required|exists:regions,id',
            'contact_phone' => 'nullable|string|max:20',
            'status' => 'nullable|string|max:20',
            'expires_at' => 'nullable|date',
            'images' => 'nullable',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        $ad->update([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'breed_id' => $request->breed_id,
            'title' => $request->title,
            'type' => $request->type,
            'price' => $request->price,
            'currency' => $request->currency ?? 'UZS',
            'age' => $request->age,
            'gender' => $request->gender,
            'weight' => $request->weight,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
            'description' => $request->description,
            'region_id' => $request->region_id,
            'contact_phone' => $request->contact_phone,
            'status' => $request->status ?? 'active',
            'expires_at' => $request->expires_at,
        ]);

        $ad->attributes()->delete();
        if ($request->has('attr_keys') && is_array($request->attr_keys)) {
            $values = $request->attr_values ?? [];
            foreach ($request->attr_keys as $i => $key) {
                if (!empty(trim($key ?? ''))) {
                    AdAttribute::create([
                        'ad_id' => $ad->id,
                        'key' => trim($key),
                        'value' => $values[$i] ?? null,
                    ]);
                }
            }
        }

        if ($request->hasFile('images')) {
            $ad->clearMediaCollection('images');
            foreach ($request->file('images') as $i => $file) {
                if ($file && $file->isValid()) {
                    $ad->addMediaFromRequest("images.$i")
                       ->toMediaCollection('images');
                }
            }
        }

        return redirect()->route('admin.ads.index')->with('success', 'E\'lon yangilandi.');
    }

    public function destroy(Ad $ad)
    {
        $ad->clearMediaCollection('images');
        $ad->delete();
        return redirect()->route('admin.ads.index')->with('success', 'E\'lon o\'chirildi.');
    }
}
