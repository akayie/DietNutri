@extends('frontend.layout')

@section('content')
 

<div class="container">

    <!-- Page Header -->
    <div class="page-header" style="text-align:center;">
        <h3 style="font-size:45px; color:#e43636;">🍎 သင်၏ နေ့စဉ် အစားအစာ စာရင်း</h3>
        <p style="font-size:18px; color:#555; margin-top:20px;">
            နေ့စဉ် စားသောက်မှုကို ထိန်းသိမ်းပြီး ကိုယ်အလေးချိန် တိုးတက်မှုကို ကြည့်ရှုနိုင်ပါသည်။
        </p>

        <h4 style="color:#28a745; font-weight:500; background:#eafaf1;
            padding:10px 15px; border-radius:8px; display:inline-block; margin-top:20px;">
            သင်၏ကိုယ်အလေးချိန်အဆင့် - 17.01 (အလွန်ပိန်)
        </h4>

        <p style="font-size:16px; color:#666;">အသက် - 21 နှစ်</p>
        <p style="font-size:16px; color:#666;">အရပ် - 159.0 စင်တီမီတာ</p>
        <p style="font-size:16px; color:#666;">ကိုယ်အလေးချိန် - 43.0 ကီလိုဂရမ်</p>
    </div>
    
    <!-- Daily Log Table -->
    <div class="card" style="max-width:600px; margin:auto; text-align:center;">
        <div class="card-header">နေ့စဉ်စားသောက်မှု မှတ်တမ်းများ</div>

        <div style="overflow-x:auto; padding:20px;">
            <table>
                <thead>
                    <tr>
                        <th>နေ့</th>
                        <th>မနက်စာ</th>
                        <th>နေ့လယ်စာ</th>
                        <th>ညစာ</th>
                        <th>ကိုယ်အလေးချိန် (kg)</th>
                    </tr>
                </thead>
                <tbody id="dietLogTableBody">

                    <tr class="diet-log-row">
                        <td>1</td>
                        <td>စားပြီး</td>
                        <td>မစားရသေး</td>
                        <td>မစားရသေး</td>
                        <td>43.0</td>
                    </tr>

                    <tr class="diet-log-row">
                        <td>2</td>
                        <td>မစားရသေး</td>
                        <td>စားပြီး</td>
                        <td>စားပြီး</td>
                        <td>43.0</td>
                    </tr>

                </tbody>
            </table>

            <button id="seeMoreBtn"
                style="padding:8px 16px; background:#36a2eb; color:#fff;
                border:none; border-radius:4px; cursor:pointer;">
                နောက်ထပ် ဖတ်ရှုရန်
            </button>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="charts-container">

        <div class="chart-card">
            <div class="chart-header">ကိုယ်အလေးချိန် တိုးတက်မှု</div>
            <canvas id="barChart"></canvas>
        </div>

        <div class="chart-card">
            <div class="chart-header">စားသောက်မှု ပြီးစီးမှု</div>
            <canvas id="pieChart"></canvas>
        </div>

    </div>

</div>


@endsection
