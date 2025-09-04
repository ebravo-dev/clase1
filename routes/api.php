<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hola-mundo', function () {
    return response()->json([
        'message' => 'Hola Mundo',
        'status' => 'success',
        'timestamp' => now()
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
