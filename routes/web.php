<?php

use App\Http\Controllers\EmployeeCrudController;
use App\Http\Controllers\EmployeeController;
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

Route::put("/employee/{employee}", [EmployeeCrudController::class, 'update'])->name("employee.update");

Route::get("crud", function() {
    return view("crud.crud-page");
});