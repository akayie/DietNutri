<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnergyFood;

class EnergyFoodController extends Controller
{
    public function index()
    {
        $foods = EnergyFood::all();
        return view('backend.energy_food.list', compact('foods'));
    }

    public function create()
    {
        return view('backend.energy_food.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'calories' => 'nullable|integer',
            'protein' => 'nullable|integer',
            'carbs' => 'nullable|integer',
            'fat' => 'nullable|integer',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'calories', 'protein', 'carbs', 'fat', 'description']);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('energy_foods', 'public');
        }

        EnergyFood::create($data);

        return redirect()->route('energy-foods.index')->with('success', 'Energy Food created successfully.');
    }

    public function show(EnergyFood $energyFood)
    {
        return view('backend.energy_food.detail', compact('energyFood'));
    }

    public function edit(EnergyFood $energyFood)
    {
        return view('backend.energy_food.edit', compact('energyFood'));
    }

    public function update(Request $request, EnergyFood $energyFood)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'calories' => 'nullable|integer',
            'protein' => 'nullable|integer',
            'carbs' => 'nullable|integer',
            'fat' => 'nullable|integer',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'calories', 'protein', 'carbs', 'fat', 'description']);

        if ($request->hasFile('image')) {
    $data['image_path'] = $request->file('image')->store('energy_foods', 'public');
}


        $energyFood->update($data);

        return redirect()->route('energy-foods.index')->with('success', 'Energy Food updated successfully.');
    }

    public function destroy(EnergyFood $energyFood)
    {
        $energyFood->delete();
        return redirect()->route('energy-foods.index')->with('success', 'Energy Food deleted successfully.');
    }
}
