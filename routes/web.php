<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
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

Route::post("/crud", [CrudController::class, 'store'])->name("crud.store");

Route::delete("/crud/{employee}", [CrudController::class, 'destroy'])->name("crud.destroy");

Route::get("/crud/{employee}/edit", [CrudController::class, 'edit'])->name("crud.edit");

Route::get("/crud/{employee}", [CrudController::class, 'show'])->name("crud.show");

Route::put("/crud/{employee}", [CrudController::class, 'update'])->name("crud.update");