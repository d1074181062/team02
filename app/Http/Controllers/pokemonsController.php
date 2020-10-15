<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pokemonsController extends Controller
{
    //
    public function index()
    {
        return view('pokemons.index');
    }

    public function create()
    {
        return view('pokemons.create');
    }
    public function show($id)
    {
        if($id==5) {
            $pokemon_name = "豪力";
            $pokemon_power = "超強";
            $pokemon_color = "灰色";
        }
        else
        {
            $pokemon_name = "error";
            $pokemon_power = "error";
            $pokemon_color = "error";
        }
        return view('pokemons.show')->with(["name"=> $pokemon_name,
            "power"=> $pokemon_power,"color"=> $pokemon_color]);
    }
    public function edit($id)
    {
        if($id==5) {
            $pokemon_name = "豪力";
            $pokemon_power = "超強";
            $pokemon_color = "灰色";
        }
        else
        {
            $pokemon_name = "error";
            $pokemon_power = "error";
            $pokemon_color = "error";
        }
        $data=compact('pokemon_name','pokemon_power','pokemon_color');
        return view('pokemons.edit',$data);
    }
}
