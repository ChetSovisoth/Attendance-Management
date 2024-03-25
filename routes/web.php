<?php

use App\Http\Controllers\EmployeeCrudController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ShiftController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Employee's route
Route::get("/employee", [EmployeeController::class, 'index'])->name("employee.crud");

Route::get('/employee/filter', [EmployeeController::class, 'filterEmployees'])->name('employee.filter');

Route::post("/employees", [EmployeeCrudController::class, 'store'])->name("employees.store");

Route::delete("/employees/{employee}", [EmployeeCrudController::class, 'destroy'])->name("employees.destroy");

Route::get("/employees/{employee}/edit", [EmployeeCrudController::class, 'edit'])->name("employees.edit");

Route::get("/employees/{employee}", [EmployeeCrudController::class, 'show'])->name("employees.show");

Route::put("/employees/{employee}/update", [EmployeeCrudController::class, 'update'])->name("employees.update");

Route::put("/employees/{employee}/reset", [EmployeeCrudController::class, 'reset'])->name("employees.reset");

Route::get("/display/employees", function() {
    return view('employee.display_employee');
});

//Shift's route
Route::get('/shifts', function() {
    return view('shift.crud_shift');
});

Route::post("/shifts", [ShiftController::class, 'store'])->name("shifts.store");

Route::delete("/shifts/{shift}", [ShiftController::class, 'destroy'])->name("shifts.destroy");

Route::get("/shifts/{shift}/edit", [ShiftController::class, 'edit'])->name("shifts.edit");

Route::get("/shifts/{shift}", [ShiftController::class, 'show'])->name("shifts.show");

Route::put("/shifts/{shift}", [ShiftController::class, 'update'])->name("shifts.update");

Route::get("/display/shifts", function() {
    return view('shift.display_shift');
});

//Position's route
Route::get('/positions', function() {
    return view('position.crud_position');
});

Route::post("/positions", [PositionController::class, 'store'])->name("positions.store");

Route::delete("/positions/{position}", [PositionController::class, 'destroy'])->name("positions.destroy");

Route::get("/positions/{position}/edit", [PositionController::class, 'edit'])->name("positions.edit");

Route::get("/positions/{position}", [PositionController::class, 'show'])->name("positions.show");

Route::put("/positions/{position}", [PositionController::class, 'update'])->name("positions.update");

Route::get("/display/positions", function() {
    return view('position.display_position');
});

//Dashboard
Route::get('/', function() {
    return view('dashboard');
});

