<?php

use App\Models\SavelyUser;
use App\Models\Usersavings;
use App\Http\Controllers\SavelyuserController;
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

Route::get('/usersavings',function(){
    return Usersavings::all();
});
Route::post('/usersavings/{userid}',function(int $userid){
    request()->validate([
        'userid' => 'required',
        'goalimagesrc' => 'required',
        'goalname' => 'required',
        'goalamount' => 'required'
    ]);
    Usersavings::create([
        'userid' => request()=>add($userid),
        'goalimagesrc' => request('goalimagesrc'),
        'goalname'=> request('goalname'),
        'goalamount' => request('goalamount'),
    ]);
});