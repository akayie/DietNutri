<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BodyBuildingFood;

class BoduBuildingFoodController extends Controller
{
    public function index()
    {
        $foods = BodyBuildingFood::all();
        return view('backend.bodybuilding_food.list', compact('foods'));
    }

    public function create()
    {
        return view('backend.bodybuilding_food.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'calories' => 'nullable|integer',
            'protein' => 'nullable|integer',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'calories', 'protein', 'description']);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('bodybuilding-foods', 'public');
        }

        BodybuildingFood::create($data);

        return redirect()->route('bodybuilding-foods.index')->with('success', 'Energy Food created successfully.');
    }

    public function show(BodybuildingFood $bodybuildingFood)
    {
        return view('backend.bodybuilding_food.detail', compact('bodybuildingFood'));
    }

    public function edit(BodybuildingFood $bodybuildingFood)
    {
        return view('backend.bodybuilding_food.edit', compact('bodybuildingFood'));
    }

    public function update(Request $request, BodybuildingFood $bodybuildingFood)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'calories' => 'nullable|integer',
            'protein' => 'nullable|integer',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'calories', 'protein', 'description']);

        if ($request->hasFile('image')) {
    $data['image_path'] = $request->file('image')->store('bodybuilding-foods', 'public');
}


        $bodybuildingFood->update($data);

        return redirect()->route('bodybuilding-foods.index')->with('success', 'BodyBuilding Food updated successfully.');
    }

    public function destroy(BodybuildingFood $bodybuildingFood)
    {
        $bodybuildingFood->delete();
        return redirect()->route('bodybuilding-foods.index')->with('success', 'BodyBuilding Food deleted successfully.');
    }
}
