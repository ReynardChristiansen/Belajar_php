<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Publisher;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/publisher', [PublisherController::class, 'index']);
Route::post('/publisher', [PublisherController::class, 'create']);
Route::get('/publisher/{id}', [PublisherController::class, 'show']);
Route::get('/publisher/{id}/edit', [PublisherController::class, 'edit']);
Route::patch('/publisher/{id}/update', [PublisherController::class, 'updates']);
Route::delete('/publisher/{id}/delete', [PublisherController::class, 'deletes']);