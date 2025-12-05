@extends('frontend.layout')

@section('content')

<h2 class="section-title" style="margin-top: 25px;">အစားအစာအစီအစဉ်</h2>

<div class="container">

    <!-- Breakfast -->
    <div class="breakfast-container">
        <h3>မနက်စာ</h3>

        @foreach ($breakfast as $item)
        <div class="section-title" style="margin-bottom: 25px;">
    {{-- Meal Plan Image --}}
    <img src="{{ asset('uploads/' . $item->image_path) }}" 
         alt="Meal Image" style="width:100%; height:200px; object-fit:cover;">


            <p><strong>စွမ်းအင်အစားအစာ: </strong>{{ $item->energyFood->name ?? 'မရှိပါ' }}</p>
            <p><strong>ကိုယ်ခန္ဓာကြီးထွားအစားအစာ: </strong>{{ $item->bodybuildingFood->name ?? 'မရှိပါ' }}</p>
            <p><strong>ကာကွယ်ဆေးအစားအစာ: </strong>{{ $item->protectiveFood->name ?? 'မရှိပါ' }}</p>

            <div style="margin-top: 20px;">
                <a href="/Dietnutri/MealPlanItemDetail?id={{ $item->id }}" class="btn btn-primary">
                    အသေးစိတ် ဖတ်ရှုရန်
                </a>
                <button type="submit" class="btn btn-choose">ကျော်မည်</button>
            </div>

        </div>
        @endforeach

    </div>

    <!-- Lunch -->
    <div class="lunch-container">
        <h3>နေ့လည်စာ</h3>

        @foreach ($lunch as $item)
        <div class="section-title" style="margin-bottom: 25px;">

            <img src="{{ asset($item->image_path) }}"
                alt="Meal Image"
                style="width: 100%; height: 200px; object-fit: cover;">

            <p><strong>စွမ်းအင်အစားအစာ:</strong> {{ $item->energyFood->name ?? 'မရှိပါ' }}</p>
            <p><strong>ကိုယ်ခန္ဓာကြီးထွားအစားအစာ:</strong> {{ $item->bodybuildingFood->name ?? 'မရှိပါ' }}</p>
            <p><strong>ကာကွယ်ဆေးအစားအစာ:</strong> {{ $item->protectiveFood->name ?? 'မရှိပါ' }}</p>

            <div style="margin-top: 20px;">
                <a href="/Dietnutri/MealPlanItemDetail?id={{ $item->id }}" class="btn btn-primary">
                    အသေးစိတ် ဖတ်ရှုရန်
                </a>
                <button type="submit" class="btn btn-choose">ကျော်မည်</button>
            </div>
        </div>
        @endforeach

    </div>

    <!-- Dinner -->
    <div class="dinner-container">
        <h3>ညစာ</h3>

        @foreach ($dinner as $item)
        <div class="section-title" style="margin-bottom: 25px;">

            <img src="{{ asset($item->image_path) }}"
                alt="Meal Image"
                style="width: 100%; height: 200px; object-fit: cover;">

            <p><strong>စွမ်းအင်အစားအစာ:</strong> {{ $item->energyFood->name ?? 'မရှိပါ' }}</p>
            <p><strong>ကိုယ်ခန္ဓာကြီးထွားအစားအစာ:</strong> {{ $item->bodybuildingFood->name ?? 'မရှိပါ' }}</p>
            <p><strong>ကာကွယ်ဆေးအစားအစား:</strong> {{ $item->protectiveFood->name ?? 'မရှိပါ' }}</p>

            <div style="margin-top: 20px;">
                <a href="/Dietnutri/MealPlanItemDetail?id={{ $item->id }}" class="btn btn-primary">
                    အသေးစိတ် ဖတ်ရှုရန်
                </a>
                <button type="submit" class="btn btn-choose">ကျော်မည်</button>
            </div>
        </div>
        @endforeach

    </div>

</div>
 <!-- Daily Log Section -->
    <div style="padding: 20px; background-color: #f9f9f9; border-top: 1px solid #ddd; display: flex; justify-content: center;">

        <form action="/Dietnutri/SaveDailyLogController" method="post"
            style="display: flex; flex-direction: column; gap: 15px; align-items: center; text-align: center;">

            <h3 style="margin-bottom: 15px;">နေ့စဉ်အချက်အလက်</h3>

            <div style="display: flex; gap: 20px;">
                <label><input type="checkbox" name="breakfast"> မနက်စာစားပြီး</label>
                <label><input type="checkbox" name="lunch"> နေ့လည်စာစားပြီး</label>
                <label><input type="checkbox" name="dinner"> ညစာစားပြီး</label>
            </div>

            <div style="display: flex; gap: 10px; align-items:center;">
                <label for="weight">ယနေ့အလေးချိန် (kg):</label>
                <input type="number" id="weight" name="weight" step="0.1" min="0"
                    style="padding: 5px 10px; width: 120px;">
            </div>

            <button type="submit" name="status"
                style="padding: 10px 20px; background-color: #f88379; color: #fff; border: none; border-radius: 5px;">
                သိမ်းမည်
            </button>

        </form>
    </div>
@endsection

 