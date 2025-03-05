<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// GET method
Route::get('/posts', function () {
    return view('forms.get');
});

// POST method
Route::post('/posts', function (Request $request) {
    return response()->json($request->all());
});

// POST method (create)
Route::post('/posts/create', function (Request $request) {
    return response()->json($request->all());
});

// DELETE method
Route::delete('/posts', function (Request $request) {
    return response()->json($request->all());
});

// PATCH method
Route::patch('/posts/edit', function (Request $request) {
    return response()->json($request->all());
});

// PUT method
Route::put('/posts/pu/edit', function (Request $request) {
    return response()->json($request->all());
});

