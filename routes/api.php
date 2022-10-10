<?php

use App\Http\Controllers\Api\ApiController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('v1/paket', [ApiController::class,'getPaketWisata']);
Route::get('v1/kontak', [ApiController::class,'getKontak']);
Route::get('v1/destinasi', [ApiController::class,'getDestinasi']);
Route::get('v1/galeri', [ApiController::class,'getGaleri']);
