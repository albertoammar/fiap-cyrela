<?php

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

Route::get('/clientes', function (Request $request) {
    return \App\Models\User::query()->limit(20)->get()->toArray();
});


Route::get('/projetos', function (Request $request) {
    return \App\Models\Projects::query()->limit(20)->get()->toArray();
});
