<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Shift;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::orderBy('created_at', 'desc');

        if (request()->has('query')) {
            $query = request()->get('query');

            $employees = $employees->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('email', 'like', '%' . $query . '%')->orWhere('phone', 'like', '%' . $query . '%');
            });
        }

        return view('employee.crud_employee', [
            'employees' => $employees->paginate(8),
            'shifts' => Shift::orderBy('id')->get(),
            'positions' => Position::orderBy('id')->get(),
        ]);
    }
    public function filterEmployees(Request $request) {
        $positionId = $request->position_id;
        $shiftId = $request->shift_id;

        $employeesQuery = Employee::query();
        
        if ($positionId) {
            $employeesQuery->where('position_id', $positionId);
        }
        
        if ($shiftId) {
            $employeesQuery->where('shift_id', $shiftId);
        }

        $employees = $employeesQuery->paginate(10);

        return view('employee.display_employee', [
            'employees' => $employees,
            'positions' => Position::all(), // assuming you have Position model
            'shifts' => Shift::all(), // assuming you have Shift model
        ]);
    }
}
