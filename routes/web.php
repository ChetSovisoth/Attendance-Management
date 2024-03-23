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
Route::get("/employees", [EmployeeController::class, 'index'])->name("employee.crud");

Route::get('/employees/filter', [EmployeeController::class, 'filterEmployees'])->name('employee.filter');

Route::post("/employee", [EmployeeCrudController::class, 'store'])->name("employee.store");

Route::delete("/employee/{employee}", [EmployeeCrudController::class, 'destroy'])->name("employee.destroy");

Route::get("/employee/{employee}/edit", [EmployeeCrudController::class, 'edit'])->name("employee.edit");

Route::get("/employee/{employee}", [EmployeeCrudController::class, 'show'])->name("employee.show");

Route::put("/employee/{employee}/update", [EmployeeCrudController::class, 'update'])->name("employee.update");

Route::put("/employee/{employee}/reset", [EmployeeCrudController::class, 'reset'])->name("employee.reset");

Route::get("/display/employees", function() {
    return view('employee.display_employee');
});

//Shift's route
Route::get('/shifts', function() {
    return view('shift.crud_shift');
});

Route::post("/shift", [ShiftController::class, 'store'])->name("shift.store");

Route::delete("/shift/{shift}", [ShiftController::class, 'destroy'])->name("shift.destroy");

Route::get("/shift/{shift}/edit", [ShiftController::class, 'edit'])->name("shift.edit");

Route::get("/shift/{shift}", [ShiftController::class, 'show'])->name("shift.show");

Route::put("/shift/{shift}", [ShiftController::class, 'update'])->name("shift.update");

//Position's route
Route::get('/positions', function() {
    return view('position.crud_position');
});

Route::post("/position", [PositionController::class, 'store'])->name("position.store");

Route::delete("/position/{position}", [PositionController::class, 'destroy'])->name("position.destroy");

Route::get("/position/{position}/edit", [PositionController::class, 'edit'])->name("position.edit");

Route::get("/position/{position}", [PositionController::class, 'show'])->name("position.show");

Route::put("/position/{position}", [PositionController::class, 'update'])->name("position.update");


//Dashboard
Route::get('/', function() {
    return view('dashboard');
});

