@extends('frontend.layout') {{-- Assuming you have a layout file --}}

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>ကျန်းမာရေးအတွက် သင့်တင့်သည့် အစားအစာ</h1>
        <p>Diet&Nutri သည် သင့်ကျန်းမာရေးအခြေအနေ နှင့် နေထိုင်မှုပုံစံအလိုက် အဟာရအကြံပြုချက်များကို ပေးသည့်အတွက် စားသုံးမှုပုံစံကိုက်ညီပြီး အာဟာရပြည့်စုံစွာ စားသုံးနိုင်အောင် အထောက်အပံ့ပေးပါသည်။</p>
        <div>
            <a href="{{ route('meal-plans.index') }}" class="btn">စမ်းသုံးရန်</a>
        </div>
    </div>
</section>

<!-- Daily Meal Plan Section -->
<section class="section" id="features">
    <div class="section-title">
        <h2>နေ့စဉ် အစားအစာအစီအစဉ်များ</h2>
        <p>ကျန်းမာစွာ စားပါ၊ လွယ်ကူစွာ စတင်ပါ။</p>
    </div>

    <div class="feature-grid flex flex-wrap gap-5 justify-center">
        @php $count = 0; @endphp
        @foreach($mealPlans as $item)
            @if($count >= 3) @break @endif

            <div class="feature-card border rounded shadow w-1/3">
                <div class="feature-image">
                    @if($item->image_path && file_exists(public_path('storage/'.$item->image_path)))
                        <img src="{{ asset('storage/'.$item->image_path) }}" alt="Meal Image" style="width: 100%; height: 200px; object-fit: cover;">
                    @else
                        <img src="{{ asset('assets/frontend/images/default-meal.jpg') }}" alt="Meal Image" style="width: 100%; height: 200px; object-fit: cover;">
                    @endif
                </div>
                <div class="feature-content p-4">
                    <h4 class="text-primary">အစားအစာအစီအစဉ်</h4>
                    <p><strong>ရောဂါအမျိုးအစား - </strong>{{ $item->disease->name ?? 'N/A' }}</p>
                    <p><strong>အင်အားဖြစ်စေသောအစားအစာ - </strong>{{ $item->energyFood->name ?? 'N/A' }}</p>
                    <p><strong>ခန္ဓာကိုယ်ကြီးထွားဖွံ့ဖြိုးစေသောအစားအစာ - </strong>{{ $item->bodybuildingFood->name ?? 'N/A' }}</p>
                    <p><strong>ရောဂါကာကွယ်စေသောအစားအစာ - </strong>{{ $item->protectiveFood->name ?? 'N/A' }}</p>
                    <p><strong>စားသောက်ချိန် - </strong>{{ $item->meal_time }}</p>
                    <div class="text-center mt-2">
                        <a href="{{ route('meal-plans.show', $item->id) }}" class="btn">အသေးစိတ် ဖတ်ရှုရန်</a>
                    </div>
                </div>
            </div>

            @php $count++; @endphp
        @endforeach
    </div>
</section>

<!-- Nutrition Info Section -->
<section class="section">
    <div class="section-title">
        <h2>စားသောက်မှုနဲ့ အာဟာရ ပူးပေါင်းညီညွတ်ဖို့!</h2>
        <p>အချိန်အလိုက် တိုင်းတာစားသုံးမှုကသာမက၊ ကိုယ်ခန္ဓာနဲ့ကျန်းမာရေးလိုအပ်ချက်များကိုပါ ဖြည့်ဆည်းပေးနိုင်မယ့် အာဟာရဓာတ်များကိုလည်း တစ်ပြိုင်နက်တည်းနားလည်ဖို့လိုပါတယ်။</p>
    </div>

    <!-- Food Category Cards -->
    <div class="container flex flex-wrap justify-center gap-5">
        <!-- Energy Foods -->
        <div class="card bg-yellow-100 p-5 rounded w-72">
            <div class="food-image">
                <img src="https://romaniamaisanatoasa.ro/wp-content/uploads/2020/11/24313312-energy-diet-healthy-food-symbol-represented-by-foods-in-the-shape-of-flash-to-show-the-health-concep.jpg" alt="Energy Food" style="width:100%; height:150px; object-fit: cover;">
            </div>
            <h2>အင်အားဖြစ်စေသောအစားအစာများ</h2>
            <p>အဓိကအားဖြင့် ကာဗိုဟိုက်ဒရိတ်များ၊ ပရိုတိန်း၊ အဆီဓာတ်များ ပါဝင်သည်။</p>
            <a href="{{ route('energy-foods.index') }}" class="btn">အသေးစိတ် ဖတ်ရှုရန်</a>
        </div>

        <!-- Body Building Foods -->
        <div class="card bg-blue-100 p-5 rounded w-72">
            <div class="food-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPS7VS-ey9XBX7yW_lq5kJSX6J3tnIYOjlg&s" alt="Body Building" style="width:100%; height:150px; object-fit: cover;">
            </div>
            <h2>ခန္ဓာကိုယ်ကြီးထွားဖွံ့ဖြိုးစေသောအစားအစာများ</h2>
            <p>Protein များ၊ ဗီတာမင်များ ပါဝင်ပြီး ကြွက်သားဖွံ့ဖြိုးစေသည်။</p>
            <a href="{{ route('bodybuilding-foods.index') }}" class="btn">အသေးစိတ် ဖတ်ရှုရန်</a>
        </div>

        <!-- Protective Foods -->
        <div class="card bg-green-100 p-5 rounded w-72">
            <div class="food-image">
                <img src="https://www.alldaychemist.com/blog/wp-content/uploads/2015/12/healthy-heart.jpg" alt="Protective Food" style="width:100%; height:150px; object-fit: cover;">
            </div>
            <h2>‌ရောဂါကာကွယ်စေသောအစားအစာများ</h2>
            <p>သစ်သီးဝလံ၊ ဟင်းသီးဟင်းရွက်များဖြင့် ကာကွယ်နိုင်သည်။</p>
            <a href="{{ route('protective-foods.index') }}" class="btn">အသေးစိတ် ဖတ်ရှုရန်</a>
        </div>
    </div>
</section>

@endsection
