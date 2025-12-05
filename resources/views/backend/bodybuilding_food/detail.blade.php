@extends('backend.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Energy Food Detail</h1>

    <h2>{{ $bodybuildingFood->name }}</h2>
    <p>Calories: {{ $bodybuildingFood->calories }}</p>
    <p>Protein: {{ $bodybuildingFood->protein }}</p>
    <p>Description: {{ $bodybuildingFood->description }}</p>

    @if($bodybuildingFood->image_path && file_exists(public_path('storage/'.$bodybuildingFood->image_path)))
        <img src="{{ asset('storage/'.$bodybuildingFood->image_path) }}" alt="{{ $bodybuildingFood->name }}" class="img-fluid">
    @endif
</div>
@endsection
