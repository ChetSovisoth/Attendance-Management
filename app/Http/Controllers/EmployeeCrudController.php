<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Shift;
use Illuminate\Http\Request;

class EmployeeCrudController extends Controller
{
    public function store() {
        
        $validated = request()->validate([
            'first_name' => 'required|min:2|max:25',
            'last_name' => 'required|min:2|max:25',
            'phone' => 'required|numeric|digits_between:9,10',
            'shift' => 'required|exists:shifts,id',
            'position' => 'required|exists:positions,id'
        ]);

        $employee = Employee::create([
            'first_name' => ucfirst($validated['first_name']),
            'last_name' => ucfirst($validated['last_name']),
            'phone' => $validated['phone'],
            'password' => 'AttendIn2024@!',
            'email' => strtolower($validated['first_name']) . '.' . strtolower($validated['last_name']) . '.' . date('Y') .'@attendin.com',
            'shift_id' => $validated['shift'],
            'position_id' => $validated['position']
        ]);
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
        $shifts = Shift::orderBy('id')->get();
        $positions = Position::orderBy('id')->get();
        return view('employee.show_employee', compact('employee', 'editting', 'shifts', 'positions'));
    }

    public function update(Employee $employee) {
        $validated = request()->validate([
            'first_name' => 'required|min:2|max:25',
            'last_name' => 'required|min:2|max:25',
            'phone' => 'required|numeric|digits_between:9,10',
            'email' => 'required|email',
            'shift' => 'required|exists:shifts,id',
            'position' => 'required|exists:positions,id'
        ]);
        
        $employee->update([$validated, 'position_id' => $validated['position'], 'shift_id' => $validated['shift']]);
    
        return redirect()->route('employee.show', $employee->id)->with('success', 'Employee Updated');
    }
    
    public function reset(Employee $employee) {
        $employee->update([
            'password' => 'AttendIn2024@!'
        ]);

        return redirect()->route('employee.show', $employee->id)->with('success', 'Employee Password Reseted');
    }

}
