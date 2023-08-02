<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pets', PetsController::class);
//Route get => pets => index
//Route get => pets/create => create
//Route post => pets => store
//Route get => pets/{id} => show
//Route put/patch => pets/{id} => update
//Route delete => pets/{id} => delete
//Route get => pets/{id}/edit => edit