@extends('frontend.layout')

@section('title', 'About Us | Diet & Nutrition System')

@section('content')
<body class="bg-gradient-to-br from-green-50 via-teal-50 to-green-100 text-gray-800 font-sans">


    <!-- Hero Section -->
    <section class="relative text-center py-20 bg-gradient-to-r from-green-100 via-teal-50 to-green-100">
        <h2 class="text-4xl font-bold mb-5">ကျွန်ုပ်တို့အကြောင်း</h2>
        <p class="text-lg md:text-xl text-gray-700 mt-5 max-w-2xl mx-auto leading-relaxed tracking-wide">
            စိတ်ကြိုက်အစားအစာနှင့် အာဟာရအကြံပြုချက်များဖြင့်
            ကျန်းမာရေးနှင့် ညီညွတ်သော လူနေမှုပုံစံကို မြှင့်တင်ပါ။
        </p>
    </section>

    <!-- About Section -->
    <section class="container mx-auto py-16 px-6">
        <div class="bg-white rounded-3xl shadow-2xl p-10 transition-transform hover:scale-105 duration-500">
            <p class="text-lg leading-relaxed mb-6">
                Welcome to <span class="text-pink-400 font-semibold">Diet and Nutrition Recommendation System</span> – 
                သင့်ကျန်းမာရေးအတွက် စမတ်ကျသော အဖော် ဖြစ်သည်။
            </p>

            <p class="text-lg leading-relaxed mb-6">
                ကျွန်ုပ်တို့သည် သိပ္ပံပညာ၊ အစားအသောက်ဉာဏ်ကြီးများနှင့်
                AI algorithm များကို ပေါင်းစပ်ကာ သင့်အတွက်သီးသန့်အစားအသောက်အကြံပြုချက်များ
                ပေးဆောင်ပါသည်။
            </p>

            <p class="text-lg leading-relaxed">
                ကိုယ်အလေးချိန်လျော့ချခြင်း၊ ကြွက်သားတက်စေခြင်း ၊ 
                သင့်အတွက်သင့်တင့်သော နေ့စဉ်အစားအသောက်အစီအစဉ်များကို
                အချိန်မရွေးထုတ်ပေးနိုင်ပါသည်။
            </p>
        </div>
    </section>

    <!-- Team Section -->
    <section class="container mx-auto py-16 px-6">
        <h3 class="text-3xl font-bold mb-10 text-center">🌟 Meet Our Team</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            
            <!-- Team Member 1 -->
            <div class="team-card">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full border-4 border-green-400 shadow-md overflow-hidden">
                    <img src="https://www.shutterstock.com/image-vector/cute-anime-boy-dark-blue-600nw-2313540141.jpg" 
                         class="w-full h-full object-cover" />
                </div>
                <h4 class="team-card-title">Hein Htet Aung</h4>
                <p class="text-gray-700">Nutrition Specialist</p>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full border-4 border-green-400 shadow-md overflow-hidden">
                    <img src="https://i.pinimg.com/1200x/37/c4/d9/37c4d9c01d325b75d8f979d7aacddb0d.jpg" 
                         class="w-full h-full object-cover" />
                </div>
                <h4 class="team-card-title">Akayie Kyaw</h4>
                <p class="text-gray-700">System & Nutrition Coordinator</p>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full border-4 border-green-400 shadow-md overflow-hidden">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD0ULn1zSbQfbFT7c657B-5zTtPzXkzrnPhg&s"
                         class="w-full h-full object-cover" />
                </div>
                <h4 class="team-card-title">Chan Myae Hinn</h4>
                <p class="text-gray-700">Nutrition Consultant</p>
            </div>

        </div>
    </section>

@endsection
