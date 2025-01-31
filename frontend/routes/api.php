<?php

use App\Http\Controllers\PumpController;
use App\Models\Pump;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log as FacadesLog;
use Illuminate\Support\Facades\Route;
use Laravel\Pail\ValueObjects\Origin\Console;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/log', [PumpController::class, 'log']);
Route::get('/get-logs', function () {
    try {
        return response()->json(['logs' => Cache::get('moisture')]);
    } catch (Exception $e) {
        return response()->json(['status' => 'Error']);
    }
});

Route::get('/get-pump', [PumpController::class, 'status']);

Route::post('/test', function (Request $request) {
    FacadesLog::info($request->all());
    $moistour = $request->moisture;
    return response()->json(['pump' => 0, 'data' => $moistour], 200);
});
