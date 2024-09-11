<?php

use App\Models\OfficeUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiUserOffice;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\BudgetServicesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('useroffice', [ApiUserOffice::class,'index']);
Route::get('budgetservices', [BudgetServicesController::class,'index']);
Route::get('budgetservices/{id}', [BudgetServicesController::class,'show']);