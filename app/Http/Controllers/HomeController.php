<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Breed;
use App\Models\Category;
use App\Models\Region;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $animals = Ad::with(['category', 'region', 'breed'])->where('status', 'active')->latest()->take(12)->get();
        $categories = Category::orderBy('name')->get();
        $regions = Region::whereNull('parent_id')->orderBy('name')->get();
        $feeds = collect([]);

        return view('index', compact('animals', 'feeds', 'categories', 'regions'));
    }

    public function animals(Request $request)
    {
        $query = Ad::with(['category', 'region', 'breed'])->where('status', 'active');

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
        if ($request->filled('region_id')) {
            $query->where('region_id', $request->region_id);
        }
        if ($request->filled('breed_id')) {
            $query->where('breed_id', $request->breed_id);
        }
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        $order = $request->get('order', 'newest');
        if ($order === 'price_asc') {
            $query->orderBy('price', 'asc');
        } elseif ($order === 'price_desc') {
            $query->orderBy('price', 'desc');
        } else {
            $query->latest();
        }

        $animals = $query->paginate(12)->withQueryString();
        $categories = Category::orderBy('name')->get();
        $regions = Region::orderBy('name')->get();
        $breeds = Breed::with('category')->orderBy('name')->get();

        return view('animals', compact('animals', 'categories', 'regions', 'breeds'));
    }

    public function showAd(Ad $ad)
    {
        if ($ad->status !== 'active') {
            abort(404);
        }
        $ad->load(['category', 'region', 'breed', 'attributes']);
        $ad->increment('views');
        return view('ad', compact('ad'));
    }

    public function view()
    {
        $feeds = collect([]);
        $categories = Category::orderBy('name')->get();
        return view('view', compact('feeds', 'categories'));
    }
}
