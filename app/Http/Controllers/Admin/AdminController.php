<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Breed;
use App\Models\Category;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $stats = [
            'ads'         => Ad::count(),
            'ads_active'  => Ad::where('status', 'active')->count(),
            'users'       => User::count(),
            'categories'  => Category::count(),
            'regions'     => Region::count(),
            'breeds'      => Breed::count(),
        ];
        return view('admin.index', compact('stats'));
    }
}
