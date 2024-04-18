<?php

use App\Http\Controllers\frontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [frontController::class, 'index']);
