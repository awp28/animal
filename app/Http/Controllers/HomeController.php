<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Feed;

class HomeController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('index', compact('animals'));
    }

    public function animals()
    {
        $animals = Animal::all();
        return view('animals', compact('animals'));
    }

    public function view()
    {
        $feeds = Feed::all();
        return view('view', compact('feeds'));
    }
}
