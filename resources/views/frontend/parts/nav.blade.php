<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<header>
    <nav>
        <div class="logo">
            <img src="{{ asset('uploads/logo.jpg') }}" alt="Logo" style="margin-left:25px; width: 70px; height: 70px;">
        </div>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">ပင်မစာမျက်နှာ</a></li>
            <li><a href="{{ route('aboutpage') }}">ကျွန်ုပ်တို့အကြောင်း</a>
</li>
            <li><a href="{{ route('mealplanpage') }}">အစားအစာ အစီအစဉ်</a></li>
            <li><a href="{{ route('resultpage') }}">ရလဒ်</a></li>
            <li>
                <a href="#">အစားအစာများ▼</a>
                <div class="dropdown-content">
                    <a href="{{ route('energypage') }}">အင်အားဖြစ်စေသောအစားအစာများ</a>
                    <a href="{{ url('/bodybuilding') }}">ခန္ဓာကိုယ်ကြီးထွားဖွံ့ဖြိုးစေသောအစားအစာများ</a>
                    <a href="{{ url('/protective') }}">‌ရောဂါကာကွယ်စေသောအစားအစာများ</a>
                </div>
            </li>
            <li>
                <a href="#">Account ▼</a>
                <div class="dropdown-content">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/logout') }}">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
</header>
