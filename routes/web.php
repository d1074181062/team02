<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pokemonsController;
use App\Http\Controllers\propertyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pokemons',[pokemonsController::class,'index'])->name('pokemons.index');;


Route::get('pokemons/{id}', [pokemonsController::class,'show'])->where('id','[0-50]+')->name('pokemons.show');;


Route::get('pokemons/{id}/edit', [pokemonsController::class,'edit'])->where('id','[0-50]+')->name('pokemons.edit');



Route::get('pokemons/create', [pokemonsController::class,'create'])->name('pokemons.create');



Route::get('property',[propertyController::class,'index'])->name('property.index');



Route::get('property/{id}',[propertyController::class,'show'])->where('id','[0-50]+')->name('property.show');



Route::get('property/{id}/edit',[propertyController::class,'edit'])->where('id','[0-50]+')->name('pokemons.edit');



Route::get('property/create', [propertyController::class,'create'])->name('property.create');


