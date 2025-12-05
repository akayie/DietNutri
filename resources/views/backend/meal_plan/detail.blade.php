@extends('backend.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Meal Plan Detail</h1>

    <h2>Meal Time: {{ $mealPlan->meal_time }}</h2>
    <p><strong>Energy Food:</strong> {{ $mealPlan->energyFood->name ?? '-' }}</p>
    <p><strong>BodyBuilding Food:</strong> {{ $mealPlan->bodybuildingFood->name ?? '-' }}</p>
    <p><strong>Protective Food:</strong> {{ $mealPlan->protectiveFood->name ?? '-' }}</p>
    <p><strong>Disease:</strong> {{ $mealPlan->disease->name ?? '-' }}</p>
    <p><strong>Note:</strong> {{ $mealPlan->note }}</p>

    @if($mealPlan->image_path && file_exists(public_path('storage/'.$mealPlan->image_path)))
        <img src="{{ asset('storage/'.$mealPlan->image_path) }}" alt="Meal Plan" class="img-fluid mt-3">
    @endif
</div>
@endsection
