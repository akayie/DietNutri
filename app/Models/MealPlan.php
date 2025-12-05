<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MealPlan extends Model
{
use HasFactory, SoftDeletes;

    protected $fillable = [
        'energy_food_id',
        'bodybuilding_food_id',
        'protective_food_id',
        'disease_id',
        'note',
        'meal_time',
        'image_path',
    ];
     // Relations to foods and disease
    public function energyFood(): BelongsTo
    {
        return $this->belongsTo(EnergyFood::class);
    }

    public function bodybuildingFood(): BelongsTo
    {
        return $this->belongsTo(BodyBuildingFood::class);
    }

    public function protectiveFood(): BelongsTo
    {
        return $this->belongsTo(ProtectiveFood::class);
    }

    public function disease(): BelongsTo
    {
        return $this->belongsTo(Disease::class);
    }
}
