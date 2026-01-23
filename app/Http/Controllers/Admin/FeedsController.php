<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feed;

class FeedsController extends Controller
{
    
    public function index()
    {
        $feeds = Feed::select('id', 'img', 'title', 'description', 'cost')
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('admin.feeds.index', compact('feeds'));
    }
 
    public function create()
    {
        return view('admin.feeds.create');
    }

   public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('feeds', 'public');
        }

        Feed::create([
            'title' => $request->title,
            'description' => $request->description,
            'cost' => $request->cost,
            'img' => $imagePath,
        ]);

        return redirect()->route('admin.feeds.index');
    }


    public function show($id)
    {
        $feed = Feed::findOrFail($id);
        return view('admin.feeds.show', compact('feed'));
    }

    public function edit($id)
    {
        $feed = Feed::findOrFail($id);
        return view('admin.feeds.edit', compact('feed'));
    }

   public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $feed = Feed::findOrFail($id);
        $imagePath = $feed->img; // eski rasmni saqlab qolish

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('feeds', 'public');
        }

        $feed->update([
            'title' => $request->title,
            'description' => $request->description,
            'cost' => $request->cost,
            'img' => $imagePath
        ]);

        return redirect()->route('admin.feeds.index');
    }


    public function destroy($id)
    {
        $feed = Feed::findOrFail($id);
        $feed->delete();
        return redirect()->route('admin.feeds.index');
    }
}
