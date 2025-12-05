<?php

namespace App\Http\Controllers;

use App\Models\MealPlan;
use App\Models\EnergyFood;
use App\Models\BodyBuildingFood;
use App\Models\ProtectiveFood;
use App\Models\Disease;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Homepage: list all meal plans
    public function index()
    {
        $mealPlans = MealPlan::with(['Disease', 'bodybuildingFood', 'protectiveFood', 'disease'])->get();
        return view('frontend.ui.homepage', compact('mealPlans'));
    }

    // Detail page: single meal plan
    // In FrontendController.php
// In FrontendController.php
public function about()
{
   
    // Pass the variable to the Blade view
    return view('frontend.ui.aboutpage');
}

public function mealplanpage()
{
    // Breakfast, Lunch, Dinner အလိုက် ခွဲထုတ်တာ သင့်တော်သည်
    $breakfast = MealPlan::where('meal_time', 'breakfast')
                ->with(['energyFood','bodybuildingFood','protectiveFood'])
                ->get();

    $lunch = MealPlan::where('meal_time', 'lunch')
                ->with(['energyFood','bodybuildingFood','protectiveFood'])
                ->get();

    $dinner = MealPlan::where('meal_time', 'dinner')
                ->with(['energyFood','bodybuildingFood','protectiveFood'])
                ->get();

    return view('frontend.ui.mealplanpage', compact('breakfast','lunch','dinner'));
}

public function resultpage()
{
   
    // Pass the variable to the Blade view
    return view('frontend.ui.resultpage');
}
    // Cart page (if needed)
    public function cart()
    {
        return view('frontend.ui.cartpage');
    }

 public function energy()
{
    // Get all energy foods from DB
    $energyFoods = EnergyFood::all();

    // Send to view
    return view('frontend.ui.energypage', compact('energyFoods'));
}

}
