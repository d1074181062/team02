<?php

namespace App\Http\Controllers;
use App\Models\pokemon;
use Carbon\Carbon;
use Database\Seeders\pokemonsTableSeeder;
use Illuminate\Http\Request;

class pokemonsController extends Controller
{
    //
    public function index()
    {
        $pokemons=pokemon::all();

        return view('pokemons.index',['pokemons'=>$pokemons]);
    }

    public function create()
    {
        $pokemon=pokemon::create([
            'name'=>'達克萊伊',
            'team_num'=>15,
            'height'=>1.5,
            'weight'=>'50.5',
            'growing'=>'否',
            'group'=>'神奧',
            'place'=>'無固定場所',
            'created_at'=>Carbon::now() ,
            'updated_at'=>Carbon::now()]);
        return view('pokemons.create',$pokemon->toArray());

    }

    public function show($id)
    {
        $temp=pokemon::find($id);
        if ($temp==null)
            return"no find";
        $pokemon=$temp->toArray();

        return view('pokemons.show',$pokemon);
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
