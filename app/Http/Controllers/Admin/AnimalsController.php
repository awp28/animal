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
        //
    }

    public function show($id)
    {
        //
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
