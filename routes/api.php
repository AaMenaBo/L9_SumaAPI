<?php

use App\Http\Controllers\Api\SumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/{mode}/{any}', [SumController::class, 'operacion'])->where('any', '.*');
