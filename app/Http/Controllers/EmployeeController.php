<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('created_at', 'desc');

        if (request()->has('query')) {
            $nameQuery = request()->get('query');
            $emailQuery = request()->get('query');

            $employees = $employees->where([['name', 'like', '%' . $nameQuery . '%'], ['email', 'like', '%' . $emailQuery . '%']]);
        }

        return view('dashboard', [
            'employees' => $employees->paginate(8),
        ]);
    }
}
