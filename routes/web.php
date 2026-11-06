<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form-example', function (Request $request) {
    return view('form-example', [
        'name' => $request->query('name', ''),
        'feedback' => $request->query('feedback', ''),
    ]);
});
