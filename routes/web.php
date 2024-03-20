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

Route::get("/", [EmployeeController::class, 'index'])->name("dashboard");

Route::post("/employee", [EmployeeCrudController::class, 'store'])->name("employee.store");

Route::delete("/employee/{employee}", [EmployeeCrudController::class, 'destroy'])->name("employee.destroy");

Route::get("/employee/{employee}/edit", [EmployeeCrudController::class, 'edit'])->name("employee.edit");

Route::get("/employee/{employee}", [EmployeeCrudController::class, 'show'])->name("employee.show");

Route::put("/employee/{employee}/update", [EmployeeCrudController::class, 'update'])->name("employee.update");

Route::put("/employee/{employee}/reset", [EmployeeCrudController::class, 'reset'])->name("employee.reset");

Route::post("/shift", [ShiftController::class, 'store'])->name("shift.store");

Route::post("/position", [PositionController::class, 'store'])->name("position.store");

Route::get('/crud', function() {
    return view('crud.crud');
});