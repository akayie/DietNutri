@extends('backend.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Energy Food Detail</h1>

    <h2>{{ $energyFood->name }}</h2>
    <p>Calories: {{ $energyFood->calories }}</p>
    <p>Protein: {{ $energyFood->protein }}</p>
    <p>Carbs: {{ $energyFood->carbs }}</p>
    <p>Fat: {{ $energyFood->fat }}</p>
    <p>Description: {{ $energyFood->description }}</p>

    @if($energyFood->image_path && file_exists(public_path('storage/'.$energyFood->image_path)))
        <img src="{{ asset('storage/'.$energyFood->image_path) }}" alt="{{ $energyFood->name }}" class="img-fluid">
    @endif
</div>
@endsection
