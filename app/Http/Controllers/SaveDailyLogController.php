<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyLog;
use Illuminate\Support\Facades\Auth;

class SaveDailyLogController extends Controller
{
    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'weight' => 'nullable|numeric|min:0',
            'breakfast' => 'nullable|boolean',
            'lunch' => 'nullable|boolean',
            'dinner' => 'nullable|boolean',
        ]);

        // Save to database
        DailyLog::create([
            'user_id' => Auth::id(), // if using auth, otherwise remove
            'breakfast' => $request->has('breakfast') ? true : false,
            'lunch' => $request->has('lunch') ? true : false,
            'dinner' => $request->has('dinner') ? true : false,
            'weight' => $request->weight,
            'log_date' => now(),
        ]);

        return back()->with('success', 'Daily log saved successfully!');
    }
}
