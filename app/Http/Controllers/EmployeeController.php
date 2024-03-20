<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Shift;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('created_at', 'desc');

        if (request()->has('query')) {
            $emailQuery = request()->get('query');

            $employees = $employees->where('email', 'like', '%' . $emailQuery . '%');
        }

        return view('dashboard', [
            'employees' => $employees->paginate(8),
            'shifts' => Shift::orderBy('id')->get(),
            'positions' => Position::orderBy('id')->get()
        ]);
    }
}
