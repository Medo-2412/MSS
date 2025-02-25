<?php

use App\Http\Controllers\MokaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MokaController::class, 'home']);