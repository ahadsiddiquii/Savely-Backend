<?php

use App\Models\SavelyUser;
use App\Models\Usersavings;

use App\Http\Controllers\SavelyuserController;
use App\Http\Controllers\UsersavingsController;
use App\Http\Controllers\RecordsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// USER
Route::get('/savelyusers',[SavelyuserController::class, 'index']);

Route::post('/savelyusers',[SavelyuserController::class, 'create']);

Route::put('/savelyusers/image/{user}',[SavelyuserController::class, 'editImage']);

Route::put('/savelyusers/currency/{user}',[SavelyuserController::class, 'editCurrency']);

Route::get('/savelyusers/{ids}',[SavelyuserController::class, 'show']);

Route::delete('/savelyusers/{ids}',[SavelyuserController::class, 'destroy']);

//usersavings

Route::get('/usersavings',[UsersavingsController::class, 'index']);

Route::post('/usersavings',[UsersavingsController::class, 'create']);

Route::get('/usersavings/{ids}',[UsersavingsController::class, 'show']);

Route::delete('/usersavings/{ids}/{userid}',[UsersavingsController::class, 'destroy']);

Route::put('/usersavings/{ids}',[UsersavingsController::class, 'editSavings']);

Route::put('/usersavings/saveleft/{ids}',[UsersavingsController::class, 'editSaveLeft']);

//records

Route::post('/records',[RecordsController::class, 'create']);

Route::get('/records',[RecordsController::class, 'index']);

Route::get('/records/{ids}',[RecordsController::class, 'show']);