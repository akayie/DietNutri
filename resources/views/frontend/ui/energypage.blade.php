@extends('frontend.layout')

@section('content')
 
<div class="section-title">
  <h2>⚡ အင်အားဖြစ်စေသောအစားအစာများ</h2>
  <p>ဤအစားအစာများသည် စွမ်းအင်အတွက် အဓိကဖြစ်သော ကာဗိုဟိုက်ဒရိတ်၊ ပရိုတိန်း၊ မိုဃ်းစိတ်အဆီများ ပါဝင်သည်။</p>
</div>

<div class="container">

  @foreach($energyFoods as $food)
    <div class="food-card">
<img src="{{ asset('storage/' . $food->image_path) }}" 
     width="100" 
     alt="{{ $food->name }}">
        <div class="food-details">
          <h2>{{ $food->name }}</h2>
          <div class="food-info">
            <div>Calories: {{ $food->calories }}</div>
            <div>Protein: {{ $food->protein }}g</div>
            <div>Carbs: {{ $food->carbs }}g</div>
            <div>Fat: {{ $food->fat }}g</div>
          </div>
          <p>{{ $food->description }}</p>
        </div>
    </div>
  @endforeach

</div>

@endsection
