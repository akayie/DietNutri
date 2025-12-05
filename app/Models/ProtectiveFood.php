<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProtectiveFood extends Model
{
 use HasFactory, SoftDeletes; // include SoftDeletes if you want soft delete functionality

    protected $fillable = [
        'name',
        'calories',
        'fiber',
        'sugar',
        'vitamin',
        'minerals',
        'description',
        'image_path',
    ];
    
    // Relation to MealPlanItem
    public function mealPlans(): HasMany
    {
        return $this->hasMany(MealPlanItem::class);
    }
}
