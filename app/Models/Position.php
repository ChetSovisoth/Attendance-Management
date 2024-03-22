<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $fillable = ["position_title"];
    protected $guarded = [
        "id",
        "created_at",
        "updated_at"
    ];
    function getPosition($id) {
        return Position::find($id)->position_title;
    }

    function getTotalPosition() {
        return Position::count();
    }

    function getPositionTable() {
        return Position::all();
    }
}
