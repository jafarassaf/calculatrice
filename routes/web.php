<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\CalculatriceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------C:\Users\jassaf\calculatrice---------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/calculator', function (){
    return view('calculator');
});C:\Users\jassaf\calculatriceC:\Users\jassaf\calculatrice
Route::post('/calculate',[CalculatriceController::class, 'calculate'])->name('calculate');