<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EnergyFood extends Model
{
    use HasFactory, SoftDeletes; // include SoftDeletes if using soft deletes

    protected $fillable = [
        'name',
        'calories',
        'protein',
        'carbs',
        'fat',
        'description',
        'image_path',
    ];
     // Relation to MealPlanItem
    public function mealPlans(): HasMany
    {
        return $this->hasMany(MealPlanItem::class);
    }
}
