<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeCrudController extends Controller
{
    public function store() {
        
        $validated = request()->validate([
            "name"=> "required|min:2|max:25",
            'email' => 'required|email',
            'password'=> 'required|min:5|max:10',
        ]);

        $employee = Employee::create($validated);
        $employee->save();

        return redirect()->route('dashboard')->with('success','Employee Created!');
    }
    public function destroy(Employee $employee) {
        $employee->delete();

        return redirect()->route('dashboard')->with('danger','Employee Deleted!');
    }

    public function show(Employee $employee) {
        return view('employee.show_employee', compact('employee'));
    }

    public function edit(Employee $employee) {
        $editting = true;

        return view('employee.show_employee', compact('employee', 'editting'));
    }

    public function update(Employee $employee) {
        $validated = request()->validate([
            'name'=> "required|min:2|max:25",
            'email' => 'required|email',
            'password'=> 'required|min:5|max:10',
        ]);
    
        $employee->update($validated);
    
        return redirect()->route('employee.show', $employee->id)->with('success', 'Employee Updated');
    }
    

}
