<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('customers', [App\Http\Controllers\CustomerController::class, 'store']);
