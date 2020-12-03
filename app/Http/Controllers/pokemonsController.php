<?php

namespace App\Http\Controllers;
use App\Models\pokemon;
use Carbon\Carbon;
use Database\Seeders\pokemonsTableSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pokemonsController extends Controller
{
    //
    public function index()
    {
        //$pokemons=pokemon::all();
        $pokemon=DB::table('pokemons')
            ->join('property','pokemons.team_num','=','property.id')
            ->orderBy('pokemons.id')
            ->select(
                'pokemons.id',
                'pokemons.name',
                'property.property as property',
                'pokemons.height',
                'pokemons.weight',
                'pokemons.growing',
                'pokemons.group',
                'pokemons.place'
                )->get();
        return view('pokemons.index',['pokemons'=>$pokemon]);
    }

    public function create()
    {

        return view('pokemons.create');

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


        return view('pokemons.edit')->with("po_id",$id);
    }
    public function store(Request $request)
    {
        $name=$request->input('name');
        $team_num=$request->input('team_num');
        $height=$request->input('height');
        $weight=$request->input('weight');
        $growing=$request->input('growing');
        $group=$request->input('group');
        $place=$request->input('place');
        pokemon::create([
            'name'=>$name,
            'team_num'=>$team_num,
            'height'=>$height,
            'weight'=>$weight,
            'growing'=>$growing,
            'group'=>$group,
            'place'=> $place,
            'created'=>carbon::now()

        ]);
        return redirect('pokemons');

    }
    public function update($po_id,Request $request)
    {
        $pokemon=pokemon::FindOrFail($po_id);
        $pokemon->name = $request->input('name');
        $pokemon->team_num = $request->input('team_num');
        $pokemon->height = $request->input('height');
        $pokemon->weight = $request->input('weight');
        $pokemon->growing = $request->input('growing');
        $pokemon->group = $request->input('group');
        $pokemon->place = $request->input('place');
        $pokemon->save();


        return redirect('pokemons');
    }

    public function delete($id)
    {
        $pokemon=pokemon::FindOrFail($id);
        $pokemon->delete();


        return redirect('pokemons');
    }
}

