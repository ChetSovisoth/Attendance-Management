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
            $query = request()->get('query');

            $employees = $employees->where(function ($queryBuilder) use ($query) {
                $queryBuilder->
                where('email', 'like', '%' . $query . '%')->
                orWhere('phone', 'like', '%' . $query . '%');
            });
        }

        return view('dashboard', [
            'employees' => $employees->paginate(8),
            'shifts' => Shift::orderBy('id')->get(),
            'positions' => Position::orderBy('id')->get(),
        ]);
    }
}
