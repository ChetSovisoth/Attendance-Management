<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function store() {
        Position::create(request()->validate(["position_title" => "min:2|max:25"]));
        return redirect()->back()->with("success", "Position Created");
    }

    public function destroy(Position $position) {
        $position->delete();

        return redirect()->back()->with('danger','Position Deleted!');
    }
    
    public function show(Position $position) {
        return view('position.show_position', compact('position'));
    }

    public function edit(Position $position) {
        $editting = true;
        return view('position.show_position', compact('position', 'editting'));
    }

    public function update(Position $position) {
        $position->update(request()->validate(["position_title" => "min:2|max:25"]));
        return redirect()->route('position.show', compact('position'))->with('success', 'Position Title Updated');
    }
}
