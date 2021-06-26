<?php

use App\Models\SavelyUser;
use App\Models\Usersavings;

use App\Http\Controllers\SavelyuserController;
use App\Http\Controllers\UsersavingsController;
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

// Route::put('/usersavings/{userid}',[UsersavingsController::class, 'edit']);
// Route::get('/usersavings',function(){
//     return Usersavings::all();
// });
// Route::post('/usersavings',function(){
//     request()->validate([
//         'userid' => 'required',
//         'goalimagesrc' => 'required',
//         'goalname' => 'required',
//         'goalamount' => 'required'
//     ]);
//     Usersavings::create([
//         'userid' => request('userid'),        
//         'goalimagesrc' => request('goalimagesrc'),
//         'goalname'=> request('goalname'),
//         'goalamount' => request('goalamount'),
//     ]);
// });
// Route::get('/usersavings/{ids}',function(int $ids){
//     $usersavings = DB::table('usersavings')->where('userid',$ids)->get();
//     return $usersavings;

// });
// Route::delete('/usersavings/{ids}/{userid}',function(int $ids, int $userid){
//     $usersavings = DB::table('usersavings')->where('id', '=', $ids, 'AND', 'userid', '=', $userid)->delete();
// });
// Route::put('/usersavings/{ids}',function(int $ids){
//     request()->validate([
//         'goalimagesrc' => 'required',
//         'goalname' => 'required',
//         'goalamount' => 'required'
//     ]);
//     DB::table('usersavings')->where('id', '=', $ids)->update([
//         'goalimagesrc' => request('goalimagesrc'),
//         'goalname'=> request('goalname'),
//         'goalamount' => request('goalamount'),
//     ]);
// });