<?php

use App\Http\Controllers\JournalContoller;
use App\Http\Controllers\LogController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("log")->group(function () {
    Route::get("/", [LogController::class, "index"]);
});

Route::prefix("journal")->group(function () {
    Route::get("/", [JournalContoller::class, "index"]);
    Route::get("/old", [JournalContoller::class, "getOldJournals"]);
    Route::delete('/{id}', [JournalContoller::class, "destroy"]);
    Route::post('/', [JournalContoller::class, "store"]);
    Route::put('/', [JournalContoller::class, "update"]);
});

Route::post('/upload-file', [JournalContoller::class, 'excelUpload']);