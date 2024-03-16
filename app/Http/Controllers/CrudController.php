<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function store() {

        $validated = request()->validate([
            "emp-name"=> "required|min:3|max:12",
            'emp-email' => 'required|email',
            'emp-password'=> 'required|min:5|max:10',
        ]);

        //dd($validated);

        $employee = Employee::create([
            'name'=> $validated['emp-name'],
            'email'=> $validated['emp-email'],
            'password'=> $validated['emp-password'],
        ]);
        $employee->save();

        return redirect()->route('dashboard')->with('success','Employee Created!');
    }
    public function destroy(Employee $employee) {
        $employee->delete();

        return redirect()->route('dashboard')->with('danger','Employee Deleted!');
    }

    public function show(Employee $employee) {
        return view('show_employee', compact('employee'));
    }

    public function edit(Employee $employee) {
        $editting = true;

        return view('show_employee', compact('employee', 'editting'));
    }

    public function update(Employee $employee) {
        $validated = request()->validate([
            'emp-name'=> "required|min:3|max:12",
            'emp-email' => 'required|email',
            'emp-password'=> 'required|min:5|max:10',
        ]);
    
        $employee->update([
            'name'=> $validated['emp-name'],
            'email'=> $validated['emp-email'],
            'password'=> $validated['emp-password'],
        ]);
    
        return redirect()->route('crud.show', $employee->id)->with('success', 'Employee Updated');
    }
    

}
