<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\membercontroller;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

// Route::get("/print",[EmployeeController::class,"getdata"]);
// Route::view("/game","form");

Route::resource('products', ProductController::class);




