@extends('backend.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Protective Food Detail</h1>

    <h2>{{ $protectiveFood->name }}</h2>
    <p>Calories: {{ $protectiveFood->calories }}</p>
    <p>Fiber: {{ $protectiveFood->fiber }}</p>
    <p>Sugar: {{ $protectiveFood->sugar }}</p>
    <p>Vitamin: {{ $protectiveFood->vitamin }}</p>
    <p>Minerals: {{ $protectiveFood->minerals }}</p>
    <p>Description: {{ $protectiveFood->description }}</p>

    @if($protectiveFood->image_path && file_exists(public_path('storage/'.$protectiveFood->image_path)))
        <img src="{{ asset('storage/'.$protectiveFood->image_path) }}" alt="{{ $protectiveFood->name }}" class="img-fluid">
    @endif
</div>
@endsection
