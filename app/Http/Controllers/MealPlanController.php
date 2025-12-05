<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealPlan;
use App\Models\EnergyFood;
use App\Models\BodyBuildingFood;
use App\Models\ProtectiveFood;
use App\Models\Disease;

class MealPlanController extends Controller
{
    public function index()
    {
        $mealPlans = MealPlan::with(['energyFood', 'bodybuildingFood', 'protectiveFood', 'disease'])->get();
        return view('backend.meal_plan.list', compact('mealPlans'));
    }

    public function create()
    {
        $energyFoods = EnergyFood::all();
        $bodybuildingFoods = BodyBuildingFood::all();
        $protectiveFoods = ProtectiveFood::all();
        $diseases = Disease::all();

        return view('backend.meal_plan.create', compact('energyFoods', 'bodybuildingFoods', 'protectiveFoods', 'diseases'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'energy_food_id' => 'required|exists:energy_food,id',
            'bodybuilding_food_id' => 'required|exists:body_building_food,id',
            'protective_food_id' => 'required|exists:protective_food,id',
            'disease_id' => 'required|exists:diseases,id',
            'meal_time' => 'required|string|max:255',
            'note' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only([
            'energy_food_id',
            'bodybuilding_food_id',
            'protective_food_id',
            'disease_id',
            'meal_time',
            'note'
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('meal_plans', 'public');
        }

        MealPlan::create($data);

        return redirect()->route('meal-plans.index')->with('success', 'Meal Plan created successfully.');
    }

    public function show(MealPlan $mealPlan)
    {
        $mealPlan->load(['energyFood', 'bodybuildingFood', 'protectiveFood', 'disease']);
        return view('backend.meal_plan.detail', compact('mealPlan'));
    }

    public function edit(MealPlan $mealPlan)
    {
        $energyFoods = EnergyFood::all();
        $bodybuildingFoods = BodyBuildingFood::all();
        $protectiveFoods = ProtectiveFood::all();
        $diseases = Disease::all();

        return view('backend.meal_plan.edit', compact('mealPlan', 'energyFoods', 'bodybuildingFoods', 'protectiveFoods', 'diseases'));
    }

    public function update(Request $request, MealPlan $mealPlan)
    {
        $request->validate([
            'energy_food_id' => 'required|exists:energy_foods,id',
            'bodybuilding_food_id' => 'required|exists:body_building_foods,id',
            'protective_food_id' => 'required|exists:protective_foods,id',
            'disease_id' => 'required|exists:diseases,id',
            'meal_time' => 'required|string|max:255',
            'note' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only([
            'energy_food_id',
            'bodybuilding_food_id',
            'protective_food_id',
            'disease_id',
            'meal_time',
            'note'
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('meal_plans', 'public');
        }

        $mealPlan->update($data);

        return redirect()->route('meal-plans.index')->with('success', 'Meal Plan updated successfully.');
    }

    public function destroy(MealPlan $mealPlan)
    {
        $mealPlan->delete();
        return redirect()->route('meal-plans.index')->with('success', 'Meal Plan deleted successfully.');
    }
}
