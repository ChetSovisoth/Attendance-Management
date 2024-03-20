<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function store() {
        Position::create(request()->validate(["position_title" => "min:2|max:15"]));
        return redirect()->back()->with("success", "Position Created");
    }
}
