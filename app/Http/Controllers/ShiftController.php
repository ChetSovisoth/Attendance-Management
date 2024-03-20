<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function store() {

        $validated = request()->validate([
            'shift_name' => 'min:3|max:15',
            'shift_start_time' => 'date_format:H:i',
            'shift_end_time' => 'date_format:H:i|after:shift_start_time',
            'late_policy' => 'integer|min:1'
        ]);

        $validated['shift_time'] = $validated['shift_start_time'] . ' - ' . $validated['shift_end_time'];
        Shift::create($validated)->save();
            
        return redirect()->back()->with('success', 'Shift Created');
    }
}
