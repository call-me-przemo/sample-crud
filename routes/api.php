<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::resources([
  'company' => CompanyController::class,
  'employee' => EmployeeController::class
]);
