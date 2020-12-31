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

Route::get('pokemons/growing', [pokemonsController::class, 'growing'])->name('pokemons.growing');

Route::post('pokemons/group', [pokemonsController::class, 'group'])->name('pokemons.group');

Route::get('pokemons/{id}', [pokemonsController::class,'show'])->where('id','[0-9]+')->name('pokemons.show');;


Route::get('pokemons/{id}/edit', [pokemonsController::class,'edit'])->where('id','[0-9]+')->name('pokemons.edit');



Route::get('pokemons/create', [pokemonsController::class,'create'])->name('pokemons.create');

Route::post('pokemons/store', [pokemonsController::class,'store'])->name('pokemons.store');

Route::patch('pokemons/update/{id}', [pokemonsController::class,'update'])->where('id','[0-9]+')->name('pokemons.update');

Route::delete('pokemons/delete/{id}', [pokemonsController::class,'delete'])->where('id','[0-9]+')->name('pokemons.delete');

Route::get('property',[propertyController::class,'index'])->name('property.index');



Route::get('property/{id}',[propertyController::class,'show'])->where('id','[0-9]+')->name('property.show');



Route::get('property/{id}/edit',[propertyController::class,'edit'])->where('id','[0-9]+')->name('property.edit');



Route::get('property/create', [propertyController::class,'create'])->name('property.create');

Route::post('property/store', [propertyController::class,'store'])->name('property.store');

Route::patch('property/update/{id}', [propertyController::class,'update'])->where('id','[0-9]+')->name('property.update');

Route::delete('property/delete/{id}', [propertyController::class,'delete'])->where('id','[0-9]+')->name('pokemons.delete');

Route::get('/getcseftoken',function(){return csrf_token();});




