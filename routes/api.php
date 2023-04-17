<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

    Route::get('/branchs', [BranchController::class, 'index']);
    Route::post('/branchs', [BranchController::class, 'store']);
    Route::get('/branchs/{id}',[BranchController::class, 'show']);
    Route::put('/branchs/{id}',[BranchController::class, 'update']);
    Route::delete('/branchs/{id}',[BranchController::class, 'destroy']);
