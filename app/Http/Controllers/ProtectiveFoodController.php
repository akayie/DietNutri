<?php

namespace App\Http\Controllers;

use App\Models\ProtectiveFood;
use Illuminate\Http\Request;

class ProtectiveFoodController extends Controller
{
     public function index()
    {
        $foods = ProtectiveFood::all();
        return view('backend.protective_food.list', compact('foods'));
    }

    public function create()
    {
        return view('backend.protective_food.create');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required|string|max:255',
            'calories' => 'nullable|integer',
            'fiber' => 'nullable|integer',
            'sugar' => 'nullable|integer',
            'vitamin' => 'nullable|string|max:255',
            'minerals' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'calories', 'fiber', 'sugar', 'vitamin', 'minerals', 'description']);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('protective_foods', 'public');
        }

        ProtectiveFood::create($data);

        return redirect()->route('protective-foods.index')->with('success', 'Energy Food created successfully.');
    }

    public function show(ProtectiveFood $protectiveFood)
    {
        return view('backend.protective_food.detail', compact('protectiveFood'));
    }

    public function edit(ProtectiveFood $protectiveFood)
    {
        return view('backend.protective_food.edit', compact('protectiveFood'));
    }

    public function update(Request $request, ProtectiveFood $protectiveFood)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'calories' => 'nullable|integer',
            'fiber' => 'nullable|integer',
            'sugar' => 'nullable|integer',
            'vitamin' => 'nullable|string|max:255',
            'minerals' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'calories', 'fiber', 'sugar', 'vitamin', 'minerals', 'description']);

        if ($request->hasFile('image')) {
    $data['image_path'] = $request->file('image')->store('protective_foods', 'public');
}


        $protectiveFood->update($data);

        return redirect()->route('protective-foods.index')->with('success', 'Protective Food updated successfully.');
    }

    public function destroy(ProtectiveFood $protectiveFood)
    {
        $protectiveFood->delete();
        return redirect()->route('protective-foods.index')->with('success', 'Protective Food deleted successfully.');
    }
}
