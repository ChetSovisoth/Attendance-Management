<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'shift_start_time',
        'shift_end_time',
        'shift_name',
        'late_policy'
    ];
    function getShiftTable() {
        return Shift::all();
    }
    function getShift($id) {
        return Shift::find($id)->shift_name . ': ' . Shift::find($id)->shift_start_time . ' - ' .  Shift::find($id)->shift_end_time;
    }
    function getTotalShift() {
        return Shift::count();
    }
}
